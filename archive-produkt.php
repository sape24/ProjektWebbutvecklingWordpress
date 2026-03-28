<?php get_header(); ?>

<section class="hero">
    <h1>Produkter</h1>
</section>

<section class="products">
    <h2>Tillgängliga Produkter</h2>
    <div class="productsgrid">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <article class="productcard">
                <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>