<?php
/**
 * Triple Feature Block template.
 *
 * @param array $block The block settings and attributes.
 */

$features = !empty(get_field( 'tri-feature' )) ? get_field( 'tri-feature' ) : 'Your feature here...';


// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className"
$class_name = 'tri-feature';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

    <!-- TRIPPLE FEATURE BLOCK -->
    <section <?php echo esc_attr( $anchor ); ?> class="tri-feature <?php echo esc_attr( $class_name ); ?>" >
        <div class="container">
            <ul>
                <?php
                    if( !empty($features)) {
                        foreach( $features as $feature ) {
                            echo "<li>";
                            echo !empty($feature["icon"]["url"]) ? "<img src='{$feature['icon']['url']}' alt=''>" : '';
                            echo !empty($feature["title"]) ? "<h3>{$feature['title']}</h3>" : '';
                            echo !empty($feature["text"]) ? "<p>{$feature['text']}</p>" : '';
                            echo "</li>";
                            ;
                        }
                    }
                ?>
            </ul>
        </div>
    </section>