<?php 

/**
 * Defining Constant
*/

define('BINGO_PATH_DIR', get_template_directory(). '/' );
define('BINGO_PATH_PLUGIN_COLORS', get_template_directory_uri() . '/css/colors/');
define('BINGO_PATH_PLUGIN', get_template_directory_uri() . '/plugins/');
define('BINGO_PATH_CSS', get_template_directory_uri() . '/css/');



/**
 * Including File
*/

require_once(BINGO_PATH_DIR . 'MyCode/admin/scripts.php');
require_once(BINGO_PATH_DIR . 'MyCode/widgets/widget.php');
require_once(BINGO_PATH_DIR . 'MyCode/bingo-init.php');
require_once(BINGO_PATH_DIR . 'libs/csframework/cs-framework.php');
require_once(BINGO_PATH_DIR . 'MyCode/bingo-theme-options.php');
require_once(BINGO_PATH_DIR . 'MyCode/custom-post/custom-hero.php');
require_once(BINGO_PATH_DIR . 'MyCode/custom-post/custom-taxonomy.php');

require_once( BINGO_PATH_DIR . 'tgmpa/bingo-plugin.php');
