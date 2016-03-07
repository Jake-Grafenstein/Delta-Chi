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
				<h3 class="brother_position" 
					<?php 
						$the_title = get_field('executive_board_positions');
						switch ($the_title) {
							case 'President':
								echo 'title="';
								echo "The President's primary function is to serve as the liaison between the active chapter and all outside institutions including, but not limited to, the Interfraternity Council (IFC), the Alumni Board of Trustees, Delta Chi HeadQuarters, and the Twin Cities Delta Chi Alumni Chapter.";
								echo '">';
								break;
							case 'Vice President':
								echo 'title="';
								echo "The Vice President primarily oversees all Chair Positions. With the assistance of the two Assistant Vice Presidents, the VP manages the activities of each Chair and provides assistance wherever necessary.";
								echo '">';
								break;
							case 'Secretary':
								echo 'title="';
								echo "The Secretary is in charge of submitting all relevant reports to Delta Chi headquarters. Such reports include Personal Record forms, Chapter Meeting Reports, and election results. He also submits awards packets to Delta Chi HQ to be considered for international fraternity awards.";
								echo '">';
								break;
							case 'Treasurer':
								echo 'title="';
								echo "The Treasurer handles the finances of the house, including dues collection and fund disbursements. At the beginning of every calendar year, the treasurer submits a budget to the house for consideration, which is the voted on. After approval, the treasurer disburses the funds as needed.";
								echo '">';
								break;
							case 'Alumni Secretary':
								echo 'title="';
								echo "The Alumni Secretary is the primary liaison between the active chapter and alumni. He is in charge of sending out the quarterly newsletter, the Delt, and planning alumni events throughout the year.";
								echo '">';
								break;
							case 'Sargeant at Arms':
								echo 'title="';
								echo "The Sargeant at Arms is the house's risk management officer. He is responsible for reading and understanding the fraternity's insurance policy and monitoring the behavior of the active chapter to ensure that it complies with the policy. He also maintains the order at meetings and oversees general security of the house.";
								echo '">';
								break;
							default:
								echo '>';
								break;
						} ?>
					<?php the_field('executive_board_positions'); ?>
				</h3>
				<h4 class="brother_name"><?php the_title(); ?></h4>
				<img src="<?php the_field('portrait'); ?>" alt="Portrait: <?php the_title(); ?>" height="350px" width="270px">
				<div class="brother_info">
					<p class="brother_year">Class of <?php the_field('graduating_year'); ?></p>
					<p class="brother_nickname">Nickname: <?php the_field('nickname'); ?></p>
					<?php if(get_field('current_positions') != null) : ?>
						<p class="brother_position">Current Position: <?php the_field('current_positions'); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<?php 
				wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
			?>
		</div>
	</div>

</article><!-- #post-## -->
