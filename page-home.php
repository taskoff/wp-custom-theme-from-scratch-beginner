<?php
/*
	Template Name: Home page
*/

get_header() ?>

<div class="container">

    <?php 
       $lastBlog = new WP_Query(array(
           'type'=>'post',
           'posts_per_page'=>'3'

       )); ?>
       <?php if($lastBlog->have_posts()):?>
           <div class="row">
               <?php while($lastBlog->have_posts()): $lastBlog->the_post(); ?>
                   <?php get_template_part('content', 'archive'); ?>           
               <?php  endwhile; ?>
           </div>
       <?php endif; ?>

    <php wp_reset_postdata(); ?>

    <div class="categories-wrapper row">
        <?php
             $categories = get_categories();
                foreach($categories as $category) {
                    echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
                }
        ?>
    </div>

 </div>


<?php get_footer() ?>