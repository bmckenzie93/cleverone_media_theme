<?php
/**
 * Hero Block template.
 *
 * @param array $block The block settings and attributes.
 */

$title = !empty(get_field( 'title' )) ? get_field( 'title' ) : null;
$subTitle = !empty(get_field( 'subtitle' )) ? get_field( 'subtitle' ) : null;
$button = !empty(get_field( 'button' )) ? get_field( 'button' ) : null;
$text = !empty(get_field( 'text' )) ? get_field( 'text' ) : null;
$leftGarnish = !empty(get_field( 'left-garnish' )) ? get_field( 'left-garnish' ) : null;
$rightGarnish = !empty(get_field( 'right-garnish' )) ? get_field( 'right-garnish' ) : null;



// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className"
$class_name = 'hero-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

    <!-- HERO BLOCK -->
    <section <?php echo esc_attr( $anchor ); ?> class="<?php echo esc_attr( $class_name ); ?>" >
        <div class="container">
            <?= !empty($title) ? '<h1>' . $title .'</h1>' : null ?>
            <?= !empty($subTitle) ? '<p>' . $subTitle .'</p>' : null ?>
            <?= !empty($button) ? "<a href='{$button['link']}' class='button'>'{$button['text']}'</a>" : null ?>
            <?= !empty($text) ? '<small>' . $text .'</small>' : null ?>
        </div>
        <img class="hero-bg-left" src="<?= get_template_directory_uri() ?>/assets/images/cloud-1.png" alt="cloud one">
        <img class="hero-bg-right" src="<?= get_template_directory_uri() ?>/assets/images/cloud-1.png" alt="cloud two">
    </section>
    <!-- END HERO BLOCK -->