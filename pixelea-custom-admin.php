<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.pixelea.fr
 * @since             1.0.0
 * @package           Pixelea_Custom_Admin
 *
 * @wordpress-plugin
 * Plugin Name:       Pixelea Custom Admin
 * Plugin URI:        http://www.pixelea.fr
 * Description:       Ce modifie l'affichage de la partie backoffice
 * Version:           1.0.0
 * Author:            GEHIN Nicolas
 * Author URI:        http://www.pixelea.fr
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pixelea-theme_option
 * Domain Path:       /languages
 */

class Pixelea_Custom_Admin
{
    public function __construct()
    {  
        include_once plugin_dir_path( __FILE__ ).'includes/class-pixelea-theme-option.php';
        //include_once plugin_dir_path( __FILE__ ).'includes/class-pixelea-admin-assets.php';
 		//include_once plugin_dir_path( __FILE__ ).'includes/class-pixelea-login.php';
        
        //new Custom_Admin_Assets;  
        new Custom_Admin;   
        //new Custom_Login; 
    }



}

new Pixelea_Custom_Admin();