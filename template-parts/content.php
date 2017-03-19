<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package business
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container wrap-blog">
		<header>
			<div class="row">
				<div class="col-xs-1">
					<img src="<?php echo get_theme_mod( 'admin_images' ); ?> ?>" alt="admin-photo" class="admin-photo">
				</div>
				<div class="col-xs-11">
					<h1 class="blog-heading">
						<?php
             the_title( '<h1 class="blog-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            ?>
					</h1>
					<div class="info-posted">
						Posted by: <?php the_author(); ?>, <?php the_time('F- j- Y'); ?>

					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="row">
				<div class="col-xs-11 offset-xs-1">
					<div class="info-blog">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<?php the_content(); ?>
						</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="row flex-items-xs-between">
				<div class="col-lg-5 col-sm-12 offset-xs-1 wrap-btn-social">
            <span>
              Share:
            </span>
					<div class="social">
						<a class="facebookBtn smGlobalBtn" href="https://www.facebook.com/" ></a>
						<a class="twitterBtn smGlobalBtn" href="https://twitter.com/" ></a>
						<a class="googleplusBtn smGlobalBtn" href="https://plus.google.com/?hl=ru" ></a>
					</div>
				</div>
				<div class="col-xs-6 text-xs-right">
					<a class="btn btn-orange margin-btn-read" href="<?php echo get_permalink(); ?>">Read more</a>
				</div>
			</div>
		</footer>
	</div>
</article>