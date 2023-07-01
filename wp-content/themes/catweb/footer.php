			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container" style="padding:70px 0px 50px 0;">
					<div class="row">
						<div class="col-md-6 footer1"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1')) : ?><?php endif; ?></div>
						<div class="col-md-6 footer2"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2')) : ?><?php endif; ?></div>
					</div>
				</div>

				<!-- copyright -->
				<div class="copyright">
					<div class="container">
						<p>
						  © COPYRIGHT CODEV. ALL RIGHTS RESERVED.           
						</p>
					</div>
				</div>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->
		</main>


		<?php wp_footer(); ?>
		<!-- scripts -->
		<script src="<?php bloginfo('template_url'); ?>/js/particles.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>

		<!-- stats.js -->
		<script>
		  var count_particles, stats, update;
		  stats = new Stats;
		  stats.setMode(0);
		  stats.domElement.style.position = 'absolute';
		  stats.domElement.style.left = '0px';
		  stats.domElement.style.top = '0px';
		  document.body.appendChild(stats.domElement);
		  count_particles = document.querySelector('.js-count-particles');
		  update = function() {
		    stats.begin();
		    stats.end();
		    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
		      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
		    }
		    requestAnimationFrame(update);
		  };
		  requestAnimationFrame(update);
		</script>
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>



