<?php get_header(); ?>
</div>

<section class="comment-section bg-secondary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <header>
                    <h1>
                        <?php 
                            if( ! have_comments()) {
                                echo "Leave a comment!";
                            } else {
                                echo get_comments_number() . " Comments";
                            }
                        ?>
                    </h1>
                </header>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php
                    wp_list_comments(
                        [
                            "avatar_size" => 120,
                            'style' => 'div'
                        ]
                    );
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php
                    if( comments_open()) {
                        comment_form(
                            [
                                'class_form' => '',
                                'title_reply_before' => '<h2 class="comment-reply">',
                                'title_reply_after' => '</h2>'
                            ]
                        );
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<div class="container">
<?php get_footer(); ?>