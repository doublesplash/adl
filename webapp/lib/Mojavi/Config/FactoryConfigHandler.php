<?php
/**
 * FactoryConfigHandler allows you to specify which factory implementation the
 * system will use.
 *
 * @package    Mojavi
 * @subpackage Config
 */
namespace Mojavi\Config;

use Mojavi\Logging\LoggerManager;
use Mojavi\Exception\ParseException;

class FactoryConfigHandler extends IniConfigHandler
{

    // +-----------------------------------------------------------------------+
    // | METHODS                                                               |
    // +-----------------------------------------------------------------------+

    /**
     * Execute this configuration handler.
     *
     * @param string An absolute filesystem path to a configuration file.
     *
     * @return string Data to be written to a cache file.
     *
     * @throws <b>ConfigurationException</b> If a requested configuration file
     *                                       does not exist or is not readable.
     * @throws <b>ParseException</b> If a requested configuration file is
     *                               improperly formatted.
     */
    public function & execute ($config)
    {

        // available list of factories
        $factories = array('request', 'storage', 'user', 'security_filter');

        // set our required categories list and initialize our handler
        $categories = array('required_categories' => $factories);

        $this->initialize($categories);

        // parse the ini
        $ini = $this->parseIni($config);

        // init our data and includes arrays
        $includes  = array();
        $inits     = array();
        $instances = array();

        // let's do our fancy work
        foreach ($factories as $factory)
        {

            // see if the factory exists
            if (!isset($ini[$factory]))
            {

                // factory hasn't been registered
                $error = 'Configuration file "%s" must register "%s" factory';
                $error = sprintf($config, $factory);

                throw new ParseException($error);

            }

            // get factory keys
            $keys = $ini[$factory];

            if (!isset($keys['class']))
            {

                // missing class key
                $error = 'Configuration file "%s" specifies category ' .
                         '"%s" with missing class key';
                $error = sprintf($error, $config, $factory);

                throw new ParseException($error);

            }

            $class = $keys['class'];

            if (isset($keys['file']))
            {

                // we have a file to include
                $file =& $keys['file'];
                $file =  $this->replaceConstants($file);
                $file =  $this->replacePath($file);

                if (!is_readable($file))
                {

                    // factory file doesn't exist
                    $error = 'Configuration file "%s" specifies class ' .
                             '"%s" with nonexistent or unreadablefile ' .
                             '"%s"';
                    $error = sprintf($error, $config, $class, $file);

                    throw new ParseException($error);

                }

                // append our data
                $tmp        = "require_once('%s');";
                $includes[] = sprintf($tmp, $file);

            }

            // parse parameters
            $parameters = ParameterParser::parse($keys);

            // append new data
            switch ($factory)
            {

                case 'request':

                    // append instance creation
                    $tmp         = "\$this->request = " .
                                   "\\Mojavi\\Request\\Request::newInstance('%s');";
                    $instances[] = sprintf($tmp, $class);

                    // append instance initialization
                    $tmp     = "\$this->request->initialize(\$this->context, " .
                               "%s);";
                    $inits[] = sprintf($tmp, $parameters);

                    break;

                case 'security_filter':

                    // append creation/initialization in one swipe
                    $tmp     = "\nif (MO_USE_SECURITY)\n{\n" .
                               "\t\$this->securityFilter = " .
                               "\\Mojavi\\Filter\\SecurityFilter::newInstance('%s');\n" .
                               "\t\$this->securityFilter->initialize(" .
                               "\$this->context, %s);\n}\n";
                    $inits[] = sprintf($tmp, $class, $parameters);

                    break;

                case 'storage':

                    // append instance creation
                    $tmp         = "\$this->storage = " .
                                   "\\Mojavi\\Storage\\Storage::newInstance('%s');";
                    $instances[] = sprintf($tmp, $class);

                    // append instance initialization
                    $tmp     = "\$this->storage->initialize(\$this->context, " .
                               "%s);";
                    $inits[] = sprintf($tmp, $parameters);

                    break;

                case 'user':

                    // append instance creation
                    $tmp         = "\$this->user = \\Mojavi\\User\\User::newInstance('%s');";
                    $instances[] = sprintf($tmp, $class);

                    // append instance initialization
                    $tmp     = "\$this->user->initialize(\$this->context, %s);";
                    $inits[] = sprintf($tmp, $parameters);

            }

        }

        // context creation
        $context = "\$this->context = new \\Mojavi\\Core\\Context(%s, %s, %s, %s, %s);";
        $context = sprintf($context, '$this', '$this->request',
                           '$this->user', '$this->storage',
                           '$this->databaseManager');

        if (defined('MO_USE_LOGGING') && MO_USE_LOGGING) {
            LoggerManager::initialize();
        }

                           
        // compile data
        $retval = "<?php\n" .
                  "// auth-generated by FactoryConfigHandler\n" .
                  "// date: %s\n%s\n%s\n%s\n%s\n?>";
        $retval = sprintf($retval, date('m/d/Y H:i:s'),
                          implode("\n", $includes), implode("\n", $instances),
                          $context, implode("\n", $inits));

        return $retval;

    }

}
