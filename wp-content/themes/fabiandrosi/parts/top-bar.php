<div class="logo text-center">
	<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/assets/fabiandrosi-logo.jpg" alt="Fabi + Rosi" title="Fabi + Rosi"></a>
	<p class="tagline">A European Kitchen in the Heart of Austin, Texas</p>
</div>
<div class="top-bar-container contain-to-grid show-for-medium-up">
	<div class="row">
		<div class="top-bar-bg small-12">
			<nav class="top-bar center" data-topbar="">
				<section class="top-bar-section">
					<?php foundationPress_top_bar_l(); ?>
					<?php foundationPress_top_bar_r(); ?>
				</section>
			</nav>
		</div>
	</div>
</div>