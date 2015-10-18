<?php get_header(); ?>

<div class="ct-container ct-flex row edged top wrap-s ct-flex-item fit">

	<section class="ct-content ct-posts ct-flex col top fill padding-1">

		<?php if (have_posts()) { ?>

			<?php while(have_posts()) { ?>

				<?php the_post(); ?>

				<article class="ct-post ct-flex col top fill">

					<div class="ct-flex row edged middle">

						<h2>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>

						<p>
							by <?php the_author_posts_link(); ?> on <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a>
						</p>

					</div>

					<?php the_content('Read More...'); ?>

				</article>

			<?php } ?>

			<div class="ct-posts-nav">
				<?php previous_posts_link('Previous'); ?> / <?php next_posts_link('Next'); ?>
			</div>

		<?php } else { ?>

			<p><?php _e('No posts were found. Sorry!'); ?></p>

		<?php } ?>

	</section>

	<section class="ct-sidebar ct-content padding-1">
		<?php get_sidebar(); ?>
	</section>

</div>

<?php get_footer(); ?>