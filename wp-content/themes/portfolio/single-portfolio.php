<?php get_header(); ?>

<main class="col-12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="portfolio-image mb-4">
                    <?php the_post_thumbnail('full', ['class' => 'img-fluid rounded']); ?>
                </div>
            <?php endif; ?>

            <h1 class="display-4 text-center mb-4"><?php the_title(); ?></h1>
            
            <div class="portfolio-content fs-5">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>