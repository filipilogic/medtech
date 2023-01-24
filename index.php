<?php

get_header();
?>

	<main id="primary" class="site-main">
		<div class="il_block_bg">
			<?php
			$post_id = 1377;
			$bg_img = get_field('background_image_large', $post_id);
			$size = 'full';
			if( $bg_img ) {
				echo wp_get_attachment_image( $bg_img, $size, "",array( 'class' => 'inner_page_bg' ) );
			}
			?>
		</div>
		<div class="container">
		
		<h1 class="il_inner_hero_title tg_title_1" style="color: var(--color-3);">Knowledge Center</span></h1>

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
                    <div class="il_blog_post">
						<div class="il_bp_left">
						<a class="il_bp_title" href="<?php echo get_permalink(get_the_ID()) ?>"><h2 class="tg_title_1 tg_dark"><?php the_title(); ?><?php ?></h2></a>
							<span class="date"><?php echo get_the_date(); ?></span>
							<div class="il_bp_text">
							<?php if (get_the_excerpt()) {
								echo get_the_excerpt();
							} else {
								echo wp_trim_words(get_the_content(), 25);
							} ?>
						</div>
						<a class="il_btn" href="<?php echo get_permalink(get_the_ID()) ?>"><span class="il_btn_text">Read More</span><span class="il_btn_icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="15.437" viewBox="0 0 18 15.437"><path id="Path_1722" data-name="Path 1722" d="M1.082,40.824a1.286,1.286,0,0,0,.223.016H14l-.277.129a2.576,2.576,0,0,0-.728.515L9.437,45.045a1.333,1.333,0,0,0-.187,1.706,1.288,1.288,0,0,0,1.932.167l6.439-6.439a1.288,1.288,0,0,0,0-1.821h0l-6.439-6.439a1.288,1.288,0,0,0-1.932.129,1.333,1.333,0,0,0,.187,1.706l3.555,3.567a2.576,2.576,0,0,0,.644.47l.386.174H1.375A1.333,1.333,0,0,0,.017,39.346,1.288,1.288,0,0,0,1.082,40.824Z" transform="translate(0 -31.842)" fill="#00ddbd"/></svg></span></a>
						</div>
						<div class="il_bp_right">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>

			<?php endwhile;

			the_posts_navigation();

		endif;
		?>
		</div>

	</main><!-- #main -->

<?php
get_footer();
