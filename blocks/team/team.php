<?php

$bg_color = get_field('background_color');
$bg_img = get_field('background_image');

$margin = get_field_object('margin');
$padding = get_field_object('padding');


$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class = 'il_block team';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if ( ! empty( $cols ) ) {
    $class .=  ' ' . $cols['value'];
}
if ( ! empty( $tab_cols ) ) {
    $class .=  ' ' . $tab_cols['value'];
}
if ( ! empty( $mob_cols ) ) {
    $class .=  ' ' . $mob_cols['value'];
}
if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$member_class = 'member';
if ( ! empty( $block['className'] ) ) {
    $member_class .= ' ' . $block['className'];
}

 ?>
<div <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="il_team_inner container">
	<?php if( have_rows('info_box') ): ?>
		<?php while( have_rows('info_box') ): the_row();
			$title = get_sub_field('title');
			$tag = get_sub_field('heading_tag');
			$title_color = get_sub_field('title_color');
			$title_style = get_sub_field('title_style');
			?>

			<div class="il_team_content">
				<<?php echo esc_html($tag); ?> class="il_section_title tg_title_1 <?php echo $title_style; ?>" style="color: <?php echo $title_color; ?>;"><?php echo $title; ?></<?php echo esc_html($tag); ?>>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>
<?php
	if ( have_rows('team_row') ) :
	while( have_rows('team_row') ) : the_row();
	if ( have_rows('member') ) : ?>

		<div class="il_team_row">
			<?php $item=1; ?>
			<?php while( have_rows('member') ) : the_row();
				$image = get_sub_field('image');
				$size = 'full';
				$name = get_sub_field('name');
				$description = get_sub_field('description');
				$position = get_sub_field('position');
				?>
					<div class="il_team_member il_member_<?php echo $item; ?>">
						<?php if( $image ) { ?>
							<figure class="member_image">
								<?php echo wp_get_attachment_image( $image, $size ); ?>
							</figure>
						<?php } ?>
						<h4 class="member_name"><svg id="Group_2794" data-name="Group 2794" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20.939" height="20.939" viewBox="0 0 20.939 20.939">
  <defs>
    <clipPath id="clip-path">
      <rect id="Rectangle_1113" data-name="Rectangle 1113" width="20.939" height="20.939" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-3">
      <rect id="Rectangle_1109" data-name="Rectangle 1109" width="20.937" height="20.938" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-4">
      <rect id="Rectangle_1110" data-name="Rectangle 1110" width="18.713" height="6.033" fill="none"/>
    </clipPath>
    <clipPath id="clip-path-5">
      <rect id="Rectangle_1111" data-name="Rectangle 1111" width="6.033" height="18.713" fill="none"/>
    </clipPath>
  </defs>
  <g id="Group_2687" data-name="Group 2687" clip-path="url(#clip-path)">
    <g id="Group_2686" data-name="Group 2686" transform="translate(0 0)">
      <g id="Group_2685" data-name="Group 2685" clip-path="url(#clip-path)">
        <g id="Group_2678" data-name="Group 2678" transform="translate(0.002 0)" style="mix-blend-mode: multiply;isolation: isolate">
          <g id="Group_2677" data-name="Group 2677">
            <g id="Group_2676" data-name="Group 2676" clip-path="url(#clip-path-3)">
              <path id="Path_1715" data-name="Path 1715" d="M5.154,20.051l14.9-14.9C22.8,2.406,18.535-1.861,15.785.889l-14.9,14.9C-1.861,18.534,2.4,22.8,5.154,20.051" transform="translate(-0.001 -0.001)" fill="#4274d3"/>
            </g>
          </g>
        </g>
        <g id="Group_2681" data-name="Group 2681" transform="translate(2.119 0.004)" style="mix-blend-mode: multiply;isolation: isolate">
          <g id="Group_2680" data-name="Group 2680">
            <g id="Group_2679" data-name="Group 2679" clip-path="url(#clip-path-4)">
              <path id="Path_1716" data-name="Path 1716" d="M3.02,20.855H15.905c3.882,0,3.888-6.033,0-6.033H3.02c-3.882,0-3.888,6.033,0,6.033" transform="translate(-0.106 -14.822)" fill="#00dcba"/>
            </g>
          </g>
        </g>
        <g id="Group_2684" data-name="Group 2684" transform="translate(14.903 0.107)" style="mix-blend-mode: multiply;isolation: isolate">
          <g id="Group_2683" data-name="Group 2683">
            <g id="Group_2682" data-name="Group 2682" clip-path="url(#clip-path-5)">
              <path id="Path_1717" data-name="Path 1717" d="M6.037,17.907V5.022C6.037,1.14,0,1.134,0,5.022V17.907c0,3.882,6.033,3.888,6.033,0" transform="translate(-0.004 -2.108)" fill="#00dcba"/>
            </g>
          </g>
        </g>
        <path id="Path_1718" data-name="Path 1718" d="M14.815,3.022a3.022,3.022,0,1,1,3.022,3.022,3.023,3.023,0,0,1-3.022-3.022" transform="translate(-14.815 14.894)" fill="#2c51c6"/>
      </g>
    </g>
  </g>
</svg>
<?php echo $name; ?></h4>
						<span class="member_position"><?php echo $position ?></span>
					</div>
					<div class="member_text member_text_<?php echo $item; ?>">
						<div class="member_text_inner">
						<span class="close"><svg id="x" xmlns="http://www.w3.org/2000/svg" width="17.659" height="17.659" viewBox="0 0 17.659 17.659"><g id="Group_195" data-name="Group 195"><path id="Path_319" data-name="Path 319" d="M10.3,8.834l7.056-7.056A1.039,1.039,0,0,0,15.886.309L8.83,7.365,1.773.309A1.039,1.039,0,0,0,.3,1.777L7.361,8.834.3,15.89a1.039,1.039,0,1,0,1.469,1.469L8.83,10.3l7.056,7.056a1.039,1.039,0,0,0,1.469-1.469Z" transform="translate(0 -0.004)" fill="#fff"/></g></svg></span>
							<h2 class="member_box_name tg_title_1 tg_light"><?php echo $name; ?></h2>
							<div class="member_description"><?php echo $description; ?></div>
						</div>
					</div>
					<?php $item++;?>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
</div>
</div>
