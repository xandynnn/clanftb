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
									<h2>Administração</h2>
									<p>Preencha os campos para registrar o Player</p>
								</div>
							</header>

							<section>
								<div class="row uniform">

									<div class="12u$(medium)">
										<ul class="actions">
											<li><a href="../admin/register" class="button fit">Cadastrar um <?php print $clan->tag; ?></a></li>
										</ul>
										<ul class="actions small">
											<li><a href="../admin/approval" class="button fit">Lista de aprovação de Soldados</a></li>
										</ul>
									</div>

									<div style="clear:both;"></div>

									<div class="12u$(medium)">
										<p>Acesso restrito somente com senha.</p>
									</div>


								</div>
							</section>

						</article>

					</div>

<?php require_once("footer.php"); ?>