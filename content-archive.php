<div class="post-wrapper col-md-4">
    <div class="img-wrapper">
        <?php 
        echo '<a href="'.esc_url(get_permalink()).'" rel="lightbox">'; 
            the_post_thumbnail();
        echo '</a>'
        ?>
        <!--  -->
    </div>
    <header class="post-header">
    <?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
        <small><?php the_category(' '); ?></small>
    </header>
    <div class="post-excerpt">
        <?php the_excerpt(); ?>
    </div>

</div>