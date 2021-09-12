<?php if( has_post_thumbnail() ): ?>
            
    <div class="col-xs-12 col-sm-4">
    <div class="post-img-wrapper">
        <?php 
        echo '<a href="'.esc_url(get_permalink()).'" rel="lightbox">'; 
            the_post_thumbnail();
        echo '</a>'
        ?>
        <!--  -->
    </div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <header class="post-header">
            <?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
            <small><?php the_category(' '); ?></small>
        </header>
        <div class="post-excerpt">
            <?php the_excerpt(); 
             echo '<a href="'.esc_url(get_permalink()).'" rel="lightbox">'; ?>
             Прочети още...
            <?php echo '</a>' ?>
        </div>
    
    </div>

<?php else: ?>

    <div class="col-xs-12">
        <h3><?php the_title(); ?></h3>
        <small><?php the_category(); ?></small>
        <?php the_excerpt(); ?>
    </div>

<?php endif; ?>