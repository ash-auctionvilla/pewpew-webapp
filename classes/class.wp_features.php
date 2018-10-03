<?php
/**
 * Created by PhpStorm.
 * User: ashik72
 * Date: 18/9/18
 * Time: 12:55 AM
 */

class PewPewWP {


    public static function getField($fieldname = "") {
        $titan = TitanFramework::getInstance( 'pp_webapp' );
        return empty($titan->getOption($fieldname)) ? "" : $titan->getOption($fieldname);
    }

    public static function getName() {
        $name = "";

            return $name;
    }



}

global $bp;
$bp->displayed_user->id = get_current_user_id();
