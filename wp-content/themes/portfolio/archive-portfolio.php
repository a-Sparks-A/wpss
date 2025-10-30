<?php get_header(); ?>

<main class="col-12">
    <div class="page-header mb-4">
        <h1><?php post_type_archive_title(); ?></h1>
    </div>

    <?php if ( have_posts() ) : ?>
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                        <div class="portfolio-item">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('medium_large', ['class' => 'img-fluid']); ?>
                            <?php else : ?>
                                <img src="https://via.placeholder.com/400x300" class="img-fluid" alt="Placeholder">
                            <?php endif; ?>
                            <div class="portfolio-title-overlay">
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </div>
                    </a>
                </div>

            <?php endwhile; ?>
        </div>
        
        <div class="pagination">
            <?php
            the_posts_pagination( array(
                'prev_text' => '← Назад',
                'next_text' => 'Вперед →',
            ) );
            ?>
        </div>

    <?php else : ?>
        <p>На данный момент в портфолио нет работ.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>