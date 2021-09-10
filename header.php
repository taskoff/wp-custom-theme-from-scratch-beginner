<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light  container">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">My Theme</a>
        <?php get_search_form(); ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu(array(
            'theme_location'=>'primary',
            'container'=>false,
            'menu_class'=>'navbar-nav ms-auto mb-2 mb-lg-0')); ?>
         
        </div>
      </div>
    </nav>
        
        <div class=" header-wrapper row">
           
            
        
        </div>

    </header>
    
