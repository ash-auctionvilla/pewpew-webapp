<?php
/**
 * Created by PhpStorm.
 * User: ashik72
 * Date: 18/9/18
 * Time: 12:32 AM
 */
?>


<script>
    jQuery(document).ready(function($) {

        window.wp_ajax_url = "<?php _e(admin_url('admin-ajax.php')) ?>";

        $('head').append('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">');
        $('head').append('<link rel="stylesheet" href="css/style.css" type="text/css" />');
        $('head').append('<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Russo+One" type="text/css" />');
        $('head').append('<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" type="text/css" />');
        $('head').append('<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Permanent+Marker" type="text/css" />');


        $.getScript('//code.jquery.com/jquery-3.3.1.slim.min.js');
        $.getScript('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
        $.getScript('//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
        $.getScript('js/script.js', function() {

        });





    });



</script>