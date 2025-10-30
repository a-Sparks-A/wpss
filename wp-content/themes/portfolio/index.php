<?php get_header(); ?>

<div class="row">

    <main class="col-md-8">
        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('card mb-4'); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large', ['class' => 'card-img-top']); ?>
                        </a>
                    <?php endif; ?>

                    <div class="card-body">
                        <h2 class="card-title h4">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="card-text">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Читать далее &rarr;</a>
                    </div>
                </article>

            <?php endwhile; ?>

            <div class="pagination">
                <?php
                the_posts_pagination( array(
                    'prev_text' => '← Предыдущие записи',
                    'next_text' => 'Следующие записи →',
                    'screen_reader_text' => ' ',
                ) );
                ?>
            </div>

        <?php else : ?>
            <p>Записи не найдены.</p>
        <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>

</div> <!-- .row -->

<?php get_footer(); ?>