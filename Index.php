<?php get_header(); ?>
<div class="site-main">
    <h1>Hello World!</h1>
    <div class="posts-wrapper">
        <?php 
        if(have_posts()):
            while(have_posts()): the_post(); ?>
            <div class="post-wrapper">
                <h3><?php the_title(); ?></h3>
                <small><?php the_category(); ?></small>
                <p><?php the_content(); ?></p>
            </div>

            <?php endwhile ?>
            <?php endif ?>
    </div>

</div>



<?php get_footer(); ?>