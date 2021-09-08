<?php get_header(); ?>
<div class="site-main container">
    <div class="row">
        <div class="posts-wrapper col-xs-12 col-sm-9">
            <?php 
            if(have_posts()):
                while(have_posts()): the_post(); ?>
                <div class="post-wrapper row">
                  
                    
                    <?php if( has_post_thumbnail() ): ?>
            
                        <div class="col-xs-12 col-sm-4">
                            <div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                        <h3><?php the_title(); ?></h3>
                        <small><?php the_category(); ?></small>
                            <?php the_excerpt(); ?>
                       
                        </div>
        
                    <?php else: ?>
        
                        <div class="col-xs-12">
                            <h3><?php the_title(); ?></h3>
                            <small><?php the_category(); ?></small>
                            <?php the_excerpt(); ?>
                        </div>
        
                    <?php endif; ?>
                </div>
                <hr>
                <?php endwhile ?>
                <?php endif ?>
        </div>
    
        <div class="col-xs-12 col-sm-3">
            <?php get_sidebar(); ?>
        </div>
    </div>

</div>



<?php get_footer(); ?>