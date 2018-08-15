<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore…
})(window,document,'script','dataLayer','GTM-WJWJ742');</script>
<!-- End Google Tag Manager -->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/toggle_vis.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47534226-1', 'auto');
  ga('send', 'pageview');

</script>

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
		echo ' | ' . sprintf( __( 'Page %s', 'shaken' ), max( $paged, $page ) );

?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox-1.3.4.css" />
<link rel="stylesheet" href="http://tuck.usnwc.mobi/wp-content/themes/tuckfest/Webfonts/tuckfest/tuckstyle.css" type="text/css" charset="utf-8" />

<script type="application/javascript" src="h<?php bloginfo('url'); ?>/wp-content/themes/tuckfest/js/add2home.js"></script>

<link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/tuckfest/css/add2home.css">

<!-- <script type="text/javascript">
var addToHomeConfig = {
	animationIn: 'bubble',
	animationOut: 'drop',
	lifespan:10000,
	touchIcon:true,
	message:'Visit Tuck Fest from your home screen: tap `%icon` and then <strong>Add to Home Screen</strong>.'
};
</script> -->

<script>
addToHomescreen();
</script>


<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('url'); ?>/wp-content/uploads/2015/08/TF_icon_571.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('url'); ?>/wp-content/uploads/2015/08/TF_icon_721.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('url'); ?>/wp-content/uploads/2015/08/TF_icon_1141.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('url'); ?>/wp-content/uploads/2015/08/TF_icon_1441.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('url'); ?>/wp-content/uploads/2015/08/TF_icon_161.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('url'); ?>/wp-content/uploads/2015/08/TF_icon_321.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('url'); ?>/wp-content/uploads/2015/08/TF_icon_961.png">




<!--<link rel="stylesheet" href="http://www.usnwc.org/play/franklin-webfonts/franklingothicfs_condensed_macroman/stylesheet.css" type="text/css" charset="utf-8" />

<link rel="stylesheet" href="http://www.usnwc.org/play/franklin-webfonts/franklingothicfs_condenseditalic_macroman/stylesheet.css" type="text/css" charset="utf-8" />

<link rel="stylesheet" href="http://www.usnwc.org/play/franklin-webfonts/franklingothicfs_mediumcondensed_macroman/stylesheet.css" type="text/css" charset="utf-8" />-->

<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "U.S. National Whitewater Center Tuck Fest",
  "url" : "http://tuckfest.org/",
  "sameAs" : [ "https://www.linkedin.com/company/220848/" ,
    "https://www.facebook.com/usnwc/",
    "https://www.youtube.com/user/theusnwc/",
    "https://www.instagram.com/usnwc/",
“https://vimeo.com/usnwc”]
}
</script>

<?php wp_head(); ?>  

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJWJ742"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
