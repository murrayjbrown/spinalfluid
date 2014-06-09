<?php if ( has_nav_menu( 'secondary' ) ) :
 include_once 'inc/topbar-walker.php';

 wp_nav_menu( array(
    'container' => 'nav',
    'theme_location' => 'secondary',
    'container_class' => 'menu-bar',
    'menu_class' => '',
    'menu_id' => 'menu-secondary-items',
    'items_wrap' => '<section class="top-bar-section"><ul class="left"><li class="divider">%3$s</li></ul></section>',
    'walker' => new Foundation_Walker(),
    'fallback_cb' => '' ) );

 endif;
?>
