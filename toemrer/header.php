<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package toemrer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'toemrer' ); ?></a>

<header id="masthead" class="site-header">
<!-- header afsnit med logo og menu ----------------------------------------------------->
	<div class="site-branding">
		<img class="logo">
	</div>

	


	 <!-- header afsnit med logo og menu ----------------------------------------------------->
<header>
  <div class="header__wrapper">
    <div class="header__logo">
      Viggoworld
    </div>
    <nav class="toggle-menu">
      <a href="#">
        <span class="uppercase"> MENU</span>
      </a>
    </nav>
  </div>
</header>

<div class="slide-menu">
	<nav id="site-navigation" class="main-navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav>

  <nav class="social">
  	<nav id="site-navigation" class="main-navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav>
</div>

</header><!-- #masthead -->
