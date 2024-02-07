<?php get_header(); ?>

<?php 
    if ( have_posts() ){

        while( have_posts() ){

            the_post();
            
            
            get_template_part( 'template-parts/content', 'article' );
        }
    }
?>

<section>
    <header>
        <h1></h1>
    </header>
</section>


<?php get_footer(); ?>