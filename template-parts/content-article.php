

<div class="row">
    <div class="col">
        <span class="text-muted">Published <?php the_date(); ?></span>
        <?php the_tags("<span class='text-muted'>", ", ", "</span>"); ?>

        <span class="text-muted">category</span>
        <span class="text-muted"><?php comments_number(); ?></span>
    </div>
</div>

<div class="row">
    <div class="col">
        <img src="" alt="">
    </div>
</div>

<div class="row">
    <div class="col">
        <?php 
            echo 'content-article template';
            the_content();
        ?>
    </div>
</div>

<?php
    comments_template();
?>