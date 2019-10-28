<?php require_once("inc.clan-info.php"); ?>
<?php require_once("header.php"); ?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
						<article class="post">

							<header>
								<div class="title">
									<h2>Apply [<?php print $clan->tag; ?>] Clan</h2>
									<p>Faça o seu apply e junte-se ao clan <?php print $clan->nome; ?>!</p>
								</div>
								<div class="meta">
									<time class="published" datetime="2015-10-18">20 Dezembro de 2015</time>
									<a href="../about" class="author"><span class="name">FTB</span><img src="<?php print $clan->logo; ?>" alt="" /></a>
								</div>
							</header>

							<section>
								<h3>Preencha os campos para o Apply.</h3>
								<form method="post" id="applyForm">
									<div class="row uniform">
										<div class="12u$ 12u$(xsmall)">
											<input type="text" name="nome" id="nome" value="" placeholder="Nome" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="account" id="account" value="" placeholder="Battlelog Account name" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="username" id="username" value="" placeholder="Player username" />
										</div>
										<div class="12u$">
											<div class="select-wrapper">
												<select name="especialidade" id="especialidade">
													<option value="0">- Especialidade -</option>
													<option value="Assalto">Assalto</option>
													<option value="Suporte">Suporte</option>
													<option value="Engenheiro">Engenheiro</option>
													<option value="Sniper">Sniper</option>
													<option value="Veículos">Veículos</option>
												</select>
											</div>
										</div>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" id="applyPlayer" value="Juntar-se" /></li>
												<li><input type="reset" value="Limpar" /></li>
											</ul>
										</div>
										<input type="hidden" name="type" value="true">
									</div>
								</form>
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