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
class Custom_Admin {

    public function __construct()
    {
    	add_action( 'init', array($this, 'modify_options' ), 100);
    	add_action('admin_menu', array($this,'pixelea_remove_wp_version'), 100);	
    	add_action('admin_footer_text', array($this,'pixelea_remove_wp_credit'), 100);
		add_filter('contextual_help',array($this,'pixelea_remove_wp_help'), 999,100);
		add_action('admin_bar_menu',array($this,'pixelea_remove_wp_adminbar_options'));
		add_action( 'wp_before_admin_bar_render', array($this,'pixelea_remove_wp_adminbar_options_before'));
		add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) ); 
    }

	public function  modify_options() {
	
			
	}
	// -----------------------------------------------------------------------------
	// ENLEVER la version de wordpress dans le footer
	// -----------------------------------------------------------------------------
	public function pixelea_remove_wp_version() 
	{
		remove_filter('update_footer','core_update_footer');
	}
	// -----------------------------------------------------------------------------
	// ENLEVER le credit Wordpress du footer
	// -----------------------------------------------------------------------------
	public function pixelea_remove_wp_credit() 
	{
		return "Création et réalisation: <a href='http://www.pixelea.fr'>Studio pixelea</a>";
	}
	// -----------------------------------------------------------------------------
	// ENLEVER L'onglet d'AIDE
	// -----------------------------------------------------------------------------
	public function pixelea_remove_wp_help($old_help,$screen_id,$screen) 
	{
		$screen->remove_help_tabs();
		return $old_help;
	}

	public function pixelea_remove_wp_adminbar_options($wp_admin_bar) 
	{
	    global $wp_admin_bar;

	    $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
	    $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
	    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
	    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
	    $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
	    $wp_admin_bar->remove_menu('site-name');      // Remove the site name menu	    $wp_admin_bar->remove_menu('updates');          // Remove the updates link
	    //$wp_admin_bar->remove_menu('my-account'); 


	}
	


	public function pixelea_remove_wp_adminbar_options_before(){
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('view-site');        // Remove the view site link
	  	$wp_admin_bar->remove_menu('new-content');      // Remove the content link
		$wp_admin_bar->remove_menu('comments');         // Remove the comments link
		$wp_admin_bar->remove_menu('updates');
		$wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
	}
	
	
	
}