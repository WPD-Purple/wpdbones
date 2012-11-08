<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );
	
	// Add the blog name.
	bloginfo( 'name' );
	
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'waipoua' ), max( $paged, $page ) );
?></title>
			<!-- BEGIN:OGP -->
<?php if (is_single() || is_page()) { ?>
<?php while (have_posts()) : the_post(); ?>
<meta property="og:title" content="<?php the_title(); ?>｜<?php bloginfo('name'); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php if (has_post_thumbnail()) { $custom_thumbnail = get_post_thumbnail_id($post->ID); $image = wp_get_attachment_image_src($custom_thumbnail, 'meganeogp'); echo $image[0]; } else { echo '/wp-content/uploads/apple-touch-icon-150x150.png'; } ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:description" content="<?php echo mb_substr(get_the_excerpt(), 0, 150); ?>..." />
<?php endwhile; ?>
<?php } elseif (is_home()) { ?>
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<meta property="og:type" content="blog" />
<meta property="og:image" content="/wp-content/uploads/apple-touch-icon-150x150.png" />
<meta property="og:url" content="<?php bloginfo('url'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<?php } else { ?>
<meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="/wp-content/uploads/apple-touch-icon-150x150.png" />
<meta property="og:url" content="<?php echo get_bloginfo('url').$_SERVER['REQUEST_URI']; ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<?php } ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="fb:app_id" content="118849448259975" />
<!-- END:OGP -->

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<header class="header" role="banner">
			
				<div id="inner-header" class="wrap clearfix">
					
					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
					
					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>
					
					
					<nav role="navigation">
						<?php wpdbones_main_nav(); ?>
					</nav>
				
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->