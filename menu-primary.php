<?php
include_once 'inc/topbar-walker.php';
if ( has_nav_menu( 'primary' ) ) :

  $title = '<ul class="title-area">
    <li class="name"><h1><a href="' . home_url('/') . '">' . get_bloginfo( 'name' ) . '</a></h1>
    </li><li class="toggle-topbar menu-icon"><a href="#"><span>' . __('Menu','spinalfluid') . '</span></a></li>
    </ul>';

  $search = '<ul class="search-area">
      <li class="has-form">
        <form method="get" class="search-form" id="topbar-search-form" action="' . home_url('/') . '">
          <input type="text" name="s" placeholder="Search">
        </form>
      </li>
    </ul>';

  echo '<nav class="top-bar" data-topbar>';
  wp_nav_menu( array(
    'container' => '',
    'theme_location' => 'primary',
    'container_class' => '',
    'menu_class' => '',
    'menu_id' => 'menu-primary-items',
    'items_wrap' => $title . '<section class="top-bar-section"><ul class="right"><li>' . $search . '</li><li class="divider">%3$s</li></ul></section>',
    'walker' => new Foundation_Walker(),
    'fallback_cb' => '' ) );
  echo '</nav>';

endif;
