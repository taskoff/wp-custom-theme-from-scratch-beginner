<?php
/*
	Template Name: Home page
*/

get_header() ?>

<div class="home-body">
    <div class="hero-section-wrapper">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
            </div>
            <div class="carousel-inner">
               
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri() . "'/img/slide-2.jpg'" ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h2>Нашето невероятно <span>заглавие</span></h2>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri() . "'/img/slide-4.jpg'" ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h2>Второ невероятно <span>заглавие</span></h2>
                  <p>Some representative placeholder content for the third slide.</p>
                  </div>
            </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>
</div>
<div class="last-post-wrapper container">
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
</div>
<!-- <div class="container">
    <div class="categories-wrapper row">
        <?php
             $categories = get_categories();
                foreach($categories as $category) {
                    echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
                }
        ?>
    </div>
</div> -->

 </div>


<?php get_footer() ?>