<?php
/**
 * CompileConfigHandler gathers multiple files and puts them into a single file.
 * Upon creation of the new file, all comments and blank lines are removed.
 *
 * @package    Mojavi
 * @subpackage Config
 */
namespace Mojavi\Config;

use Mojavi\Exception\ConfigurationException;
use Mojavi\Exception\ParseException;

class CompileConfigHandler extends ConfigHandler
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

        if (!is_readable($config))
        {

            // can't read the configuration
            $error = 'Configuration file "%s" does not exist or is not ' .
                     'readable';
            $error = sprintf($error, $config);

            throw new ConfigurationException($error);

        }

        // load the entire file
        $files = @file($config);

        if ($files === false)
        {

            // configuration couldn't be parsed
            $error = 'Configuration file "%s" could not be parsed';
            $error = sprintf($error, $config);

            throw new ParseException($error);

        }

        // init our data
        $data = '';

        // let's do our fancy work
        foreach ($files as &$file)
        {

            $file = trim($file);

            if (strlen($file) > 0 && substr($file, 0, 1) != ';')
            {

                // we'll assume this is a file since the line does not start
                // with a semi-colon (used for commenting)

                $file = $this->replaceConstants($file);
                $file = $this->replacePath($file);

                if (!is_readable($file))
                {

                    // file doesn't exist
                    $error = 'Configuration file "%s" specifies nonexistent ' .
                             'or unreadable file "%s"';
                    $error = sprintf($error, $config, $file);

                    throw new ParseException($error);

                }

                $contents = @file_get_contents($file);

                // append file data
                $data .= "\n" . $contents;

            }

        }

        // replace windows and mac format with unix format
         $data = str_replace("\r\n", "\n", $data);
         $data = str_replace("\r", "\n", $data);

        // strip php tags

         $data = preg_replace('/<\?php/', '', $data);
         $data = preg_replace('/<\?/', '', $data);
         $data = preg_replace('/\?>/', '', $data);

        // strip comments
        //$data = preg_replace("/\/\*(.*?)\*\//s", "\n", $data);
        //$data = preg_replace("/\s*\/\/.*?\n/s", "\n", $data);

        // replace multiple new lines with a single newline
        $data = preg_replace("/\n\s+\n/s", "\n", $data);
        $data = preg_replace("/\n+/s", "\n", $data);

        $data = trim($data);

        // compile data
        $retval = "<?php\n" .
                  "// auth-generated by CompileConfigHandler\n" .
                  "// date: %s\n%s\n?>";
        $retval = sprintf($retval, date('m/d/Y H:i:s'), $data);

        //opcache_compile_file($file);
        
        return $retval;

    }

}

