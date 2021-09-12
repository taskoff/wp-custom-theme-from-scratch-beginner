<!-- ==== Copy from post archive -->

<?php get_header(); ?>
<div class="single-post-body container">
    <div class="row">
        
        <div class="main-post-wrapper col-xs-12 col-sm-8">
            
            <?php 
            
            if( have_posts() ):
                
                while( have_posts() ): the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                        
                        
                        <?php if( has_post_thumbnail() ): ?>
                            
                            <div class="d-flex justify-content-center"><?php the_post_thumbnail('large'); ?></div>
                    
                        <?php endif; ?>
                        <div class="title-wrapper text-center">
                            <?php the_title('<h1 class="entry-title text-center">','</h1>' ); ?>
                        </div>
                        
                        <small>  
                            <?php edit_post_link(); ?>
                        </small>
                        
                        <?php the_content(); ?>
                        
                        <hr>
                        
                        <div class="pagination-wrapper d-flex justify-content-between">
                            <div class="col-xs-6"><?php previous_post_link(); ?></div>
                            <div class="col-xs-6 text-right"><?php next_post_link(); ?></div>
                        </div>
                        
							
                    
                    </article>
    
                <?php endwhile;
                
            endif;
                    
            ?>
        
        </div>
        
        <div class="sidebar-wrapper col-xs-12 col-sm-4">
            <?php get_sidebar(); ?>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>