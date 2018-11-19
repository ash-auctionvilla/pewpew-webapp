<div class="snax-votes">
    <?php

    $user_id = get_current_user_id();
    snax()->votes_query = snax_get_user_votes_query( array(
        'author' => $user_id,
        'vote'   => $vote,
    ) );

    ?>

    <?php while ( snax_votes() ) : snax_the_vote(); ?>

        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title"><?php snax_render_item_title(); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">		<?php snax_render_item_parent(); ?>
                </h6>
                <p class="card-text"><?php snax_item_description(); ?></p>
                <?php snax_render_voting_box(); ?>
            </div>
        </div>



    <?php endwhile; ?>


</div>
