<?php
/**
 * Quote Block template.
 *
 * @param array $block The block settings and attributes.
 */

$title = !empty(get_field( 'hero-title' )) ? get_field( 'hero-title' ) : 'Your title here...';
$subTitle = !empty(get_field( 'hero-subtitle' )) ? get_field( 'hero-subtitle' ) : 'Your subtitle here...';
$cta = !empty(get_field( 'hero-cta' )) ? get_field( 'hero-cta' ) : 'Your cta here...';
$message = !empty(get_field( 'hero-message' )) ? get_field( 'hero-message' ) : 'Your message here...';
$leftGarnish = !empty(get_field( 'hero-message' )) ? get_field( 'hero-message' ) : 'Your message here...';
$message = !empty(get_field( 'hero-message' )) ? get_field( 'hero-message' ) : 'Your message here...';



// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className"
$class_name = 'quote-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

    <!-- QUOTE BLOCK -->
    <section <?php echo esc_attr( $anchor ); ?> class="quote-block <?php echo esc_attr( $class_name ); ?>" >
        <div class="container">
            <blockquote>
                <div class="quotation-container">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/cloud-1.png" alt="cloud one">
                </div>

                <p>Designjoy shows that they know the art of subtlety.</p>
                
                <div class="icon-container">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/test-logo.png" alt="cloud two">
                </div>
            </blockquote>
            <img class="left-garnish" src="<?= get_template_directory_uri() ?>/assets/images/cloud-1.png" alt="cloud one">
            <img class="right-garnish" src="<?= get_template_directory_uri() ?>/assets/images/cloud-1.png" alt="cloud two">
        </div>
    </section>