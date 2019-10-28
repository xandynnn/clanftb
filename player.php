<?php
	$username = $_GET['username'];
	$account;

	$jsp = file_get_contents("json/usuarios.json");
	$ply = json_decode($jsp, false);
	foreach($ply as $uPly){
		if ( $uPly->username == $username ){
			$account = $uPly->account;
		}
	}

	require_once("inc.clan-info.php");
	require_once("getPlayer.php");

$root="../";

$title = '[' . $clan->tag . '] ' . $player->username;

$bodyImage = $player->image;

require_once("header.php"); ?>

					<!-- Main -->
					<div id="main">

							<article class="post">
								<header>
									<div class="title">
										<h2><?php print $title; ?></h2>
										<p>Outras informações sobre o Player</p>
									</div>
									<div class="meta">
										<div style="position:relative;min-width:200px;">
											<img style="position:absolute;height:100px;width:100px;right:-10px;top:-10px" src="http://g.bf4stats.com/mclusky666/<?php print $clan->plataforma; ?>/<?php print $player->username; ?>.png" alt="" border="0" />
											<div class="author" style="float:left;margin-bottom:20px;">
												<img src="<?php print $player->gravatar; ?>" alt="" style="display:block;width:100%;height:auto;max-width:80px;" />
											</div>
										</div>
									</div>
								</header>
								<h2>Pontuação de <?php print $title; ?></h2>
								<p><strong>Potuação Geral:</strong> <?php print $player->scores->general; ?></p>
								<p><strong>Potuação Equipe:</strong> <?php print $player->scores->team; ?></p>
								<p><strong>Potuação Bônus:</strong> <?php print $player->scores->bonus; ?></p>
								<p><strong>Potuação Pelotão:</strong> <?php print $player->scores->squad; ?></p>
							</article>

						<!-- Primeiro Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2>FTB abre inscrições para Apply</h2>
										<p>Gostaria de participar do Clan? Acesse a aba Apply e junte-se a nós.</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">17 de Dezembro de 2015</time>
										<a href="../about" class="author"><span class="name">FTB</span><img src="<?php print $clan->logo; ?>" alt="" /></a>
									</div>
								</header>
								<!--<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>-->
								<p>Hoje abrimos a oportunidade para aumentarmos os amigos do clan, por isso o apply está liberado. É super simples, para fazer a inscrição, basta fazer o apply e o administrador entrará em contato com você in-game para adiciona-lo e posteriormente invita-lo para o Clan.</p>
								<p>Não perca a oportunidade e entrar no grupo, faça o Apply já!</p>

							</article>

							<!-- Segundo Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2>FTB Server no Playstation 3</h2>
										<p>Favorite, em breve mapas variados</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-10-25">25 de Outubro de 2015</time>
										<a href="../about" class="author"><span class="name">FTB</span><img src="<?php print $clan->logo; ?>" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="../images/server.jpg" height="374" width="1220" alt="" /></a>
								<p>O servidor esta aberto, sempre variamos de mapas, em breve mapas totalmente votáveis para a diversão ser completa. Adicione já aos favoritos o FTB Server.</p>

							</article>

					</div>

					<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<header>
									<h2><?php print $title; ?><br />Lvl: <?php print $player->rank; ?></h2>
									<p><strong>Assassinatos:</strong> <?php print $player->kills; ?></p>
									<p><strong>Mortes:</strong> <?php print $player->deaths; ?></p>
									<p><strong>K/D:</strong> <?php print $player->kdRatio; ?></p>
									<p><strong>Vitórias:</strong> <?php print $player->wins; ?></p>
									<p><strong>Derrotas:</strong> <?php print $player->losses; ?></p>
									<p><strong>Vitórias/Derrotas:</strong> <?php print $player->winRatio; ?></p>
									<p><strong>Headshots:</strong> <?php print $player->weapons->headshots; ?></p>
									<p><strong>Tempo de jogo:</strong> <?php print $player->playtime; ?> ( <?php print $player->playtimeLong; ?> )</p>
									<p><strong>Arma favorita:</strong> <?php print $player->weapons->favouriteWeapon; ?> </p>
									<p><strong>Heals:</strong> <?php print $player->heals; ?> </p>
									<p><strong>Revive:</strong> <?php print $player->revives; ?> </p>

								</header>
							</section>

							<!-- Posts List -->
							<section>
								<ul class="posts">

									<?php
										$jsonP = file_get_contents("json/usuarios.json");
										$players = json_decode($jsonP, false);

										foreach($players as $uPlayer) :
									?>

									<li>
										<article>
											<header>
												<h3><a href="../player/<?php print $uPlayer->username; ?>"><?php print $uPlayer->username; ?></a></h3>
												<p><?php print $uPlayer->nome; ?></p>
											</header>
											<a href="../player/<?php print $uPlayer->username; ?>" class="image">
												<img src="<?php print $uPlayer->gravatar; ?>" alt="" />
											</a>
										</article>
									</li>

									<?php endforeach; ?>

								</ul>
							</section>

<?php require_once("footer.php"); ?>