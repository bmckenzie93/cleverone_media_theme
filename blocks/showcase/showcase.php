<?php
/**
 * Testimonial Block template.
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
$class_name = 'hero';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

    <!-- HERO SECTION -->
    <section <?php echo esc_attr( $anchor ); ?> class="hero-section <?php echo esc_attr( $class_name ); ?>" >
        <div class="container">
            <h1>
                <?= $title ?>
            </h1>
            <p>
                <?= $subTitle ?>
            </p>
            <a href="#" class="button">
                <?= $cta ?>
            </a>
            <small>
                <?= $message ?>
            </small>
        </div>
        <img class="hero-bg-left" src="<?= get_template_directory_uri() ?>/assets/images/cloud-1.png" alt="cloud one">
        <img class="hero-bg-right" src="<?= get_template_directory_uri() ?>/assets/images/cloud-1.png" alt="cloud two">
    </section>