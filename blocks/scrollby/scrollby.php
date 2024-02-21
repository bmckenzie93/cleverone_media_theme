<?php
/**
 * Scrollby Block template.
 *
 * @param array $block The block settings and attributes.
 */

$icons = !empty(get_field( 'scrollby' )) ? get_field( 'scrollby' ) : 'Your icons here...';




// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className"
$class_name = 'scrollby';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

    <!-- SCROLLBY BLOCK -->
    <section <?php echo esc_attr( $anchor ); ?> class="scrollby <?php echo esc_attr( $class_name ); ?>" >
        <ul>
            <?php
                if( !empty($icons)) {
                    foreach( $icons as $icon ) {
                        echo "
                            <li>
                                <img src='{$icon['slides']['url']}' alt=''>
                            </li>
                        ";
                    }
                }
            ?>
        </ul>

        <ul>
            <?php
                if( !empty($icons)) {
                    foreach( $icons as $icon ) {
                        echo "
                            <li>
                                <img src='{$icon['slides']['url']}' alt=''>
                            </li>
                        ";
                    }
                }
            ?>
        </ul>

    </section>
    <!-- END SCROLLBY BLOCK -->