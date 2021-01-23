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
        <?php wp_nav_menu( ([ 
            'theme_location' => 'my-custom-menu', 
            'container' => false,
            'menu_class' => 'custom-header-menu' ])); ?>
    </div>
    <div class="mobile-links-block">
        <div id="switch-link" class="icon">
            &#9776;
        </div>
        <div class="mobile-links" id="mobile-menu">
            <span id="close-menu">&#10006;</span>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/keliaujantiems-logo-new.gif'; ?>" alt="Logo">
            </a>    
            <?php wp_nav_menu( ([
                'theme_location' => 'my-custom-menu',
                'container' => false,
                'menu_class' => 'mobile-links-list' ]) ); ?>
        </div>
    </div>
</header>