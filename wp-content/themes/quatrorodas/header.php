<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>
</head>
<body>
<div class="container">
	<header id="header-quatrorodas">
		<div class="row ad-header">
			<div class="col-md-6 col-md-offset-2">
				<img src="<?php echo get_template_directory_uri() . '/image/ad_header.png' ?>">
			</div> <!-- .col-md-06 .col-md-offset-03 -->
		</div> <!-- .row  ad-header-->
		<div class="row menu-header">
			<div class="logo col-xs-0 col-xs-offset-2 col-md-3 col-md-offset-0">
				<img src="<?php echo get_template_directory_uri() . '/image/logo.png' ?>">
			</div> <!-- logo col-xs-0 col-xs-offset-2 col-md-3 col-md-offset-0 -->
			<!-- Div que mostra o menu no clique para mobile -->
				<div class="menu-mobile col-xs-1 col-md-offset-0"><span id="icon-menu"class="glyphicon glyphicon-chevron-down"></span></div>	
			<div class="col-md-7 div-header">
				<nav id="nav-header">
					<?php
					$menuHeader = array(
						'theme_location' => 'header',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>'
					); 
					wp_nav_menu($menuHeader);
					?>
				</nav>
			</div> <!-- .col-md-7 -->
			<div class="col-md-2 searchDiv">
				<form method="get" id="searchForm" action="<?php bloginfo('url'); ?>">
						<input type="text" placeholder="Pesquisar" name="search" id="search" value="<?php the_search_query(); ?>">
				</form>
			</div> <!-- .col-md-2 searchDiv -->
		</div> <!-- .col-md-2 searchDiv -->
		<div class="row submenu-header">
			<div class="col-md-10">
				<nav id="nav-submenu-header">
					<?php 
					$submenuHeader = array(
						'theme_location' => 'submenu-header',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>'
					);
					wp_nav_menu($submenuHeader);
					?>	
				</nav>
			</div> <!-- .col-md-10 -->
		</div> <!-- .row submenu-header -->
	</header>

