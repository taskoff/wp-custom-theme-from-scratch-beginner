<?php get_header(); ?>
<div class="container">
    <div class="row">
        
        <div class="col-xs-12 col-sm-8">
            
            <?php 
            
            if( have_posts() ):
                
                while( have_posts() ): the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                        
                        
                        <?php if( has_post_thumbnail() ): ?>
                            
                            <div class="d-flex justify-content-center"><?php the_post_thumbnail('medium'); ?></div>
                    
                        <?php endif; ?>
                        <?php the_title('<h1 class="entry-title text-center">','</h1>' ); ?>
                        
                        <small><?php the_category(' '); ?> / 
                            <?php if(has_tag()):  the_tags('') ;?>  /
                            <?php endif; ?>  
                            <?php edit_post_link(); ?>
                        </small>
                        
                        <?php the_content(); ?>
                        
                        <hr>
                        
                        <div class="d-flex justify-content-between">
                            <div class="col-xs-6"><?php previous_post_link(); ?></div>
                            <div class="col-xs-6 text-right"><?php next_post_link(); ?></div>
                        </div>
                        
                        <?php 
                            if( comments_open() ){ 
                                comments_template(); 
                            } else {
                                echo '<h5 class="text-center">Коментарите са затворени!</h5>';
                            }
                            
                         ?>
                    
                    </article>
    
                <?php endwhile;
                
            endif;
                    
            ?>
        
        </div>
        
        <div class="col-xs-12 col-sm-4">
            <?php get_sidebar(); ?>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>