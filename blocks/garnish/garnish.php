<?php
/**
 * Garnish Block template.
 *
 * @param array $block The block settings and attributes.
 */

    $garnish_left = !empty(get_field( 'garnish' )['garnish-left']) ? get_field( 'garnish' )['garnish-left'] : null;
    $garnish_mid = !empty(get_field( 'garnish' )['garnish-mid']) ? get_field( 'garnish' )['garnish-mid'] : null;
    $garnish_right = !empty(get_field( 'garnish' )['garnish-right']) ? get_field( 'garnish' )['garnish-right'] : null;




// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className"
$class_name = 'garnish';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

    <!-- GARNISH SECTION -->
    <section <?php echo esc_attr( $anchor ); ?> class="garnish <?php echo esc_attr( $class_name ); ?>" >
        <div class="garnish-container">
            <?php
                echo !empty($garnish_left) ? "<img class='garnish-left' src='{$garnish_left['url']}' alt=''>" : null;
                echo !empty($garnish_mid) ? "<img class='garnish-mid' src='{$garnish_mid['url']}' alt=''>" : null;
                echo !empty($garnish_right) ? "<img class='garnish-right' src='{$garnish_right['url']}' alt=''>" : null;
                ?>
        </div> 
    </section>