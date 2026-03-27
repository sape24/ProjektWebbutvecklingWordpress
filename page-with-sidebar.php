<?php
/*
Template Name: Sida med sidebar
*/
?>
<?php get_header(); ?>
<section class="hero">
    <h1><?php the_title();?></h1>
</section> 
<!-- Sidlayout med innehåll och sidebar bredvid varandra-->
<div class="content-with-sidebar">
    <div class="content">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
<!-- Hämtar sidebaren med widgets-->
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>