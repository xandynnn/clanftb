<!DOCTYPE HTML>
<html>
	<head>
		<title>Clan <?php print $clan->tag; ?><?php if ( isset($title)) { print " - $title"; } else { print " - $clan->nome"; } ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php if ( isset($title)) { print $root; } ?>assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php if ( isset($title)) { print $root; } ?>assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php if ( isset($title)) { print $root; } ?>assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php if ( isset($title)) { print $root; } ?>assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

			<!-- Wrapper -->
			<div id="wrapper">

					<!-- Header -->
					<header id="header">
						<h1><a href="#">Clan [<?php print $clan->tag; ?>]</a></h1>
						<nav class="links">
							<ul>
								<li><a href="<?php if ( isset($title)) { print $root; } ?>home">Home</a></li>
								<li><a href="<?php if ( isset($title)) { print $root; } ?>players">Players</a></li>
								<li><a href="<?php if ( isset($title)) { print $root; } ?>about">Sobre o Clan</a></li>
								<li><a href="<?php if ( isset($title)) { print $root; } ?>apply">Apply</a></li>
								<li><a href="<?php if ( isset($title)) { print $root; } ?>cup">Campeonato</a></li>
								<li><a href="<?php if ( isset($title)) { print $root; } ?>rules">X-Clan</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Buscar Player</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

					<!-- Menu -->
					<section id="menu">

							<!-- Search -->
							<!--<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>-->

							<!-- Links -->
							<section>
								<ul class="links">
									<li><a href="<?php if ( isset($title)) { print $root; } ?>home"><h3>Home</h3></a></li>
									<li><a href="<?php if ( isset($title)) { print $root; } ?>players"><h3>Players</h3></a></li>
									<li><a href="<?php if ( isset($title)) { print $root; } ?>about"><h3>Sobre o Clan</h3></a></li>
									<li><a href="<?php if ( isset($title)) { print $root; } ?>apply"><h3>Apply</h3></a></li>
									<li><a href="<?php if ( isset($title)) { print $root; } ?>cup"><h3>Campeonato</h3></a></li>
									<li><a href="<?php if ( isset($title)) { print $root; } ?>rules"><h3>X-Clan</h3></a></li>
								</ul>
							</section>

							<!-- Actions -->
							<!--<section>
								<ul class="actions vertical">
									<li><a href="<?php if ( isset($title)) { print $root; } ?>register" class="button big fit">Registrar</a></li>
								</ul>
							</section>-->

					</section>