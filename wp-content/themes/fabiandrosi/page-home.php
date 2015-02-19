<?php
/*
Template Name: Home Page
*/
get_header(); ?>
<section class="featured-buttons show-for-small">
	<div class="row">
		<div class="small-4 columns">
			<a href="<?php echo home_url( '/menu' ); ?>" class="feature-link button">Menu</a>
		</div>
		<div class="small-4 columns">
			<a href="<?php echo home_url( '/events' ); ?>" class="feature-link button">Events</a>
		</div>
		<div class="small-4 columns">
			<a href="<?php echo home_url( '/contact' ); ?>" class="feature-link button">Contact</a>
		</div>
	</div>
</section>
<header id="homepage-hero" class="slideshow-background" role="banner">
	<div class="row">
		<div class="orbit-container small-12 columns text-center">
			<ul class="'orbit-slides-container" data-orbit data-options="animation:fade; slide_number: false; bullets: false;">
				<li>
					<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/slideshow/01-642.jpg" alt="slide 1" />
				</li>
				<li class="active">
					<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/slideshow/02-121.jpg" alt="slide 2" />
				</li>
				<li>
					<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/slideshow/07-201.jpg" alt="slide 7" />
				</li>
				<li>
					<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/slideshow/05-356.jpg" alt="slide 5" />
				</li>
				<li>
					<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/slideshow/escargot.jpg" alt="slide 8" />
				</li>
			</ul>
		</div>
	</div>
</header>
<section class="giftcard-feature show-for-small">
	<div class="small-12 columns text-center">
		<a href="<?php echo home_url( '/gift-cards' ); ?>" class="page-link button">Purchase a Gift Card</a>
	</div>
</section>
<?php get_footer(); ?>
