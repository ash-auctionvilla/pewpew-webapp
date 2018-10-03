<?php
/**
 * Created by PhpStorm.
 * User: ashik72
 * Date: 17/9/18
 * Time: 7:13 PM
 */

if (file_exists(__DIR__.'/vendor/autoload.php'))
    require __DIR__.'/vendor/autoload.php';
require_once '../wp-load.php';

if (!is_user_logged_in()) {
    wp_redirect( "/wp-login.php" );
    exit;
}


require_once "./classes/class.wp_features.php";
require_once './inc/functions.php';
