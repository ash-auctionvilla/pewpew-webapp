<?php
/**
 * Created by PhpStorm.
 * User: ashik72
 * Date: 17/9/18
 * Time: 7:13 PM
 */

require_once './config.php';



ob_start();


switch ($_GET['to']) {
    case 'avatar_change':
        include "./templates/change_avatar.php";
        break;
    default:
        include "./templates/user_account.php";
        break;

}

include "./inc/scripts.php";
$output = ob_get_clean();
echo $output;