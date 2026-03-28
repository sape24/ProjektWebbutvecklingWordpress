<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <article>
        <h1><?php the_title(); ?></h1>
<!-- Visar datumet för inlägget-->
        <p class="post-date"><?php echo get_the_date(); ?></p>
<!-- Visar utvald bild om den finns-->
        <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        <?php the_content(); ?>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>