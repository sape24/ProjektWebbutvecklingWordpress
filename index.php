<?php get_header(); ?>
<!-- Loopar igenom alla inlägg och visar dom-->
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>        
    <article class="newscard">
        <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Läs mer</a>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>