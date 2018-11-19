<?php

?>

<div class="pews_title"><h3 class="text-danger">PEW BANK</h3></div>

<div class="pew_bank_btn">

    <button type="button" class="btn btn-danger">
        Current Pews: <span class="badge badge-light">
            <?php

            _e(mycred_render_shortcode_total([]));

            ?>
        </span>
    </button>

    <button type="button" class="btn btn-primary">
        Lifetime Pews: <span class="badge badge-light">
                        <?php

                        _e(mycred_render_shortcode_total([]));

                        ?>

        </span>
    </button>


</div>

<div class="pews_title"><h3 class="text-normal">Ways to Earn Pews</h3></div>

<div class="container">
    <div class="row">
        <div class="col-sm">

            <div class="earn_pews_tab">
                <nav aria-label="earn_pews_tab">
                    <ul class="pagination pagination-lg">
                        <li class="page-item"><a class="page-link" href="#" tabindex="-1">WAYS TO EARN</a></li>
                        <li class="page-item"><a class="page-link" href="#" tabindex="-1">EARN MORE</a></li>
                    </ul>
                </nav>
            </div>


            <div class="card text-center">
                <div class="card-body">

                    <div class="container">
                        <div class="row">

                            <div class="col-sm-3">
                                <span class="oi oi-bug"></span>
                            </div>

                            <div class="col-sm-6">
                                Sample Text 1
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="btn btn-primary">Share</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card text-center">
                <div class="card-body">

                    <div class="container">
                        <div class="row">

                            <div class="col-sm-3">
                                <span class="oi oi-bug"></span>
                            </div>

                            <div class="col-sm-6">
                                Sample Text 2
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="btn btn-primary">Share</button>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</div>
