<?php /* Template Name: WPBeginnerT1 */ ?>
<?php get_header(); ?>


			
			
					<div class="content-block">						
						<div class="content3" id="product">
							<div class="container">
								<div class="row">
								<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('content3')) : ?><?php endif; ?>
								</div>
							</div>
						</div>
						<div class="content4" id="gallery">
							<div class="container">
								<div class="row">
								<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('content4')) : ?><?php endif; ?>
								</div>
							</div>
						</div>
						<div class="content1" id="about">
							<div class="container">
								<div class="row">
								<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('content1')) : ?><?php endif; ?>
								</div>
							</div>
						</div>
						<div class="content2" id="contact">
							<div class="container">
								<div class="row">
								<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('content2')) : ?><?php endif; ?>
								</div>
							</div>
						</div>
						
					</div>
					<?php get_footer(); ?>
				



<?php get_sidebar(); ?>


