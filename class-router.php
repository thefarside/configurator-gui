<?php
/**
 * Module Name: Configurator GUI
 * Module URI: https://github.com/thefarside/configurator-gui/tree/main/class-router.php
 * Version: 0.0.1
 * Description: A graphical user interface for the Configurator plugin that shows module load status and header information.
 * Requires at least: 6.9.1
 * Requires PHP: 8.5.1
 * Requires Modules: Configurator\Gui\Presenters\Page, Configurator\Gui\Models\Page, Configurator\Gui\Views\Page
 */

namespace Configurator\Gui;

use Configurator\Gui\Presenters\Page as Presenter;
use Configurator\Gui\Models\Page as Model;
use Configurator\Gui\Views\Page as View;

class Router {

	private static $instance;

	private function __construct() {
		$model = new Model();
		$view = new View();
		$presenter = new Presenter( $model, $view );
	}

	public static function initialize() {
		if ( ! static::$instance ) {
			static::$instance = new static();
		}
		return static::$instance;
	}
}
