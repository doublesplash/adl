<?php
use \Mojavi\View\BasicView;
// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.								  |
// | Copyright (c) 2003, 2004 Sean Kerr.									   |
// |																		   |
// | For the full copyright and license information, please view the LICENSE   |
// | file that was distributed with this source code. You can also view the	|
// | LICENSE file online at http://www.mojavi.org.							 |
// +---------------------------------------------------------------------------+

class IndexView extends BasicView
{
	// +-----------------------------------------------------------------------+
	// | METHODS															   |
	// +-----------------------------------------------------------------------+

	/**
	 * Execute any presentation logic and set template attributes.
	 *
	 * @return void
	 *
	 * @author Sean Kerr (skerr@mojavi.org)
	 * @since  1.0.0
	 */
	public function execute () {
		$this->setDecoratorTemplate(MO_TEMPLATE_DIR .  '/index.shell.php');
	}
}

?>