<?php
/*
Template Name: Email Signup
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
	<div class="small-12 medium-8 medium-push-2 columns" role="main">

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
		<form action="http://oi.vresp.com?fid=da6d60b8cf" method="post" target="vr_optin_popup" style="margin-top: 0;" onsubmit="window.open( 'http://www.verticalresponse.com', 'vr_optin_popup', 'scrollbars=yes,width=600,height=450' ); return true;" >
			<div class="row">
			    <div class="large-12 columns">
			      <label><p>Email Address (required)
			        <input type="text" name="email_address" /></p>
			      </label>
			    </div>
			</div>
			<div class="row">
			    <div class="large-12 columns">
			      <label><p>First Name:
			        <input type="text" name="first_name" /></p>
			      </label>
			    </div>
			</div>
			<div class="row">
			    <div class="large-12 columns">
			      <label><p>Last Name:
			        <input type="text" name="last_name" /></p>
			      </label>
			    </div>
			</div>
			<div class="row">
			    <div class="large-12 columns">
			        <input class="button" type="submit" value="Join Now" />
			    </div>
			</div>
		</form>
	</div>
</div>
<?php get_footer(); ?>
