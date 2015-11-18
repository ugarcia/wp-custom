<?php get_header(); ?>

<div class="ct-wrapper h-center ct-flex-item fit">

        <div class="ct-container ct-flex row edged top wrap-s ct-flex-item fit">

            <section class="ct-content ct-posts ct-flex col top fill padding-1">

                <?php if (have_posts()) { ?>

                    <?php while(have_posts()) { ?>

                        <?php the_post(); ?>

                        <article class="ct-post ct-flex col top fill">

                        <div class="ct-flex row edged middle">

                            <h2><?php the_title(); ?></h2>

                            <p>
                                by <?php the_author_posts_link(); ?> on <span><?php the_time('l F d, Y'); ?></span>
                            </p>

                        </div>

                        <div class="ct-flex row edged middle">

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

        <section class="ct-sidebar ct-content padding-1">
            <?php get_sidebar(); ?>
        </section>

    </div>
</div>

<?php get_footer(); ?>