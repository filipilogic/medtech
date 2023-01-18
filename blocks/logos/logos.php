<?php
if ( have_rows('images') ) :

$learn_more = get_field('learn_more');

$cols = get_field_object('columns');
$tab_cols = get_field_object('tab_columns');
$mob_cols = get_field_object('mob_columns');

$margin = get_field_object('margin');
$padding = get_field_object('padding');

$style = get_field('style');


$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class = 'il_block il_logos';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}

if ( ! empty( $padding ) ) {
    $class .=  ' ' . $padding['value'];
}

if ( ! empty( $style ) ) {
    $class .=  ' ' . $style;
}


 ?>
<div <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="container">
		<?php get_template_part('components/intro'); ?>
		<div class="il_logos_inner">
			<?php while( have_rows('images') ) : the_row();
				$image = get_sub_field('image');

				$url = $image['url'];
				$title = $image['title'];
				$alt = $image['alt'];
				$caption = $image['caption']; ?>
				<div class="column">
					<figure class="il_logo">
						<img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
					</figure>
				</div>
			<?php endwhile; ?>
		</div>
			<div class="column btn_column">
			<?php if( $learn_more ):
			$learn_more_url = $learn_more['url'];
			$learn_more_title = $learn_more['title'];
			$learn_more_target = $learn_more['target'] ? $learn_more['target'] : '_self';
			?>
			<a class="il_btn" href="<?php echo esc_url( $learn_more_url ); ?>" target="<?php echo esc_attr( $learn_more_target ); ?>"><span class="il_btn_text"><?php echo esc_html( $learn_more_title ); ?></span><span class="il_btn_icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="15.437" viewBox="0 0 18 15.437"><path id="Path_1722" data-name="Path 1722" d="M1.082,40.824a1.286,1.286,0,0,0,.223.016H14l-.277.129a2.576,2.576,0,0,0-.728.515L9.437,45.045a1.333,1.333,0,0,0-.187,1.706,1.288,1.288,0,0,0,1.932.167l6.439-6.439a1.288,1.288,0,0,0,0-1.821h0l-6.439-6.439a1.288,1.288,0,0,0-1.932.129,1.333,1.333,0,0,0,.187,1.706l3.555,3.567a2.576,2.576,0,0,0,.644.47l.386.174H1.375A1.333,1.333,0,0,0,.017,39.346,1.288,1.288,0,0,0,1.082,40.824Z" transform="translate(0 -31.842)" fill="#00ddbd"/></svg></span></a>
			<?php endif; ?>
			</div>
	</div>
</div>
<?php endif; ?>
