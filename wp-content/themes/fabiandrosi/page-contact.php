<?php
/*
Template Name: Contact Us
*/
get_header(); ?>
<div class="title-banner">
	<div class="row">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
	</div>
</div>
<div class="row panel">
	<div class="contact entry-content small-12 medium-4 push-8 columns" role="main">		
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php comments_template(); ?>
			</article>
		<?php endwhile; // End the loop ?>
	</div>
	<div class="small-12 medium-8 pull-4 columns hide-for-small" role="main">
		<iframe src="http://maps.google.com/maps?f=q&amp;sll=30.278952,-97.772644&amp;sspn=0,359.978542&amp;ie=UTF8&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=fabi+and+rosi&amp;hq=fabi+and+rosi&amp;hnear=&amp;radius=15000&amp;ll=30.28264,-97.770209&amp;spn=0.016677,0.02399&amp;z=15&amp;iwloc=A&amp;output=embed" width="100%" height="450" frameborder="0" marginwidth="0" marginheight="0" scrolling="No"></iframe>
	</div>
</div>
<div class="row page-container">
	<div class="small-12 medium-4 columns">
		<img src="<?php the_field('sidebar_image'); ?>" alt="Sidebar Image" />
	</div>
	<div class="small-12 medium-8 columns" role="main">
		<?php the_field('contact_form'); ?>
	</div>
</div>

<?php get_footer(); ?>
