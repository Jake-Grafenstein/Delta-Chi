<?php
/*
 *
Template Name: Brother Archives
*/
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkling
 */

get_header(); ?>
	<style type="text/css" scoped>
		.col-md-8 {
			width:100%;
			background:#fff;
			border:1px solid #dadada;
		}
	</style>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">Brothers</h1>
			</header><!-- .page-header -->

			<div class="brother-main-content">
 				<?php
 					$args = array(
 						'posts_per_page' => -1,
 						'post_type' => 'brother',
 						'member_type'=> 'exec-board',
 						'post_status' => 'publish',
 					);
 					$my_query = get_posts($args);

 					foreach ($my_query as $post):
						$execField = get_field_object('executive_board_positions');
						$execValue = get_field('executive_board_positions');
						if ($execValue == 'President') {
							$myExecFields[0] = $post;
						} else if ($execValue == 'Vice President') {
							$myExecFields[1] = $post;
						} else if ($execValue == 'Secretary') {
							$myExecFields[2] = $post;
						} else if ($execValue == 'Treasurer') {
							$myExecFields[3] = $post;
						} else if ($execValue == 'Alumni Secretary') {
							$myExecFields[4] = $post;
						} else if ($execValue == 'Sargeant at Arms') {
							$myExecFields[5] = $post;
						}
					endforeach; ?>
				<h2 class="brother-heading">Current Executive Board</h2>
				<ul class="brother-list">
					<?php
					for($i=0;$i<6;$i++) {
						$post = $myExecFields[$i];
						setup_postdata($post) ?>
						<li class="individual-posts">
							<?php get_template_part( 'content-exec-brother-single-archive', get_post_format() ); //calls content-employee-single-archive.php
							?>
						</li>
						<?php wp_reset_postdata(); ?>
					<?php
					}
					?>
				</ul>
				<?php
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'brother',
						'member_type' => 'chair-position',
						'post_status' => 'publish',
						'orderby'	=> 'title',
						'order'	=> 'ASC',
					);
					$chair_query = get_posts($args);
				?>
			</div>
		<hr>
			<div class="brother-main-content">
				<h2 class="brother-heading">Chair Positions</h2>
				<ul class="brother-list">
					<?php
						foreach($chair_query as $post) : setup_postdata($post) ?>
							<li class="individual-posts">
								<?php get_template_part( 'content-chair-brother-single-archive', get_post_format() ); //calls content-employee-single-archive.php
								?>
							</li>
							<?php wp_reset_postdata(); ?>
						<?php endforeach;
					?>
				</ul>
				<?php $args = array(
					'posts_per_page' => -1,
					'post_type' => 'brother',
					'member_type' => 'non-exec',
					'post_status' => 'publish',
					'orderby' => 'title',
					'order' => 'ASC',
					);
					$regular_query = get_posts($args);
				?>
			</div>
		<hr>
			<div class="brother-main-content">
				<h2 class="brother-heading">Members</h2>
				<ul class="brother-list">
					<?php
						foreach($regular_query as $post) : setup_postdata($post) ?>
							<li class="individual-posts">
								<?php get_template_part( 'content-brother-single-archive', get_post_format() ); //calls content-employee-single-archive.php
								?>
							</li>
							<?php wp_reset_postdata(); ?>
						<?php endforeach;
					?>
				</ul>
				<?php $args = array(
					'posts_per_page' => -1,
					'post_type' => 'brother',
					'member_type' => 'associate-members',
					'post_status' => 'publish',
					'orderby'	=> 'title',
					'order'	=> 'ASC',
					);
					$regular_query = get_posts($args);
				?>
			</div>
			<?php if (!empty($regular_query)) : ?>
				<hr id="associate">
				<div class="associate-member-content">
					<h2 class="brother-heading" >Associate Members</h2>
					<ul class="brother-list">
						<?php
							foreach($regular_query as $post) : setup_postdata($post) ?>
								<li class="individual-posts">
									<?php get_template_part( 'content-brother-single-archive', get_post_format() ); //calls content-employee-single-archive.php
									?>
								</li>
								<?php wp_reset_postdata(); ?>
							<?php endforeach;
						?>
					</ul>
				</div>
			<?php endif; ?>
		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
