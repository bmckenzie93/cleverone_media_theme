<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <?php 
                    if(function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src($custom_logo_id);

                        echo "<img src='$logo[0]' alt='' style='height: 50px;'>";
                    }

                ?>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <?php 
                    wp_nav_menu(
                        [
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav ms-auto mb-2 mb-lg-0">%3$s</ul>'
                        ]
                    );
                ?>


                <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul> -->




            </div>
        </div>
    </nav>

    <main>
        <!-- HERO SECTION -->
        <section>
            <header>
                <h1 class="heading text-center text-white bg-primary py-5"><?php the_title(); ?></h1>
            </header>
        </section>
        <div class="container">