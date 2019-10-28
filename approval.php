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
									<h2>Aprovação Apply</h2>
								</div>
							</header>

							<section id="approvalPage">
								<div class="row uniform">
									<div class="12u$ 12u$(xsmall)">
										<input type="text" name="auth" id="auth" value="" placeholder="Código Autenticação" />
									</div>
								</div>
								<p>Você precisa do código de autenticação para aprovar um apply.</p>
							</section>

							<section id="approvalSec">
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Nome</th>
												<th>Conta</th>
												<th>Soldado</th>
												<th>Especialização</th>
												<th>Aceitar</th>
												<th>Recusar</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$jsonP = file_get_contents("json/apply.json");
												$players = json_decode($jsonP, false);
												foreach($players as $uPlayer) :
											?>
											<tr>
												<td><?php print $uPlayer->nome; ?></td>
												<td><a target="_blank" href="http://battlelog.battlefield.com/bf4/user/<?php print $uPlayer->account; ?>/"><?php print $uPlayer->account; ?></a></td>
												<td><?php print $uPlayer->username; ?></td>
												<td><?php print $uPlayer->especialidade; ?></td>
												<td width="50"><a href="javascript:void(0);" data-player="<?php print $uPlayer->account; ?>" class="acceptApply button"><i class="fa fa-check"></i></a></td>
												<td width="50"><a href="javascript:void(0);" data-player="<?php print $uPlayer->account; ?>" class="declineApply button"><i class="fa fa-ban"></i></a></td>
											</tr>
											<?php endforeach; ?>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="3"></td>
											</tr>
										</tfoot>
									</table>
								</div>
							</section>

						</article>

					</div>

<?php require_once("footer.php"); ?>