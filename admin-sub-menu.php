<?php

/**
 * Plugin Name:       our word filter plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Muhammad Nabeel Nisar
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 class ASM_MainClass {


    function __construct() {

        add_action( 'admin_menu', array( $this, 'ourMenu' ) );

    }

    function ourMenu() {

        add_menu_page( 'Admin Menu', 'Admin Menu', 'manage_options', 'asm-admin-page', array( $this, 'adminMenu' ), 'dashicons-smiley', 9999999 );

        add_submenu_page( 'asm-admin-page', 'Admin Menu', 'Admin Menu list', 'manage_options', 'asm-admin-page', array( $this, 'adminMenu' ) );

        add_submenu_page( 'asm-admin-page', 'Admin Menu Options', 'Admin Menu Options', 'manage_options', 'admin-page-options.php', array( $this, 'adminMenuOptions' ) );

    }

    function adminMenu() { ?>
        <br />
        <h1>Admin Menu</h1>
    <?php }

    function adminMenuOptions() { ?>
        <br />
        <h1>Admin Menu Options</h1>
    <?php }


 }

 $asm_MainClass = new ASM_MainClass();