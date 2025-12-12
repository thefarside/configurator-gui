<?php
/**
 * Module Name: Configurator GUI
 * Module URI: https://github.com/thefarside/configurator-gui/tree/main/models/class-page.php
 * Version: 0.0.1
 * Description: Fetches Configurator GUI data.
 * Requires at least: 6.9
 * Requires PHP: 8.4.11
 * Requires Modules: Configurator\Load
 */

namespace Configurator\Gui\Models;

use Configurator\Load;

class Page {

	public function get() : array {
		$namespace_parts = explode( '\\', __NAMESPACE__ );
		$data['title'] = ucfirst( array_shift( $namespace_parts ) );
		$data['id'] = lcfirst( $data['title'] );
		$data['modules'] = Load::$modules;
		return $data;
	}
}