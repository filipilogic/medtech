<?php
if( have_rows('buttons') ): ?>
	<div class="il_buttons">
		<?php while( have_rows('buttons') ) : the_row();

			$button = get_sub_field('button');
			if( $button ):
				$button_url = $button['url'];
				$button_title = $button['title'];
				$button_target = $button['target'] ? $button['target'] : '_self';
				?>
				<a class="il_btn" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><span class="il_btn_text"><?php echo esc_html( $button_title ); ?></span></a>
			<?php endif;

		endwhile; ?>
	</div>
<?php endif; ?>
