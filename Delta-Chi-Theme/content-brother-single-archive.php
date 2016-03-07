<?php
/**
 * @package sparkling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
	<div class="brother-inner-content">
		<div class="entry-content-archive">
			<div class="brother_item">
				<h4 class="brother_name"><?php the_title(); ?></h4>
				<img src="<?php the_field('portrait'); ?>" alt="Portrait: <?php the_title(); ?>" height="350px" width="270px">
				<div class="brother_info">
					<p class="brother_year">Class of <?php the_field('graduating_year'); ?></p>
					<p class="brother_nickname">Nickname: <?php the_field('nickname'); ?></p>
				</div>
			</div>
			<?php 
				wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
			?>
		</div>
	</div>

</article><!-- #post-## -->
