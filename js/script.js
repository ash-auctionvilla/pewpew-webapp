jQuery(document).ready(function($) {

    var loadJS = {

        init: function () {
            this.remove_advert();
            this.upload_avatar();
            this.change_password();
            this.top_pro_bar();
            this.gun_wall();
            this.webapp_sidebar();
        },

        remove_advert: function () {

            $(".g1-advertisement").remove();
            console.log(jQuery.post.length);
        },

        upload_avatar: function () {

            let avatar_data = $(".upload_avatar").clone();
            $(".change_avatar_data").remove();

            $(document).on("click", ".change_avatar a", function () {
                $(this).magnificPopup({

                    items: {
                        src: '<div class="white-popup">'+avatar_data.html()+'</div>',
                        type: 'inline'
                    }

                });
            })


            $(document).on('submit', '#pewpew_avatar_upload', function (evt) {

                evt.preventDefault();

                var form_data = new FormData();
                var file_data = jQuery('#pewpew_avatar').prop('files')[0];

                form_data.append('file', file_data);
                form_data.append('action', 'webapp_avatar');

                $.ajax({
                    url: window.wp_ajax_url,
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function (response) {
                        response = $.parseJSON(response);

                        if (response != "success")
                            alert("Avatar upload failed!");
                        else {
                            alert("Avatar upload successful!");
                            location.reload();
                        }
                    }

                });



            })

        },

        change_password: function () {
            let change_password = $(".change_password").clone();
            $(".change_password").remove();


            $(document).on("click", ".pass_change a", function () {
                $(this).magnificPopup({

                    items: {
                        src: '<div class="white-popup">'+change_password.html()+'</div>',
                        type: 'inline'
                    }

                });
            });

            $(document).on('submit', '#pewpew_change_password', function (evt) {
                evt.preventDefault();
                var form_data = new FormData();
                form_data.append('action', 'webapp_change_password');
                form_data.append('password', $(this).find("#change_password").val());
                console.log(form_data);

                $.ajax({
                    url: window.wp_ajax_url,
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function (response) {
                        response = $.parseJSON(response);
                        location.reload();
                    }

                });


            });

            },

        top_pro_bar: function () {

            let ranks = $("#badges-personal-li").clone();
            let orders = $("#badges-personal-li").clone();

            let pews = $("#mycred-history-personal-li").clone();
            let votes = $("#snax_votes-personal-li").clone();
            let activity = $("#activity-personal-li").clone();
            let gun_wall = $("#activity-personal-li").clone();

            $("#menu-bp").find("li").remove();
            $("#menu-bp").append(ranks)
            orders.find("a").text("ORDERS");
            $("#menu-bp").append(orders.get(0).outerHTML);

            $("#menu-bp").append(pews)
            $("#menu-bp").append(votes)
            $("#menu-bp").append(activity)

            gun_wall.find("a").text("MY GUN WALL");
            gun_wall.find("a").attr('id', 'gun_wall')
            $("#menu-bp").append(gun_wall.get(0).outerHTML);

            $(document).on("click", "#menu-bp li a", function (evt) {
                evt.preventDefault();
                let clicked_li = $(this).parent("li");
                $("#menu-bp li").each(function () {
                    $(this).removeClass("g1-tab-item-current");
                });

                if (!$(this).parent("li").hasClass("g1-tab-item-current"))
                    $(this).parent("li").addClass("g1-tab-item-current");

                let this_id = $(this).attr("id");

                $(".col-sm-12.profile_nav_tabs").find(".single_tab").css("display", "none");
                $(".col-sm-12.profile_nav_tabs").find("."+this_id).css("display", "block");



            });

            $("#badges-personal-li #user-badges").trigger("click");

        },

        gun_wall: function () {

            $(document).on("mouseover", ".gun_wall .card", function () {

                $(this).find(".gun_opts").css("display", "block");

            })

            $(document).on("mouseout", ".gun_wall .card", function () {

                $(this).find(".gun_opts").css("display", "none");

            })


            $(document).on("click", ".gun_opts .share", function () {
                $(this).magnificPopup({

                    items: {
                        src: '<div class="white-popup">'+"Share"+'</div>',
                        type: 'inline'
                    }

                });
            });

        },

        webapp_sidebar: function () {

            $(".webapp_sidebar_div").each(function () {

                $title_rounded = $(this).find(".rounded_title").clone();
                $(this).find(".rounded_title").remove();
                $(this).append($title_rounded);
            })


            $("#menu-bp li a:hover::before").css('text-decoration', 'none');

        }

    };

    loadJS.init();


})
