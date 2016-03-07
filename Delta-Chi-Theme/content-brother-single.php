<?php
/**
 * @package sparkling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
	<div class="post-inner-content">
		<div class="entry-content">
			<div class="brother_bio">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before'            => '<div class="page-links">'.esc_html__( 'Pages:', 'sparkling' ),
						'after'             => '</div>',
						'link_before'       => '<span>',
						'link_after'        => '</span>',
						'pagelink'          => '%',
						'echo'              => 1
		       		) );
		    	?>
		    </div>
		    <div class="brother_info">
		    	<img src="<?php the_field('portrait'); ?>" alt="Portrait: <?php the_title(); ?>" height="230px" width="200px">
		    	<p><?php the_title(); ?></p>
		    	<?php if (get_field('position')) {
		    		echo '<p>';
		    		the_field('position'); 
		    		echo '</p>'; 
		    	} ?>
		    	<p>Class of <?php the_field('graduating_year'); ?></p>
		    	<p>Nickname: <?php the_field('nickname'); ?></p>
		    </div>

		</div><!-- .entry-content -->

		<footer class="entry-meta">

	    	<?php if(has_tag()) : ?>
	      <!-- tags -->
	      <div class="tagcloud">

	          <?php
	              $tags = get_the_tags(get_the_ID());
	              foreach($tags as $tag){
	                  echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a> ';
	              } ?>

	      </div>
	      <!-- end tags -->
	      <?php endif; ?>

		</footer><!-- .entry-meta -->
	</div>

	<?php if (get_the_author_meta('description')) :  ?>
		<div class="post-inner-content secondary-content-box">
      <!-- author bio -->
      <div class="author-bio content-box-inner">

        <!-- avatar -->
        <div class="avatar">
            <?php echo get_avatar(get_the_author_meta('ID') , '60'); ?>
        </div>
        <!-- end avatar -->

        <!-- user bio -->
        <div class="author-bio-content">

          <h4 class="author-name"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author_meta('display_name'); ?></a></h4>
          <p class="author-description">
              <?php echo get_the_author_meta('description'); ?>
          </p>

        </div><!-- end .author-bio-content -->

      </div><!-- end .author-bio  -->

		</div>
		<?php endif; ?>

</article><!-- #post-## -->
