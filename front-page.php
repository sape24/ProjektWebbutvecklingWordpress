<?php get_header(); ?>

<section class="hero">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description');?></p>
</section>

<section class="puff">
    <h2>Erbjudanden</h2>
    <div class="puffgrid">
        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'puffar',
            'posts_per_page' => 3
        );
        $puffar = new WP_Query($args);
        if($puffar->have_posts()) : while($puffar->have_posts()) : $puffar->the_post();
        ?>
            <article class="puffcard">
                <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</section>

<section class="news">
    <h2>Senaste Nyheterna</h2>
    <div class="newsgrid">
        <?php $args = array(
            'post_type' => 'post',
            'category_name' => 'nyheter',
            'posts_per_page' => 3
        );
        $news = new WP_Query($args);
        if($news->have_posts()) : while($news->have_posts()) : $news->the_post();
        ?>
            <article class="newscard">
                <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Läs mer</a>
            </article>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</section>

<?php get_footer(); ?>
        