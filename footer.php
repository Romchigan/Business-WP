	<footer class="wrap-footer">
		<div class="container pyramids pyramids-right">
			<div class="row">
				<div class="col-lg-4 col-sm-12">
					<img src="<?php echo get_theme_mod( 'footer_logo_images' ); ?>"  alt="logo" class="logo-footer" width="185" height="35">
					<p class="copyright">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'title' ); ?> All Rights Reserved</p>
					<div>
						<button class="btn-footer">
							<img src="<?php echo get_template_directory_uri(); ?> /img/home/footer/btn-fc.png" alt="facebook">
						</button>
						<button class="btn-footer">
							<img src="<?php echo get_template_directory_uri(); ?> /img/home/footer/btn-g.png" alt="google">
						</button>
						<button class="btn-footer">
							<img src="<?php echo get_template_directory_uri(); ?> /img/home/footer/btn-tw.png" alt="twitter">
						</button>
						<button class="btn-footer">
							<img src="<?php echo get_template_directory_uri(); ?> /img/home/footer/btn-in.png" alt="inst">
						</button>
					</div>
				</div>
				<div class="col-lg-3 col-sm-10">
					<nav>
						<h2 class="heading-nav">Navigation</h2>
						<?php wp_nav_menu( array(
								'theme_location' => 'Footer-menu',
								'container'      => '',
								'menu_class'     => 'navigations',
								'menu_id'        => '',
								'link_before'    => '<i class="fa fa-caret-right"></i>',
						) );
						?>
					</nav>
				</div>
				<div class="col-lg-5 col-sm-10 contact-us pr-0">
					<h2 class="head-form">Quick Contact Us</h2>
					<form class="f-footer">
						<ul class="row mb-0">
							<li class="col-xs-6 pr-0">
								<label class="sr-only" for="name-f"></label>
								<input type="text" class="form-control input-footer" id="name-f" placeholder="Name *">
							</li>
							<li class="col-xs-6 pl-0">
								<label class="sr-only" for="email-f"></label>
								<input type="email" class="form-control input-footer" id="email-f" placeholder="Email *">
							</li>
						</ul>
						<textarea class="form-control textarea" rows="4"  placeholder="Comment *"></textarea>
						<button type="submit" class="btn  btn-submit margin-submit-footer">Submit now</button>
					</form>
				</div>
			</div>
		</div>
	</footer>



	<?php wp_footer(); ?>

</body>
</html>