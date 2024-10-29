<?php
/**
 * Plugin Name: BasePress Oxygen Integration
 * Description: Integrate BasePress Knowledge Base with Oxygen Visual Site Builder using a single shortcode.
 * Version: 1.0.2
 * Requires PHP: 5.6
 * Author: codeSavory
 * Author URI: https://www.codesavory.com
 * Text Domain: basepress-oxygen
 * Domain Path: /languages
 * License: GPLv3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 */
// Exit if called directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( ! class_exists( 'BasePress_Oxygen_integration' ) ){

	class BasePress_Oxygen_integration{

		private $basepress_template;

		function __construct(){
			add_action( 'init', array( $this, 'init' ) );
		}

		/**
		 * Initiate our plugin
		 *
		 * @since 1.0.0
		 */
		public function init(){
			add_filter( 'basepress_page_template', array( $this, 'get_basepress_template' ), 999 );
			add_shortcode( 'basepress-oxygen', array( $this, 'basepress_content' ) );
		}


		/**
		 * Cache BasePress current template for later use
		 *
		 * @since 1.0.0
		 */
		public function get_basepress_template( $template ){
			$this->basepress_template = $template;
			return '';
		}


		/**
		 * Render BasePress content
		 *
		 * @param $content
		 * @return false|string
		 */
		public function basepress_content( $content ){
			global $basepress_utils;
			$template = $basepress_utils->get_theme_file_path( $this->basepress_template . '.php' );

			//Disable loading of header and footer before loading our template
			$basepress_utils->set_option( 'skip_header_footer', true );

			//If the template file exists we can load it
			if ( file_exists( $template ) ) {
				ob_start();
				include_once $template;
				return ob_get_clean();
			} else {
				return __( 'BasePress theme was not found!', 'basepress-oxygen' );
			}
		}
	}

	new BasePress_Oxygen_integration();
}