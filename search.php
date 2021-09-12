<?php get_header(); ?>
<div class="result-page-main container">
    <div class="row">
        
        <div class="all-results-wrapper col-xs-12 col-sm-8">
            
            <div class="row">
    
            <?php 
            
            if( have_posts() ):
                
                while( have_posts() ): the_post(); ?>
                    
                    <?php get_template_part('content', 'search'); ?>
                    <hr>
                
                <?php endwhile;
                
            endif;
                    
            ?>
            </div>
        
        </div>
        
        <div class="sidebar-wrapper col-xs-12 col-sm-4">
            <?php get_sidebar(); ?>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>