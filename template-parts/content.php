<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ilogic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="il_inner_hero_title tg_title_1" style="color: var(--color-3);">Knowledge Center</span></h1>

	<div class="entry-content post_container">
		<div class="inner_post_container">
			<h1 class="intro_title title-style-1"><?php the_title(); ?></h1>

			<div class="il_block_bg">
				<?php
					$size = 'full';
					if ( has_post_thumbnail() ) {
						the_post_thumbnail($size, array( 'class' => 'desk_bg' ));
					}
				?>
			</div>

				<span class="date"><?php echo get_the_date(); ?></span>
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ilogic' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ilogic' ),
						'after'  => '</div>',
					)
				);
				?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
