<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>


        <body <?php body_class(); ?>>
            <header>
                <nav>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" width="100" height="30"></a></li>
                        <li><a href="<?php echo home_url(); ?>">Inicio</a></li>
                        <li><a href="<?php echo home_url('/gastronomia'); ?>">Gastronomia</a></li>
                        <li><a href="<?php echo home_url('/turismo'); ?>">Turismo</a></li>
                        <li><a href="<?php echo home_url('/personas'); ?>">Personas</a></li>
                        <li><a href="<?php echo home_url('/empresas'); ?>">Empresas</a></li>
                        <li><a href="<?php echo home_url('/suscribete'); ?>">Suscribete</a></li>
                        <li><a href="<?php echo home_url('/buscar'); ?>">Buscar</a></li>
                    </ul>
                </nav>
            </header>

           



<?php get_footer(); ?>
