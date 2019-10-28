<?php require_once("inc.clan-info.php"); ?>
<?php require_once("header.php"); ?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
						<article class="post">

							<header>
								<div class="title">
									<h2>Regras para Confronto entre Clans</h2>
									<p>Mesmas regras baseadas em configurações do servidor da ESL</p>
								</div>
								<div class="meta">
									<time class="published" datetime="2015-10-18">05 Fevereiro de 2016</time>
									<a href="../about" class="author"><span class="name">FTB</span><img src="<?php print $clan->logo; ?>" alt="" /></a>
								</div>
							</header>

							<section>

								<h2>Proibições</h2>

								<ol>
									<li>Uso de programas e modificações de configuração ilegais.</li>
									<li>Scripts e Uso Macro</li>
								</ol>

								<h2>As regras de 10on10 Conquest</h2>

								<ol>
									<li>Qualquer tipo de uso bug não é permitido.</li>
									<li>Posições são proibidos, onde texturas desaparecer em paredes ou motivos, se é necessário um movimento especial (por exemplo, um salto).
									Usando tal posição proibida irá resultar em uma punição Ticket -50 para a rodada foi utilizado.</li>
								</ol>

								<h2>Restrições de Mapa</h2>
								<p><strong>Mapa Tamanho: Conquest</strong></p>

								<ul>
									<li>Siege of Shanghai</li>
									<li>Paracel Storm - Nenhuma equipe pode pegar a bandeira E</li>
									<li>Zavod 311</li>
									<li>Flood Zone</li>
									<li>Hainan Resort</li>
									<li>Rogue Transmission - Mobile AA  com spawns na bandeira B</li>
									<li>Dawnbreaker - Stealth Jet</li>
									<li>Golmud Railway - Nenhuma equipe poderá pegar a bandeira E e o Arty (M142)</li>
									<li>Lancang Dam</li>
								</ul>

								<p><strong>Perks / Restrições Unlock / Arma</strong></p>
								<p><strong>Estas regalias ou armas não estão autorizados a ser usadas:</strong></p>

								<ul>
									<li>ACE52</li>
									<li>SCAR-H</li>
									<li>MBT LAW</li>
									<li>Spawn Beacon</li>
									<li>IRNV/Thermal Vision (Infantry - Nos veículos são permitidas)</li>
									<li>Airburst (HE)</li>
									<li>M26</li>
									<li>Soflam (Infantaria e nos veículos também)</li>
									<li>V40 Mini Nade</li>
									<li>Todas Shotguns</li>
									<li>Battle Pickups</li>
									<li>PLD (Portable Laser Designator)</li>
									<li>T-UGS</li>
									<li>Flashbang</li>
									<li>Todos as armas e aparelhos de DLCs</li>
								</ul>

								<p><strong>Comportamento Match-start</strong></p>
								<p>Por jogador só há um suicídio durante a contagem regressiva do tempo permitido (vars.roundLockdownCountdown 60)! Punição: -10 ingressos por jogador que vai mais de 1 suicídios durante os 60secs! Provas necessárias!</p>

								<p><strong>Roubo de veículos</strong></p>
								<p>Você não tem permissão para roubar veículos pesados ​​a partir da base do inimigo (tanques, barcos de ataque, helicópteros e jatos). Roubar um veículo a partir da base vai levar a um padrão perder para a rodada em que o veículo foi roubado.</p>

								<h2>Resultados de pontuação e combinar</h2>

								<h3>Best of One (BO1)</h3>
								<p>Um mapa será reproduzida. Duas rodadas será jogado em um mapa. Após a primeira rodada é sobre as equipes se ligado e você joga o segundo turno. Os bilhetes de ambos os turnos contam para o resultado final. A equipe que ganhou o maior número de bilhetes nas duas rodadas vence a partida / map.</p>

								<h3>Best of Two (Bo2)</h3>
								<p>Dois mapas será reproduzida. Duas rodadas em cada mapa será reproduzida. Os bilhetes de todos os 4 rodadas contam para o resultado final. A equipe que ganhou o maior número de bilhete após os 2 mapas ganha o jogo.</p>

								<h3>Best of Three (BO3)</h3>
								<p>Até três mapas serão jogados, aqui o mapa ganha contagem. A equipe que ganhou o maior número de bilhetes em ambas as rodadas de um mapa ganha o mapa. A equipe que ganha 2 mapas vai ganhar o jogo em geral.</p>

								<p><strong>Configurações do Servidor</strong></p>
								<p>As configurações do servidor devem ser verificados antes do início do jogo e só pode ser contestado se eles foram alterados durante a partida. Um protesto por causa de configurações do servidor erradas após o jogo teve lugar será rejeitada!</p>


								<h2>CONFIGURAÇÃO DO SERVIDOR</h2>
								<ul>
									<li>SERVERTYPE: Private/unranked</li>
									<li>FRIENDLY FIRE: on</li>
									<li>FAIRFIGHT: off</li>
									<li>KICK IDLE PLAYER AFTER SECONDS: 900</li>
									<li>OF TK BEFORE PLAYER IS KICKED: 99</li>
									<li>BAN PLAYER AFTER # OF KICKS: 99</li>
									<li>VEHICLES: on</li>
									<li>REGENERATIVE HEALTH: off</li>
									<li>ONLY SQUAD LEADER SPAWN: off</li>
									<li>SHOW MINIMAP: on</li>
									<li>SHOW HUD: on</li>
									<li>USE MINIMAP SPOTTING: on</li>
									<li>USE 3D SPOTTING: off</li>
									<li>KILL CAM: OFF</li>
									<li>SHOW ENEMY NAME TAGS: on</li>
									<li>HIT INDICATOR: on</li>
									<li>PLAYER RESPAWN TIME IN % : 100</li>
									<li>PLAYER HEALTH IN %: 100</li>
									<li>BULLET DAMAGE MODIFIER IN %: 100</li>
									<li>RELOAD FULL MAGS: off</li>
									<li>OF PLAYERS TO START ROUND: 10</li>
									<li>Max. Players: 20</li>
									<li>ALLOW COMMANDERS: off</li>
									<li>TEAM TICKET COUNT %: 75</li>
									<li>ALLOW PUBLIC SPECTATORS: 0</li>
									<li>VEHICLE RESPAWN DELAY %: 100</li>
									<li>TICKET BLEED RATE: 100</li>
									<li>TIME LIMIT: 42</li>
								</ul>

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