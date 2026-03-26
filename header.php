<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="logo">
            <!-- visar logotypen som laddas upp via wpadmin-->
            <?php the_custom_logo(); ?>                                    
        </div>
        <nav id="menu">
            <!--skriver ut menyn registrerad som huvudmeny-->
            <?php wp_nav_menu(array(
                'theme_location' => 'huvudmeny'                               
            )); ?>
        </nav>
    </header>
    <main>