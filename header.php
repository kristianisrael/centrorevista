<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><!--<![endif]-->
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php global $page, $paged;	wp_title( '|', true, 'right' );	bloginfo( 'name' );	$site_description = get_bloginfo( 'description', 'display' );	if ( $site_description && ( is_home() || is_front_page() ) )	echo " | $site_description"; ?></title>
	<meta name="description" content="La revista de la alta sociedad del sur de Jalisco y la gente vanguardista, destacada y moderna.">
	<meta name="author" content="KD & Friends">
	<meta property="og:title" content="Centrorevista" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.centrorevista.com" />
<meta property="og:image" content="http://www.centrorevista.com/wp/wp-content/themes/CentroWP/images/logo.jpg" />
<meta property="og:site_name" content="Centrorevista" />
<meta property="fb:admins" content="598222513" />
<meta property="og:description"
      content="La revista de la alta sociedad del sur de Jalisco y la gente vanguardista, destacada y moderna."/>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">



	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<?php wp_head();?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php bloginfo('template_directory'); ?>/fancy/jquery.fancybox.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fancy/jquery.fancybox.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fancy/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fancy/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancy/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slides.js"></script>

	<script>
	$(document).ready(function(){
	$('.cumple').find('a').replaceWith(function() { return $(this).contents(); });
	$('span.fsl.fwb').find('a').addClass('wow');
	$("a.fancybox").fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : true,
				arrows    : false,
				nextClick : true,

				helpers : {
					title : null, 
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});
	
});

	</script>
</head>
<body >
	<div class="extend red_dark" id="header">
	<div class="container">
		<div class="sixteen columns" id="top-banner">
			<img src="<?php bloginfo('template_directory'); ?>/images/banner.jpg" class="scale-with-grid" alt="">
		</div>
	</div>
</div>
<div class="extend red">
	<div class="container" id="mainmenu">
		<div class="sixteen columns">
			<?php wp_nav_menu( array('theme_location' => 'primary-menu', 'menu_class' => 'menu right', 'container' => 'false')); ?>
		</div>
	</div>
</div>

