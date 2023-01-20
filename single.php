<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ilogic
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="il_block_bg">
			<?php
			$bg_img = get_field('background_image_large');
			$size = 'full';
			if( $bg_img ) {
				echo wp_get_attachment_image( $bg_img, $size, "",array( 'class' => 'inner_page_bg' ) );
			}
			?>
		</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() ); ?>
			<div class="post_container nav-container">
				<div class="inner_post_container">
					<?php the_post_navigation(
						array(
							'prev_text' => '',
							'next_text' => '',
						)
					); ?>
				</div>
			</div>

		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
