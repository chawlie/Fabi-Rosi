		</section>
		<div class="footer" role="banner">
			<footer>
				<section class="footer-address">
					<div class="small-12 columns text-center hide-for-small">
						<h2>West Austin <span class="plus"></span> 509 Hearn Street <span class="plus"></span> Austin, TX 78703 <span class="plus"></span> 512.236.0642</h2>
					</div>
					<div class="small-12 columns text-center show-for-small">
						<h2>West Austin + 509 Hearn Street <br> Austin, TX 78703 + 512.236.0642</h2>
					</div>
				</section>
				<section class="bottom-bar">
					<div class="row">
						<div class="email-signup small-12 medium-6 columns">
							<a href="<?php echo home_url( '/email-signup' ); ?>"> <h2 class="button">Sign up for Email Updates</h2></a>
						</div>
						<div class="social-media small-12 medium-6 columns text-right">
							<h2 class="contact-text"><a href="<?php echo home_url( '/contact' ); ?>">Contact Us</a></h2>
							<ul class="social-media-icon no-bullet">
								<li><a href="https://www.facebook.com/pages/FABI-ROSI/81013017474" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/facebook.svg" alt="Facebook" title="Facebook"></a></li>
								<li><a href="http://instagram.com/fabiandrosi/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/instagram.svg" alt="Instagram" title="Instagram"></a></li>	
							</ul>
						</div>
					</div>
				</section>
				<?php do_action('foundationPress_before_footer'); ?>
				<?php dynamic_sidebar("footer-widgets"); ?>
				<?php do_action('foundationPress_after_footer'); ?>
			</footer>
			<div class="footer-bottom"></div>
		</div>
		<a class="exit-off-canvas"></a>

		<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>

<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>
