<div class="post-wrapper col-md-4">
    <div class="img-wrapper">
        <?php the_post_thumbnail(); ?>
    </div>
    <header class="post-header">
        <h3 class="post-title"><?php the_title(); ?></h3>
        <small><?php the_category(); ?></small>
    </header>
    <div class="post-excerpt">
        <?php the_excerpt(); ?>
    </div>

</div>