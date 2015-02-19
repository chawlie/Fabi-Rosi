<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>
<div class="title-banner">
	<div class="row">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
	</div>
</div>
<div class="row page-container">
	<div class="small-12 medium-8 medium-push-4 columns" role="main">

		<?php do_action('foundationPress_before_content'); ?>

		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php do_action('foundationPress_page_before_entry_content'); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action('foundationPress_page_before_comments'); ?>
				<?php comments_template(); ?>
				<?php do_action('foundationPress_page_after_comments'); ?>
			</article>
		<?php endwhile;?>
		<?php do_action('foundationPress_after_content'); ?>
	</div>
	<div class="small-12 medium-4 medium-pull-8 columns">
		<img src="<?php the_field('sidebar_image'); ?>" alt="Sidebar Image" />
	</div>
</div>
<?php get_footer(); ?>
