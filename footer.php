				<?php if( !isset($noFooter) ) : ?>
							<!-- About -->
							<section class="blurb">
								<h2>Sobre nós</h2>
								<p>Acesse a página sobre nós e conheça mais sobre a amizade do Clan FTB, sempre novidades como FTB Lan House.</p>
								<ul class="actions">
									<li><a href="#" class="button">Saiba mais</a></li>
								</ul>
							</section>

							<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<!--<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>-->
									<li><a href="https://www.facebook.com/groups/125512694288317/" target="_blank" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<!--<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>-->
								</ul>
								<p class="copyright">&copy; FTB - Faca, Tiro e Bomba. Todos os direitos reservados.</p>
							</section>

					</section>
				<?php endif; ?>

			</div>

			<!-- Scripts -->
			<script src="<?php if ( isset($title)) { print $root; } ?>assets/js/jquery.min.js"></script>
			<script src="<?php if ( isset($title)) { print $root; } ?>assets/js/skel.min.js"></script>
			<script src="<?php if ( isset($title)) { print $root; } ?>assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php if ( isset($title)) { print $root; } ?>assets/js/main.js"></script>
			<?php if(isset($script)){print $script;} ?>

	</body>
</html>