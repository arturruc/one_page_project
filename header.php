<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		
<!-- nawigacja -->
		<nav id="site-navigation" class="main-navigation col-4 desktop">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-main', 'menu_id' => 'menu-main' ) ); ?>
		</nav><!-- #site-navigation -->
		<label for="btn" class="mobile-btn mobile">|||</label>

<!-- logotyp -->
		<div class="site-branding col-4">
			<?php
			if ( is_front_page() || is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			
			
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/svg/logo.svg" alt="">
			
			</a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			
			
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/svg/logo.svg" alt="">
			
			</a></p>
			<?php
			endif;
			?>

		</div><!-- .site-branding -->

<!-- menu z ikonkami -->
		<div class="menu-with-icons col-4">
			<div class="icon-search">
			<i class="ws-svg-icon icon-search active"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.875 3.75a7.125 7.125 0 100 14.25 7.125 7.125 0 000-14.25zM2.25 10.875a8.625 8.625 0 1117.25 0 8.625 8.625 0 01-17.25 0z"></path><path fill-rule="evenodd" d="M15.913 15.914a.75.75 0 011.06 0l4.557 4.556a.75.75 0 01-1.06 1.06l-4.557-4.556a.75.75 0 010-1.06z"></path></svg></i>
			</div>
			<div class="icon-account">
			<i class="ws-svg-icon"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 3.75a5.25 5.25 0 100 10.5 5.25 5.25 0 000-10.5zM5.25 9a6.75 6.75 0 1113.5 0 6.75 6.75 0 01-13.5 0z"></path><path fill-rule="evenodd" d="M12 15.75a9.754 9.754 0 00-8.445 4.874.75.75 0 11-1.3-.75 11.254 11.254 0 0119.49 0 .75.75 0 01-1.3.75A9.754 9.754 0 0012 15.75z"></path></svg></i>
			</div>
			<div class="icon-basket">
			<i class="ws-svg-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 21.75a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM17.25 21.75a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path><path fill-rule="evenodd" d="M0 3a.75.75 0 01.75-.75h1.577A1.5 1.5 0 013.77 3.338L4.53 6h16.256a.75.75 0 01.72.956l-2.474 8.662a2.25 2.25 0 01-2.163 1.632H7.88a2.25 2.25 0 01-2.163-1.632l-2.47-8.645a.738.738 0 01-.01-.033l-.91-3.19H.75A.75.75 0 010 3zm4.959 4.5l2.201 7.706a.75.75 0 00.721.544h8.988a.75.75 0 00.72-.544L19.792 7.5H4.96z"></path></svg></i>
			</div>
		
		
		
		</div>

		


	</header><!-- #masthead -->

	<!-- zdjecie glowne -->

		
		</div>