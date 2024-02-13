<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <nav class="logo-nav">
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


            <?php 
                wp_nav_menu(
                    [
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="">%3$s</ul>'
                    ]
                );
            ?>
        </div>
    </nav>
    
    <main>
