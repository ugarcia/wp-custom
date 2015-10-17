<aside class="ct-flex col spaced left">

	<?php if (!function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Primary Sidebar') ) { ?>

		<?php get_search_form(); ?>

	<?php } ?>

</aside>