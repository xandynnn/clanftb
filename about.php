<?php require_once("inc.clan-info.php"); ?>
<?php require_once("header.php"); ?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
						<article class="post">

							<header>
								<div class="title">
									<h2>Sobre o Clan [<?php print $clan->tag; ?>]</h2>
									<p>Não conhece nossa história? Veja como foi nossa trajetória.</p>
								</div>
								<div class="meta">
									<time class="published" datetime="2015-10-18">08 Janeiro de 2016</time>
									<a href="../about" class="author"><span class="name">FTB</span><img src="<?php print $clan->logo; ?>" alt="" /></a>
								</div>
							</header>

							<section>

								<h3>O início</h3>

								<p>Com início em 2013, a teve seu início por meio de uma conversa com Leonardo Centeno, Anderson, Bruno e Georges, quando trabalhavam no COMPERJ. 
								Nessa conversa com Bruno, Anderson e Georges ( Gê ) sobre o Game BF3, surgiu uma necessidade de um time pois ainda tinha amigos de Georges que jogava, que era o Leo ( Lheuu ). 
								A partir desse dia, nascia a FTB. A galera se reuniu e nunca mais parou a jogatina.
								O Bruno teve que vender seu Xbox 360 para comprar o PS3, afinal não poderia ter um membro zueiro abandonando o time. 
								A equipe fez pressão e Bruno trocou seu videogame.</p>

								<p>Durante esse período, foi crescendo a quantidade de players e amigos, chegando a mais de 50 membros do clan. A amizade do grupo é tão grande, que praticamente trimestralmente fazemos uma Lan House do BF4 para todos jogarmos juntos.</p>

								<div class="row uniform">

									<div class="6u 12u$(xsmall)">
										<img src="images/img1.jpg" style="width:100%;" alt="">
									</div>

									<div class="6u 12u$(xsmall)">
										<img src="images/img2.jpg" style="width:100%;" alt="">
									</div>

								</div>

								<p>Gostou do Clan e da nossa história? Faça o Apply e junte-se a nós!</p>

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