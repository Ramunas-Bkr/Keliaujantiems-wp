<!DOCTYPE html>
<html <?php language_attributes()?> >
<head>
    <meta charset=<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keliaujantiems.eu</title>
    <?php wp_head() ?>
</head>
<body>
<header>
<div class="header-links-area">
<div class="logo-block">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/keliaujantiems-logo-new.gif'; ?>" alt="Logo">
    </a>    
</div>


        <?php
wp_nav_menu( ([ 
    'theme_location' => 'my-custom-menu', 
    'container' => false,
    'menu_class' => 'custom-header-menu'
])); 
?>
    </div>
</header>