<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!--Favicon added by JM 20150811-->

<link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/yoy/images/apple-icon-57x57.png">

<link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/yoy/images/apple-icon-60x60.png">

<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/yoy/images/apple-icon-72x72.png">

<link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/yoy/images/apple-icon-76x76.png">

<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/yoy/images/apple-icon-114x114.png">

<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/yoy/images/apple-icon-120x120.png">

<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/yoy/images/apple-icon-144x144.png">

<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/yoy/images/apple-icon-152x152.png">

<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/yoy/images/apple-icon-180x180.png">

<link rel="icon" type="image/png" sizes="192x192"  href="/wp-content/themes/yoy/images/android-icon-192x192.png">

<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/yoy/images/favicon-32x32.png">

<link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/yoy/images/favicon-96x96.png">

<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/yoy/images/favicon-16x16.png">

<link rel="manifest" href="/wp-content/themes/yoy/images/manifest.json">

<meta name="msapplication-TileColor" content="#ffffff">

<meta name="msapplication-TileImage" content="/wp-content/themes/yoy/images/ms-icon-144x144.png">

<meta name="theme-color" content="#ffffff">

<!--Favicon added by JM 20150811 || EOF-->

	<!--[if lt IE 9]>

	<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

	<script src=//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

	<![endif]-->

	<?php wp_head(); ?>



		<script src="//use.typekit.net/oiu7ysa.js"></script>

		<script>try{Typekit.load();}catch(e){}</script>



<script>

		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



		  ga('create', 'UA-3761046-37', 'auto');

		  ga('send', 'pageview');





</script>


</head>



<body <?php body_class(); ?>>

<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
	<div class="container-fluid navigation-container">

		<div class="row visible-xs">
				<div class="universal-nav">
				<a href="http://www.bgca.org/Pages/index.aspx" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/universal_logo_bgc.png"></a>
				<a href="http://greatfutures.org/pages/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/universal_logo_greatfutures.png"></a>
				<a href="http://myclubmylife.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/universal_logo_club.png"></a>
				<a href="https://donate.bgca.org/site/SPageServer/;jsessionid=EC8D5148A9ED7597D6528F3D40B48675.app250b?pagename=bgca_alumni_short_reg" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/universal_logo_alumni.png"></a>
			</div>
		</div>

		<div class="navbar-header">

			<button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="logo-wrap">
				<a class="navbar-brand" href="<?php bloginfo('url'); ?>">YOUTH OF THE YEAR</a>
			</div>

			<div class="universal-nav pull-right hidden-xs">
				<a href="http://www.bgca.org/Pages/index.aspx" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/universal_logo_bgc.png"></a>
				<a href="http://greatfutures.org/pages/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/universal_logo_greatfutures.png"></a>
				<a href="http://myclubmylife.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/universal_logo_club.png"></a>
				<a href="https://donate.bgca.org/site/SPageServer/;jsessionid=EC8D5148A9ED7597D6528F3D40B48675.app250b?pagename=bgca_alumni_short_reg" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/universal_logo_alumni.png"></a>
			</div>

		</div>



		<?php

		wp_nav_menu( array(
				'menu'              => 'primary',
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'navbar-collapse-1',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker())
		);

		?>


	</div>
</nav>



<?php //get_template_part('partials/header-slider'); ?>



<!-- Page Content -->

<!-- <div class="container content">

	<div class="row"> -->
