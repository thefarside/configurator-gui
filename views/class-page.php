<?php
/**
 * Module Name: Configurator GUI
 * Module URI: https://github.com/thefarside/configurator-gui/tree/main/views/class-page.php
 * Version: 0.0.1
 * Description: Renders Configurator GUI template.
 * Requires at least: 6.9
 * Requires PHP: 8.4.11
 * Requires Modules: Configurator\Gui\Views\Template\Page
 */

namespace Configurator\Gui\Views;

class Page {

	public function render( string $path, array $data = array() ) : string {
		ob_start();
		extract( $data );
		require( $path );
		return ob_get_clean();
	}
}