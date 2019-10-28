<?php require_once("inc.clan-info.php"); ?>
<?php require_once("header.php"); ?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
						<article class="post">

							<header>
								<div class="title">
									<h2>Players [<?php print $clan->tag; ?>]</h2>
									<p>Faça o seu apply e junte-se ao clan <?php print $clan->nome; ?>!</p>
								</div>
								<div class="meta">
									<time class="published" datetime="2015-10-18">08 Janeiro de 2016</time>
									<a href="../about" class="author"><span class="name">FTB</span><img src="<?php print $clan->logo; ?>" alt="" /></a>
								</div>
							</header>

							<section>

								<h3>Players <?php print $clan->nome; ?></h3>

								<div class="row uniform">

									<?php
										$jsonP = file_get_contents("json/usuarios.json");
										$players = json_decode($jsonP, false);
										foreach($players as $uPlayer) :
									?>

									<div class="3u 12u$(xsmall)">

										<a href="player/<?php print $uPlayer->username; ?>" class="image" style="padding:20px;display:block;">
											<img src="<?php print $uPlayer->gravatar; ?>" alt="" style="display:block;width:100%;height:auto;" />
										</a>

										<h3 style="text-align:center;"><a href="player/<?php print $uPlayer->username; ?>"><?php print $uPlayer->username; ?></a></h3>
										<p style="text-align:center;"><?php print $uPlayer->nome; ?></p>

									</div>

									<?php endforeach; ?>

								</div>

							</section>

						</article>

					</div>

					<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
						<section id="intro">
							<a href="../about" class="logo"><img src="<?php print $clan->logo; ?>" alt="<?php print $clan->nome; ?>" /></a>
							<header>
								<h2>[<?php print $clan->tag; ?>]</h2>
							</header>
						</section>

<?php require_once("footer.php"); ?>