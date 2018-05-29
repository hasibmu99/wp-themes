<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme bingo for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/tgmpa/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'bingo_register_required_plugins' );


function bingo_register_required_plugins() {

	$plugins = array(

		
		array(
			'name'               => 'One Click Demo Import', 
			'slug'               => 'one-click-demo-import',
			'required'           => true,
			'version'            => '',
			'force_activation'   => false,
			              
		),

		array(
			'name'               => 'Contact Form 7', 
			'slug'               => 'contact-form-7',
			'required'           => false,
			'version'            => '',
			'force_activation'   => false,
			              
		),

		
		array(
			'name'         			=> 'Bingo Plugin',
			'slug'		   			=> 'bingo-plugin',
			'source'       			=> get_template_directory() . '/tgmpa/plugins/bingo-plugin.zip',
			'required'     			=> true,
			'force_activation'   	=> false,
		),
		array(
			'name'      			=> 'WPBakery Page Builder',
			'slug'      			=> 'js_composer',
			'source'    			=> get_template_directory() . '/tgmpa/plugins/js_composer.zip',
			'required'				=> true,
			'force_activation'   	=> false,
		)

	);

	$config = array(
		'id'           => 'bingo',                 
		'default_path' => '',                      
		'menu'         => 'tgmpa-install-plugins', 
		'has_notices'  => true,                    
		'dismissable'  => true,                    
		'dismiss_msg'  => '',                      
		'is_automatic' => false,                   
		'message'      => '',                      

	);

	tgmpa( $plugins, $config );
}
