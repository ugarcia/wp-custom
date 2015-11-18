<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<div class="ct-wrapper h-center ct-flex-item fit">

    <div class="ct-container ct-flex row edged top wrap-s ct-flex-item fit">

        <section class="ct-content ct-archive ct-flex col top fill padding-1">

            <div class="ct-archive-by-date">
                <h2>Archives by Date:</h2>
                <ul>
                    <?php wp_get_archives('type=postbypost'); ?>
                </ul>
            </div>

            <div class="ct-archive-by-category">
                <h2>Archives by Category:</h2>
                <ul>
                    <?php wp_list_categories('hierarchical=0&title_li='); ?>
                </ul>
            </div>

        </section>

        <section class="ct-sidebar ct-content padding-1">
            <?php get_sidebar(); ?>
        </section>

    </div>
</div>

<?php get_footer(); ?>