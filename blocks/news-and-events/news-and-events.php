<?php

$class = 'il_block il_news-and-events';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

?>


<div class="<?php echo $class; ?>">
<?php get_template_part('components/background'); ?>
<div class="il_news-and-events_inner">
	<div class="il_block_intro">
		<svg xmlns="http://www.w3.org/2000/svg" width="48" height="47" viewBox="0 0 48 47">  <ellipse id="Ellipse_13" data-name="Ellipse 13" cx="24" cy="23.5" rx="24" ry="23.5" fill="#5e0ff4"/></svg>
		<?php get_template_part('components/title'); ?>
	</div>
	<div class="home-blog-posts container">
        <?php
            // setup query to get 3 latest posts
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                );
                $query = new WP_Query( $args );
                // loop through the posts
                if( $query->have_posts() ) :
                    while( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="home-blog-post">
							<?php the_post_thumbnail(); ?>
                            <div class="post-content">
                            	<h3><a href="<?php the_permalink(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 69, '...'); ?></a></h3>
								<a class="il_btn" href="<?php echo get_permalink(get_the_ID()) ?>"><span class="il_btn_text">Read More</span><span class="il_btn_icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="15.437" viewBox="0 0 18 15.437"><path id="Path_1722" data-name="Path 1722" d="M1.082,40.824a1.286,1.286,0,0,0,.223.016H14l-.277.129a2.576,2.576,0,0,0-.728.515L9.437,45.045a1.333,1.333,0,0,0-.187,1.706,1.288,1.288,0,0,0,1.932.167l6.439-6.439a1.288,1.288,0,0,0,0-1.821h0l-6.439-6.439a1.288,1.288,0,0,0-1.932.129,1.333,1.333,0,0,0,.187,1.706l3.555,3.567a2.576,2.576,0,0,0,.644.47l.386.174H1.375A1.333,1.333,0,0,0,.017,39.346,1.288,1.288,0,0,0,1.082,40.824Z" transform="translate(0 -31.842)" fill="#00ddbd"/></svg></span></a>
                            </div>
                        </div>
                    <?php endwhile;
            	endif;
        wp_reset_postdata(); ?>
    </div>
</div>
</div>