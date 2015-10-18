<?php get_header(); ?>

<div class="ct-container ct-flex row edged top wrap-s ct-flex-item fit">

	<section class="ct-content ct-posts ct-flex col top fill padding-1">

		<?php if (have_posts()) { ?>

			<?php while(have_posts()) { ?>

				<?php the_post(); ?>

				<article class="ct-post ct-flex col top fill">

					<div class="ct-flex row edged middle">

						<h2><?php the_title(); ?></h2>

					</div>

					<?php the_content('Read More...'); ?>

				</article>

			<?php } ?>

		<?php } else { ?>

			<p><?php _e('No posts were found. Sorry!'); ?></p>

		<?php } ?>

	</section>

	<section class="ct-sidebar ct-content padding-1">
		<?php get_sidebar(); ?>
	</section>

</div>

<?php get_footer(); ?>