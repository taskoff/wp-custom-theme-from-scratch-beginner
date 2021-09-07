<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body>
    <header>
        <div class=" header-wrapper row">
            <div class="logo-box col-sm-4">
                <p>There is my header</p>
            </div>
            <div class="nav-menu-box col-sm-8">
                <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
            </div>
        </div>

    </header>
    
