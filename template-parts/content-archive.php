

<div class="row">
    <div class="col">
        <article>
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
            <p class="lead"><?php the_excerpt(); ?></p>
            <small class="text-muted"><?php the_date(); ?></small>
    
            <b><?php comments_number(); ?></b>
    
            <a href="<?php the_permalink(); ?>">Read more</a>
        </article>
    </div>
</div>
<hr>

