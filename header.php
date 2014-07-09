<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php hybrid_document_title(); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <script src="<?php echo get_template_directory_uri() . '/foundation/bower_components/foundation/js/vendor/modernizr.js'; ?>"></script>
<?php wp_head(); // wp_head ?>

</head>

<body class="<?php hybrid_body_class(); ?>" itemscope itemtype="http://schema.org/WebPage">

    <div id="container">

        <?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>

        <header id="header">
        <?php $bg_url = get_header_image(); ?>
        <div id="header-container" style="background-image: url('<?php echo esc_url( $bg_url ); ?>');">
            <hgroup id="branding">
                <a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                    <?php // $logo_url = hybrid_get_setting( 'logo_upload' );
                    $logo_url = trailingslashit( get_template_directory_uri() ) . '/images/header-logo.png';
                    if( !empty( $logo_url ) ) : ?>
                        <div id="logo-container">
                            <img id="logo" src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
                        </div>
                    <?php endif; ?>

                    <h1 id="site-title"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></h1>
                    <h2 id="site-description"><?php echo esc_attr( bloginfo( 'description' ) ); ?></h2>
                </a>
            </hgroup><!-- #branding -->
        </div>
        </header><!-- #header -->


        <?php /* DISABLED (mjbrown)
          if ( get_header_image() ) echo '<div id="custom-header"><img class="header-image" src="' . esc_url( get_header_image() ) . '" alt="" /></div>';
          //DISABLED */
        ?>

        <?php get_template_part( 'menu', 'secondary' ); // Loads the menu-secondary.php template. ?>

        <div id="main">

            <?php if ( current_theme_supports( 'breadcrumb-trail' ) ) breadcrumb_trail( array( 'container' => 'nav', 'separator' => '>', 'before' => __( 'You are here:', 'spinalfluid' ) ) ); ?>
