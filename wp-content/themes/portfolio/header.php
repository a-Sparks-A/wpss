<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="py-3 mb-4 border-bottom bg-light">
    <div class="container d-flex flex-wrap justify-content-center">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                echo '<span class="fs-4">' . get_bloginfo( 'name' ) . '</span>';
            }
            ?>
        </a>

        <nav class="navbar navbar-expand-md">
             <?php
                wp_nav_menu( array(
                    'theme_location' => 'main-menu',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
                    'fallback_cb'    => '__return_false',
                ) );
             ?>
        </nav>
    </div>
</header>

<div class="container">