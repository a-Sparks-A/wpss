<?php get_header(); ?>

<div class="row">
    
    <main class="col-md-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <h1 class="mb-3"><?php the_title(); ?></h1>
                
                <div class="post-meta text-muted mb-3">
                    <span>Дата: <?php the_date(); ?></span> |
                    <span>Автор: <?php the_author(); ?></span>
                </div>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail mb-4">
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                    </div>
                <?php endif; ?>
                
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

            </article>

            <div class="comments-area mt-5">
                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
            </div>

        <?php endwhile; else : ?>
            <p>Запись не найдена.</p>
        <?php endif; ?>
    </main>
    
    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>