<?php
/**
 * Callout Block template.
 *
 * @param array $block The block settings and attributes.
 */

$icon = !empty(get_field( 'icon' )) ? get_field( 'icon' ) : null;
$mainText = !empty(get_field( 'main-text' )) ? get_field( 'main-text' ) : null;
$subText = !empty(get_field( 'sub-text' )) ? get_field( 'sub-text' ) : null;
$button = !empty(get_field( 'button' )) ? get_field( 'button' ) : null;




// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className"
$class_name = 'callout';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

    <!-- HERO SECTION -->
    <section <?php echo esc_attr( $anchor ); ?> class="callout <?php echo esc_attr( $class_name ); ?>" >
        <div class="container-sm">
            <?= $icon ? "<img src='{$icon['url']}' alt=''>" : null ?>
            <?= $mainText ? "<h2>$mainText</h2>" : null ?>
            <?= $subText ? "<p>$subText</p>" : null ?>
            <?= $button ? "<a href='{$button['link']}' class='button'>{$button['text']}</a>" : null ?>
        </div>
    </section>