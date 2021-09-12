<div class="post-wrapper col-md-3">
    <div class="img-wrapper">
        <?php 
        echo '<a href="'.esc_url(get_permalink()).'" rel="lightbox">'; 
            the_post_thumbnail();
        echo '</a>'
        ?>
        <!--  -->
    </div>
    <div class="post-body">
        <header class="post-header">
        <?php the_title( sprintf('<h4 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h4>' ); ?>
            <small><?php the_category(' '); ?></small>
        </header>
        <div class="post-excerpt">
            <?php the_excerpt(); 
             echo '<a href="'.esc_url(get_permalink()).'" rel="lightbox">'; ?>
             Прочети още...
            <?php echo '</a>' ?>
        </div>
    </div>

</div>