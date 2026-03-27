<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<!-- Herosection med sidans titel-->
    <section class="hero">          
        <h1><?php the_title();?></h1>
    </section>    
    <section>
        <?php the_content(); ?>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
