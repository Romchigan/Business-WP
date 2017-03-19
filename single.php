<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package business
 */

get_header(); ?>

	<div class="container margin-blog">
		<div class="row">
			<div class="col-xs-12 pl-0">
				<h2 class="heading">
					<a href="<?php echo get_page_link(2); ?>"><?php  echo get_the_title(2); ?></a>
				</h2>
			</div>
		</div>
	</div>

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_format() );


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

<?php
get_sidebar();
get_footer();
