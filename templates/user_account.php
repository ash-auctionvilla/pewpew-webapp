<?php

get_header();

$current_user = wp_get_current_user();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <?php wp_nav_menu( array( 'theme_location' => 'ppwebapp-user-side' ) ); ?>
            <div class="menu-usernav-webapp-container">

                <?php if ( is_active_sidebar( 'webapp_left_1' ) ) : ?>
                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'webapp_left_1' ); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?>
            </div>

        </div>
        <div class="col-sm-9">
            <h3 class="maccount"><?php _e(PewPewWP::getField("maccount")) ?></h3>

            <div class="container">
                <div class="row">
                    <div class="col-sm-4 webapp_left">


                        <?php
                        $pro_pic = get_user_meta(get_current_user_id(), 'bimber_bp_pro_pic', true);

                        _e(empty($pro_pic) ? "" : '<img class="webapp_avatar" src="'.$pro_pic.'" alt="">' );

                        ?>

                        <div class="change_avatar"><a href="#">Change Avatar</a></div>

                    </div>
                    <div class="col-sm-7 user_data">

                        <h2><?php _e($current_user->user_login) ?></h2>
                        <div><?php _e(mycred_render_my_rank([])) ?> </div>
                        <br>
                        <div><b>Name:      </b><span><?php _e($current_user->display_name) ?></span></div>
                        <div><b>Email:      </b><span><?php _e($current_user->user_email) ?></span></div>
                        <div><b>Password:      </b><span class="pass_change"><a href="#">Change Password</a></span></div>
                        <div><b>Membership:      </b><span>ABCD</span></div>


                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div id="buddypress">

                            <div id="item-nav">
                                <div class="item-list-tabs no-ajax g1-dropable" id="object-nav" role="navigation">

                    <?php bp_nav_menu(); ?>
                        <div class="col-sm-12 profile_nav_tabs">

                            <div class="user-badges single_tab"> <?php include "ranks.php"; ?> </div>
                            <div class="user-mycred-history single_tab"> <?php include "pews.php"; ?> </div>
                            <div class="user-snax_votes single_tab"> <?php include "votes.php"; ?> </div>
                            <div class="user-activity single_tab"> <?php include "activity.php"; ?> </div>
                            <div class="gun_wall single_tab"> <?php include "gun_wall.php"; ?> </div>


                        </div>
                                </div>
                            </div>


                </div>

            </div>

        </div>
    </div>
</div>

<div class="change_avatar_data">

    <div class="upload_avatar">

        <h1>Upload</h1>
        <form id="pewpew_avatar_upload" method="post" action="#" enctype="multipart/form-data">
            <input type="file" name="pewpew_avatar" id="pewpew_avatar"  multiple="false" />
            <?php wp_nonce_field( 'pewpew_avatar', 'pewpew_avatar_nonce' ); ?>
            <input id="submit_pewpew_avatar" name="submit_pewpew_avatar" type="submit" value="Upload" />
        </form>

    </div>


</div>


<div class="change_password">
        <h1>Change Password</h1>
        <form id="pewpew_change_password" method="post">
            <input type="password" name="change_password" id="change_password"  multiple="false" />
            <input id="submit_change_password" name="submit_change_password" type="submit" value="Submit" />
        </form>
</div>


<?php

get_footer();
?>
