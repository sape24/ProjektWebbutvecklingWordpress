<?php get_header(); ?>

<section class="hero">
    <h1>Produkter</h1>
</section>

<section class="products">
    <h2>Tillgängliga Produkter</h2>
    <div class="productsgrid"> 
        <!-- Loopar igenom alla produkter och visar dom-->
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <article class="productcard">
                <!-- Visar bild om det finns någon -->
                <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <!-- Visar produktens titel -->
                <h3><?php the_title(); ?></h3>
                <!-- Visar kort beskrivning av produkten -->
                <?php the_excerpt(); ?>
            </article>
        <!-- Avslutar loopen -->
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>