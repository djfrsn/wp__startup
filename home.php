<?php 
/*
Template Name: Home
*/
get_header(); ?>
	<main class='body container' role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class='body_content col-sm-8 col-md-8 col-lg-8'>
					<?php the_content(); ?>
				</div>
				<div class="left col-sm-4 col-md-4 col-lg-4">
				<?php get_sidebar(); ?>

					<div class="box col-sm-2 col-md-2 col-lg-2"></div>
					<div class="box col-sm-2 col-md-2 col-lg-2"></div>
					<br>
					<div class="box col-sm-2 col-md-2 col-lg-2"></div>
					<div class="box col-sm-2 col-md-2 col-lg-2"></div>
			
				</div>
				
				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>