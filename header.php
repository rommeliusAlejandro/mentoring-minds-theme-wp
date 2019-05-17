<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'mastests' ), max( $paged, $page ) );

	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php echo  of_get_option("favicon","none");?>"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/responsive.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/dinamic-style.php" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="<?php echo get_site_url(); ?>/wp-includes/js/jquery/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php
	wp_head();
?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<header id="header">		
			<div class="container">
				<div class="logo">
					<a href="<?php echo get_site_url(); ?>"><img src="<?php echo  of_get_option("logo","none");?>" alt="logo"></a>					
				</div>
				<div class="mobile-opener">
					<a href="#" ><img src="<?php echo  of_get_option("mobile-logo","none");?>" alt="mobile-menu" /></a>									
				</div>				
				<div class="mobile-menu">
					<div class="clear"></div>										
					<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'menu_class' => 'mobile-menu' ) ); ?>
				</div>				
				<div class="slogan">
					<label><img src="<?php echo  of_get_option("slogan","none");?>" alt="slogan"></label>
				</div>					
				<div class="clear"></div>
				<div class="slogan-mobile">
					<div class="col1-3 next">
					</div>
					<div class="col1-2 next">
						<img src="<?php echo  of_get_option("slogan","none");?>" alt="slogan">
					</div>
					<div class="clear"></div> 					
				</div>				
			</div>	
			<div class="menu-bar">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'main-menu' ) ); ?>
			</div>	
		</header>