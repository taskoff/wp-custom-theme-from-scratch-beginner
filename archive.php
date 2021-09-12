<?php get_header(); ?>
<div class="post-archive-main container">
    <div class="all-posts-wrapper">
        <div class="row">
            <div class="posts-wrapper col-xs-12 col-sm-9">
                <?php 
                if(have_posts()):
                    while(have_posts()): the_post(); ?>
                    <div class="post-wrapper row">

                    <?php get_template_part('content', 'archive-post'); ?>

                    </div>
                    <hr>
                    <?php endwhile ?>
                    <?php endif ?>
            </div>
                
            <div class="sidebar-wrapper col-xs-12 col-sm-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>