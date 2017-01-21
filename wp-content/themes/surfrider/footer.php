			<div id="bottom-nav" class="clearfix">
					<div class="col">
						<?php dynamic_sidebar('Footer Col1') ?>
					</div>
					<div class="col">
						<?php dynamic_sidebar('Footer Col2') ?>
					</div>
					<div class="col">
						<?php dynamic_sidebar('Footer Col3') ?>
					</div>
					<div class="col">
						<?php dynamic_sidebar('Footer Col4') ?>
					</div>
					<div id="search">
						<?php dynamic_sidebar('Search Col Row 1') ?>
						<p><?php dynamic_sidebar('Search Col Row 2') ?></p>
					</div>
				</div>
			</div> <!--main-->
			<div id="footer">
				<h2 class="logo">Surfrider Foundation</h2>
				<p>SURFRIDER and the SURFRIDER LOGO are registered service marks of Surfrider Foundation<br />
				Copyright &copy; <?php echo date("Y"); ?> Surfrider Foundation | All rights reserved | 501c3 EIN: 95-3941826 | <a href="http://www.surfrider.org/pages/surfrider-foundation-privacy-policy">Privacy Policy</a> | <a href="http://www.surfrider.org/pages/terms-of-use">Terms of Use</a></p>
			</div>
		</div> <!--container-->
		<?php wp_footer(); ?>
	</body>
</html>