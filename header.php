<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

		<script src="https://use.typekit.net/kiu5ddr.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="cf">

					<div class="d-1of3 search-box">
						<form role="search" method="get" id="searchform" class="searchform" action="http://localhost/wordpress/" _lpchecked="1">
							<label for="s" class="screen-reader-text"><span>Search</span></label>
							<img src="http://www.songofstyle.com/wp-content/themes/ponsonby/image/search.png">
							<input type="text" class="search-field" name="s" id="s" value="SEARCH" onblur="if (this.value == '') {this.value = 'SEARCH';}" onfocus="if (this.value == 'SEARCH') {this.value = '';}">
							<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search">
						</form>
					</div>
					<?php // to use an image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<div id="logo" class="h1 d-1of3" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="http://www.shoplimitededitions.com/v/vspfiles/templates/256/images/template/header_bg.png" alt="Limited Ediions Blog"></a></div>
					<div class="d-1of3 social-icons">
						<ul id="social-right">
							<li><a href="http://www.facebook.com/SongOfStyle" target="_blank"><img src="http://www.songofstyle.com/wp-content/themes/ponsonby/image/fb.png"></a></li>
							<li><a href="http://twitter.com/aimeesong" target="_blank"><img src="http://www.songofstyle.com/wp-content/themes/ponsonby/image/twtr2.png"></a></li>
							<li><a href="http://instagram.com/songofstyle" target="_blank"><img src="http://www.songofstyle.com/wp-content/themes/ponsonby/image/insta.png"></a></li>
							<!--<li><a href=""><img src="http://www.songofstyle.com/wp-content/themes/ponsonby/image/tumb.png" /></a></li>-->
							<li><a href="http://pinterest.com/songofstyle/" target="_blank"><img src="http://www.songofstyle.com/wp-content/themes/ponsonby/image/pntrst.png"></a></li>
							<li><a href="http://bloglovin.com/blog/493482/song-of-style" target="_blank"><img src="http://www.songofstyle.com/wp-content/themes/ponsonby/image/blog.png"></a></li>
						</ul>
					</div>
					

					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

				</div>

			</header>
