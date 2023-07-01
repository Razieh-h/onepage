<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" />
        <script src="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
        <script src="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/animate.css" />
        <link  rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hover.css" media="all">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <script>
			$(document).ready(function(){
			$('.modal-wrapper').addClass("close");
			$('.main-header-navigation-toggle').click(function() {
            var $this = $('.modal-wrapper')
                if ($this.hasClass("close")) {
                    $this.removeClass("close").addClass("open"); 
                    $('.main-header-navigation-toggle').addClass("active");   
                    $('.fixed-content-header__contact').addClass("disap");                    
            	}
            	else{
            		$this.removeClass("open").addClass("close");
            		$('.main-header-navigation-toggle').removeClass("active"); 
            		$('.fixed-content-header__contact').removeClass("disap");
            	}
                });	
			$('.modal-item a').click(function() {
				$('.modal-wrapper').removeClass("open"); 
				$('.modal-wrapper').addClass("close");
				$('.main-header-navigation-toggle').removeClass("active"); 
			});
			$('.fixed-content-paging li:nth-child(1) a').addClass("wwid");
			$('.widget_nav_menu li a').click(function(){
			    $('.widget_nav_menu li a').removeClass("wwid");
			    $(this).addClass("wwid");
			});
			
		});
		</script>
		<script type="text/javascript">
		jQuery("document").ready(function($){    
		    var nav = $('#header-bottom');
		    
		    $(window).scroll(function () {
		        if ($(this).scrollTop() > 100) {
		            nav.addClass("menumain");
		        } else {
		            nav.removeClass("menumain");
		        }
		    });
		});
		</script>
		<script type="text/javascript">
		$(document).ready(function(){
			$(".content3 li.cat-post-item").addClass("col-md-3 col-sm-6");
			});
		</script>
	</head>
	<body <?php body_class(); ?>>

		<main class="ui-wrapper" id="home">
			<div class="main-header-wrapper">
               <!-- header -->
				<header class="fixed-content-header main-header" id="header-bottom">
					<div class="flex flex--center">
						<span class="main-header-navigation-toggle">
	                    	<i class="main-header-navigation-icon">
	                    		<i class="main-header-navigation-icon-item"></i>
	                    	</i>
	                    </span>
						<div class="fixed-content-header__logo">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('logo') ) : ?><?php endif; ?>
						</div>
						<div class="flag">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('flag') ) : ?><?php endif; ?>
						</div>
					</div>
					
					<div class="fixed-content-header__contact button button--primary">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('head-contact') ) : ?><?php endif; ?>
					</div>
					
				</header>
				<!-- /header --> 
            </div>
			<div class="modal-wrapper">
				<div class="modal-item">
					<div class="modal-item-content">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main-menu') ) : ?><?php endif; ?>
					</div>
				</div>
			</div>
			<div class="fixed-content-paging">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('second-menu') ) : ?><?php endif; ?>
			</div>

		
			
		
					

