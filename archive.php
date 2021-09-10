<?php
get_header(); ?>
<div class="container">
    <header>
        <h1><?php the_archive_title(); ?></h1>
        <p><?php the_archive_description(); ?></p>
    
    </header>
    <?php if(have_posts()): ?>
    <div class="row">
        <?php while( have_posts() ): the_post(); ?>
                    
            <?php get_template_part('content', 'archive'); ?>
        
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <div class="col-xs-12 text-center">
		<?php the_posts_navigation(); ?>
	</div>
</div>



<?php get_footer();