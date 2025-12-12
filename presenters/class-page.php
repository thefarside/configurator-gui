<?php
/**
 * Module Name: Configurator GUI
 * Module URI: https://github.com/thefarside/configurator-gui/tree/main/presenters/class-page.php
 * Version: 0.0.1
 * Description: Formats Configurator GUI Model data for Configurator GUI View rendering and hooks the render to a WordPress page.
 * Requires at least: 6.9
 * Requires PHP: 8.4.11
 * Requires Modules: Configurator\Gui\Models\Page, Configurator\Gui\Views\Page
 */

namespace Configurator\Gui\Presenters;

use Configurator\Gui\Models\Page as Model;
use Configurator\Gui\Views\Page as View;

class Page {

	private Model $Model;
	private View $View;

	public function __construct( Model $model, View $view ) {
		$this->Model = $model;
		$this->View = $view;
		add_action( 'admin_menu', array( $this, 'register_menu' ), PHP_INT_MAX );
		add_action( 'toplevel_page_configurator', array( $this, 'enqueue_assets' ), PHP_INT_MAX );
	}

	public function register_menu() : void {
		$data = $this->Model->get();
		add_menu_page(
			$data['title'],
			$data['title'],
			'administrator',
			$data['id'],
			array( $this, 'present' ),
			'dashicons-info',
			PHP_INT_MAX,
		);
		return;
	}

	public function present() : void {
		$data = $this->Model->get();
		$map['id'] = $data['id'];
		$map['title'] = $data['title'];
		foreach ( $data['modules'] as $module ) {
			$map['table']['body'][] = array(
				'Enabled'		=> $module['Enabled'],
				'Class'			=> $module['Class'],
				'Name'			=> $module['Module Name'],
				'Description'	=> $module['Description'],
				'Version'		=> $module['Version'],
				'WordPress'		=> $module['Requires at least'],
				'PHP'			=> $module['Requires PHP'],
				'Dependencies'	=> $module['Requires Modules'],
				'URI'			=> $module['Module URI'],
				'Text Domain'	=> $module['Text Domain'],
			);
		}
		$map['table']['head'][] = $map['table']['body'][0];
		echo $this->View->render( dirname( __DIR__, 1 ) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'page.phtml', $map );
		return;
	}

	public function enqueue_assets() : void {
		wp_enqueue_script_module( 'configurator-gui', WPMU_PLUGIN_URL . '/configurator/gui/assets/scripts/custom.js', array(), false );
		wp_enqueue_style( 'configurator-gui', WPMU_PLUGIN_URL . '/configurator/gui/assets/styles/custom.css' );
		return;
	}
}