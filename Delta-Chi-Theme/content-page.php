<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sparkling
 */
?>


<div class="post-inner-content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $my_post = get_post(); 
		$homepage = is_front_page();		
	?>
	<header class="entry-header page-header" <?php if ($homepage) { echo 'style="border-bottom:none;margin:0;padding:0;"'; } ?>>
		<?php if (!($homepage)) { ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php } ?>
		<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sparkling' ),
				'after'  => '</div>',
			) );
		?>
    <?php
      // Checks if this is homepage to enable homepage widgets
      if ( is_front_page() ) :
        get_sidebar( 'home' );
      endif;
    ?>
	<div id="social-media-icons" class="social-media-icons">
				<ul>
					<li><a href="https://www.facebook.com/umndeltachi" title="Facebook UMN Delta Chi" class="facebook" style="position:relative;"><img src="/wp-content/uploads/2015/08/facebook.png" alt="Facebook UMN Delta Chi Icon" width="50px" height="50px" /></a></li>
					<li><a href="https://twitter.com/umndeltachi" title="Twitter UMN Delta Chi"  class="twitter"><img src="/wp-content/uploads/2015/08/twitter.png" alt="Twitter UMN Delta Chi Icon" width="50px" height="50px" /></a></li>
					<li><a href="https://www.linkedin.com/company/the-delta-chi-fraternity-inc." title="LinkedIn Delta Chi" class="linkedin"><img src="/wp-content/uploads/2015/08/linkedin.png" alt="LinkedIn UMN Delta Chi Icon" width="50px" height="50px" /></a></li>
				</ul>
			</div>
	</div><!-- .entry-content -->
	<?php edit_post_link( esc_html__( 'Edit', 'sparkling' ), '<footer class="entry-footer"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
</div>