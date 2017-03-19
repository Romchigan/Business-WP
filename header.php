<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package business
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header class="wrap-header">
	<div class="container pr-0 pl-0">
		<div class="row">
			<div class="col-xs-12 pr-0 pl-0">
				<nav class="navbar navbar-light">
					<a class="navbar-brand" href="#">
						<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>	" alt="logo" class="logo-header">
					</a>
					<div class="navbar-text phone">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <?php dynamic_sidebar( 'phone' ); ?>
<!--              <a href="callto:+9978 8856 999">+9978 8856 999</a>-->
          </div>
					<!--<ul class="nav navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="home.html">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about-us.html">About us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.html">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="news.html">News</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blog.html">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">Pages</a>
							<ul class="nav-submenu">
								<li class="nav-submenu-item"><a href="faq.html">Faq</a></li>
								<li class="nav-submenu-item"><a href="careers.html">Careers</a></li>
								<li class="nav-submenu-item"><a href="testimonials.html">Testimonias</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact-us.html">Contact us</a>
						</li>
					</ul>-->
					    <?php wp_nav_menu( array(
					    		'theme_location' => 'Header-menu',
                  'container'      => '',
                  'menu_class'     => 'nav navbar-nav',
                  'menu_id'        => '',
							) );
					    ?>
				</nav>
			</div>
		</div>
	</div>
</header>
<div id="home-carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<div class="home-banner-background">
				<img src="<?php echo get_theme_mod( 'header_banner_first' ); ?>" alt="banner" class="home-banner-img" width="1970px" height="1300px">
				<div class="carousel-caption">
					<div class="container wrap-heading-site">
						<div class="row">
							<div class="col-xs-12 text-xs-left pl-0">
								<h3 class="sup-heading-site pl-0">Welcome to</h3>

								<?php if ( is_front_page() ) : ?>
									<h1 class="site-title heading-site"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php else : ?>
									<p class="site-title heading-site"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php endif; ?>

								<?php $description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<p class="site-description info-site"><?php echo $description; ?></p>
								<?php endif; ?>

								<button type="button" class="btn btn-orange btn-orange-black-text">Read more</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="home-banner-background">
				<img src="<?php echo get_theme_mod( 'header_banner_second' ); ?>" alt="banner" class="home-banner-img" width="1970px" height="1300px">
				<div class="carousel-caption">
					<div class="container wrap-heading-site">
						<div class="row">
							<div class="col-xs-12 text-xs-left pl-0">
								<h3 class="sup-heading-site pl-0">Welcome to</h3>
								<?php if ( is_front_page() ) : ?>
									<h1 class="site-title heading-site"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php else : ?>
									<p class="site-title heading-site"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php endif; ?>

								<?php $description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<p class="site-description info-site"><?php echo $description; ?></p>
								<?php endif; ?>
								<button type="button" class="btn btn-orange btn-orange-black-text">Read more</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="home-banner-background">
				<img src="<?php echo get_theme_mod( 'header_banner_third' ); ?>" alt="banner" class="home-banner-img" width="1970px" height="1300px">
				<div class="carousel-caption">
					<div class="container wrap-heading-site">
						<div class="row">
							<div class="col-xs-12 text-xs-left pl-0">
								<h3 class="sup-heading-site pl-0">Welcome to</h3>
								<?php if ( is_front_page() ) : ?>
									<h1 class="site-title heading-site"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php else : ?>
									<p class="site-title heading-site"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php endif; ?>

								<?php $description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<p class="site-description info-site"><?php echo $description; ?></p>
								<?php endif; ?>
								<button type="button" class="btn btn-orange btn-orange-black-text">Read more</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 home-carousel-indicators">
				<ol class="carousel-indicators">
					<li data-target="#home-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#home-carousel" data-slide-to="1"></li>
					<li data-target="#home-carousel" data-slide-to="2"></li>
				</ol>
			</div>
		</div>
	</div>
</div>
