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
class Custom_Login {

    public function __construct()
    {
    	add_action( 'login_enqueue_scripts', array($this, 'register_script' ), 20);	

    }

	public function  register_script() {
		wp_register_script('login_custom_js', plugins_url( '../assets/js/custom_login.js', __FILE__ ), array( 'jquery' ), '1', false );
		wp_register_style( 'login_custom_css', plugins_url( '../assets/css/custom_login.css', __FILE__ ) );

		wp_enqueue_script('login_custom_js');
		wp_enqueue_style( 'login_custom_css' );	
			

	}


	
}