<aside class="col-md-4">
    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    <?php else : ?>
        <div class="widget">
            <h4 class="widget-title">Сайдбар</h4>
            <p>Перейдите в "Внешний вид" -> "Виджеты" и добавьте виджеты в "Главный сайдбар".</p>
        </div>
    <?php endif; ?>
</aside>