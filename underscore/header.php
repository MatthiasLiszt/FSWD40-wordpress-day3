<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _first_underscore
 */     

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
        <!-- Bootstrap core CSS -->
         
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
         <!--link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"-->  
        <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/ourcss.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="thisheader">
<center>		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1></center>
<div class="blog-masthead">
<div class="container">
       <nav class="blog-nav">
         <?php
           wp_nav_menu( array(
               'menu-id'              => 'primary-menu',
               'theme_location'    => 'menu-1',
               
               'menu_class'        => 'navbar-nav mr-auto'
               )
           );
       ?>
       </nav>
     </div>
</div>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
		
				<?php
			else :
				?>
				
				<?php
			endif;
			$_first_underscore_description = get_bloginfo( 'description', 'display' );
			if ( $_first_underscore_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $_first_underscore_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_first_underscore' ); ?></button>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

</header><!-- thisheader -->
<div id="page" class="site">
	<a id="pagelinks" class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_first_underscore' ); ?></a>


	<div id="content" class="site-content">
