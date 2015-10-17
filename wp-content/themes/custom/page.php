<?php get_header(); ?>

<div class="ct-container ct-flex row middle edged fill">

	<section class="ct-posts ct-flex col top fill">

		<?php if (have_posts()) { ?>

			<?php while(have_posts()) { ?>

				<?php the_post(); ?>

				<article class="ct-post ct-flex col top fill">

					<div class="ct-flex row left middle">

						<h2><?php the_title(); ?></h2>

					</div>

					<?php the_content('Read More...'); ?>

				</article>

			<?php } ?>

		<?php } else { ?>

			<p><?php _e('No posts were found. Sorry!'); ?></p>

		<?php } ?>

	</section>

	<section class="ct-sidebar">
		<?php get_sidebar(); ?>
	</section>

</div>

<?php get_footer(); ?>