<?php get_header(); ?>

<main class="col-12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <h1 class="mb-4"><?php the_title(); ?></h1>
            
            <div class="page-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>