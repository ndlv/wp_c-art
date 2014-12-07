<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="wp-content/themes/blocarte_theme/css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
<body>
	<div id="wrapper">
		<div id="header">
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name">
						<h1><a href="#">Blocarte</a></h1>
					</li>
					<?php get_header(); ?>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
					<!-- Right Nav Section -->
					<ul class="right">
						<li class="active"><a href="#">Right Button Active</a></li>
						<li class="has-dropdown">
							<a href="#">Right Button Dropdown</a>
							<ul class="dropdown">
								<li><a href="#">First link in dropdown</a></li>
								<li class="active"><a href="#">Active link in dropdown</a></li>
							</ul>
						</li>
					</ul>

					<!-- Left Nav Section -->
					<ul class="left">
						<li><a href="#">Left Nav Button</a></li>
					</ul>
				</section>
			</nav>
			
		</div>