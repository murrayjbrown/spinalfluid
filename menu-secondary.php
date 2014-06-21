<?php if ( has_nav_menu( 'secondary' ) ) :
 include_once 'inc/topbar-walker.php';

  $search = '<ul class="search-area">
      <li class="has-form">
        <form method="get" class="search-form" id="topbar-search-form" action="' . home_url('/') . '">
          <input type="text" name="s" placeholder="Search">
        </form>
      </li>
    </ul>';

 wp_nav_menu( array(
    'container' => 'nav',
    'theme_location' => 'secondary',
    'container_class' => 'top-bar',
    'menu_class' => '',
    'menu_id' => 'menu-secondary-items',
    'items_wrap' => '<section class="top-bar-section"><ul class="left"><li class="divider">%3$s</li></ul><ul class="right"<li>' . $search . '</li></ul></section>',
    'walker' => new Foundation_Walker(),
    'fallback_cb' => '' ) );

 endif;


?>
