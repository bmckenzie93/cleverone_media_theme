<?php get_header(); ?>

<?php 
    if ( have_posts() ){

        while( have_posts() ){

            the_post();
            the_content();
        }
    }
?>

<section>
    <header>
        <h1></h1>
    </header>
</section>


<?php get_footer(); ?>