<?php



/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Pixelea_Custom_Admin
 * @subpackage Pixelea_Custom_Admin/includes
 * @author     GEHIN Nicolas <nicolas@pixelea.fr>
 */
class Custom_Admin_Assets {

    public function __construct()
    {
    	add_action( 'admin_enqueue_scripts', array($this, 'register_script' ), 20);	

    }

	public function  register_script() {
		wp_register_script('custom_js', plugins_url( '../assets/js/custom.js', __FILE__ ), array( 'jquery' ), '1', false );
		wp_register_style( 'custom_css', plugins_url( '../assets/css/custom.css', __FILE__ ) );

		wp_enqueue_script('custom_js');
		wp_enqueue_style( 'custom_css' );	
			
	}
}