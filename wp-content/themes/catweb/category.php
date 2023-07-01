<?php get_header(); ?>
	<header class="content-header">
		<div class="content-header-content-background-container background-parallax" data-stellar-background-ratio="0.1">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('header-img')) : ?><?php endif; ?>
		</div>

		<div class="content-header-overlay"></div>
		<div class="content-header-content">

	        <div class="container">
	        	<h1><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
	        </div>

		</div>
	</header>
	<div class="content-block content-inner">
		<div class="container">


			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
	</div>

<?php get_footer(); ?>
