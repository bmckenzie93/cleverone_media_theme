<?php
/**
 * Showcase Block template.
 *
 * @param array $block The block settings and attributes.
 */

$slides = !empty(get_field( 'slides' )) ? get_field( 'slides' ) : 'Your slides here...';





// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className"
$class_name = 'showcase';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

    <!-- SHOWCASE BLOCK -->
    <section <?php echo esc_attr( $anchor ); ?> class="showcase <?php echo esc_attr( $class_name ); ?>" >
        <div class="sticker">
            <div class="sticker-container">
                <span>Latest<br>projects</span>
            </div>
        </div>
        <ul class="showcase-track">
            <?php
                if( !empty($slides)) {
                    foreach( $slides as $slide ) {
                        echo "
                            <li>
                                <img src='$slide[url]' alt=''>
                            </li>
                        ";
                    }
                }
            ?>
        </ul>
    </section>
    <!-- END SHOWCASE BLOCK -->