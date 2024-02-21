<?php
/**
 * Split Quote Block template.
 *
 * @param array $block The block settings and attributes.
 */

$quote = !empty(get_field( 'split-quote' )['quote']) ? get_field( 'split-quote' )['quote'] : 'Your title here...';
$quote_image = !empty(get_field( 'split-quote' )['quote-image']['url']) ? get_field( 'split-quote' )['quote-image']['url'] : 'Your title here...';
$quote_name = !empty(get_field( 'split-quote' )['quote-name']) ? get_field( 'split-quote' )['quote-name'] : 'Your title here...';
$quote_logo = !empty(get_field( 'split-quote' )['quote-logo']['url']) ? get_field( 'split-quote' )['quote-logo']['url'] : 'Your title here...';



// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className"
$class_name = 'split-quote-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

    <!-- SPLIT QUOTE BLOCK -->
    <section <?php echo esc_attr( $anchor ); ?> class="split-quote-block <?php echo esc_attr( $class_name ); ?>" >
        <div class="container">
            <blockquote>
                <div class="quotation-container">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/cloud-1.png" alt="cloud two">
                </div>

                <p><?= $quote ?></p>
                
                <div class="user-container">
                    <img class="user" src="<?= $quote_image ?>" alt="">
                    <span><?= $quote_name ?>, </span>
                    <img src="<?= $quote_logo ?>" alt="">
                </div>
            </blockquote>

            <div class="split-quote-right">
                <div>
                    <h4>Totally async</h4>
                    <p>Don't like meetings? We don't either; so much so that we've outlawed them completely.</p>
                </div>
                <div>
                    <h4>Manage with Trello</h4>
                    <p>Don't like meetings? We don't either; so much so that we've outlawed them completely.</p>
                </div>
                <div>
                    <h4>Invite unlimited team members</h4>
                    <p>Don't like meetings? We don't either; so much so that we've outlawed them completely.</p>
                </div>
            </div>
        </div>
    </section>