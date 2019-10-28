<?php
require_once("inc.clan-info.php");
$root="../";
$title = '[' . $clan->tag . '] Clan - Administração';
$noFooter=true;
require_once("header.php");
?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
						<article class="post">

							<header>
								<div class="title">
									<h2>Registrar membro [<?php print $clan->tag; ?>]</h2>
									<p>Preencha os campos para registrar o Player</p>
								</div>
							</header>

							<section id="registerPage">
								<div class="row uniform">
									<div class="12u$ 12u$(xsmall)">
										<input type="text" name="auth" id="auth" value="" placeholder="Código Autenticação" />
									</div>
								</div>
								<p>Você precisa do código de autenticação para cadastrar um Player</p>
							</section>

							<section id="registerSec">
								<form method="post" id="registerForm">
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
												<li><input type="submit" id="registerPlayer" value="Registrar" /></li>
												<li><input type="reset" value="Resetar" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>

						</article>

					</div>

<?php require_once("footer.php"); ?>