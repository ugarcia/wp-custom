<?php get_header(); ?>

<div class="ct-container ct-flex row">

	<section class="ct-posts ct-flex col">

		<?php if (have_posts()) { ?>

			<?php while(have_posts()) { ?>

				<?php the_post(); ?>

				<article class="ct-post ct-flex col">

					<div class="ct-flex row">

						<h2><?php the_title(); ?></h2>

						<p>
							by <?php the_author_posts_link(); ?> on <span><?php the_time('l F d, Y'); ?></span>
						</p>

					</div>

					<div class="ct-flex row">

						<p>Posted in: <?php the_category(', '); ?> | <?php the_tags('Tagged with: ', ', '); ?></p>

					</div>

					<?php the_content('Read More...'); ?>

				</article>

				<div class="ct-post-nav">
					<?php previous_post_link('Previous'); ?> / <?php next_post_link('Next'); ?>
				</div>

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