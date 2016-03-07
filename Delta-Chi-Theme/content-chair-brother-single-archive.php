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
				<div class="chair_and_name">
					<?php
						$the_title = get_field('current_positions');
						if (is_array($the_title)) :
							foreach ($the_title as $value) :
								echo '<h3 class="brother_position"';
								switch ($value) {
									case 'Associate Member Counselor':
										echo ' title="';
										echo "The Associate Member Counselor educates all new members. Typically, this position is held by an older active member. He ensures that all new members are prepared for active membership upon initiation.";
										echo '">';
										break;
									case 'Big Brother Chair':
										echo ' title="';
										echo "The Big Brother Chair is responsible for pairing all new members with a big brother, a currently active member of the house. He matches new and current members based on interests and other key factors.";
										echo '">';
										break;
									case 'Sustainability Chair':
										echo ' title="';
										echo "The Sustainability Chair ensures that the chapter house is utilizing the most up-to-date techniques and technologies to reduce our carbon footprint. He encourages members to engage in sustainable practices.";
										echo '">';
										break;
									case 'Assistant Vice President':
										echo ' title="';
										echo "The Assistant Vice President positions assist the Vice President in chair management. Typically, the duties of the two AVPs will be split by internal and external operations.";
										echo '">';
										break;
									case 'Marketing/PR Chair':
										echo ' title="';
										echo "The Marketing/PR Chair maintains good public relations by monitoring the chapter's social media accounts, website, and any other public-facing media outlet.";
										echo '">';
										break;
									case 'Homecoming/Machy Days Coordinator':
										echo ' title="';
										echo "The Homecoming/Machy Days Coordinator works with the other Greek houses that Delta Chi has been paired with for the aforementioned weeks to plan events, and (hopefully) bring victory to Delta Chi in the competitions.";
										echo '">';
										break;
									case 'MSA Representative':
										echo ' title="';
										echo "The MSA Representative attends all sessions held by the Minnesota Student Association. All student groups are allowed to send a representative to the sessions, and Delta Chi takes full advantage of that by sending a representative.";
										echo '">';
										break;
									case 'Fundraising Chair':
										echo ' title="';
										echo "The Fundraising Chair researches and employs tactics to raise funds for chapter operations. Funds are typically used for brotherhood events, so that all brothers can benefit.";
										echo '">';
										break;
									case 'Intramural Sports Chair':
										echo ' title="';
										echo "The Intramural Sports Chair handles registration for all intramural leagues that the house participates in. He registers rosters and makes sure team members have what they need to bring home victory.";
										echo '">';
										break;
									case 'Pop Tsar':
										echo ' title="';
										echo "The Pop Tsar is in charge of filling the pop machine when it is empty. He returns all funds raised to the fundraising chair.";
										echo '">';
										break;
									case 'Health Advocate':
										echo ' title="';
										echo "The Health Advocate provides all members with basic health care items such as ibuprofen, band-aids, and cough medicine. He is required to complete a course that teaches him CPR and basic first aid.";
										echo '">';
										break;
									case 'Academics Chair':
										echo ' title="';
										echo "The Academics Chair is responsible for ensuring that all members of the house achieve a grade point average of at least a 2.75 (which is the requirement for active membership). He monitors study hours for at-risk members and helps them find the resources they need to succeed.";
										echo '">';
										break;
									case 'Chief of Staff':
										echo ' title="';
										echo "The Chief of Staff takes notes during the general meeting and the executive meeting on how the executive board functions as a group. Then, he provides suggestions to the executive board on how to become a more cohesive unit.";
										echo '">';
										break;
									case 'Recruitment Chair':
										echo ' title="';
										echo "The Recruitment Chair plans and hosts events for Potential New Members (PNMs) to come to the chapter house and mingle with the active members. He communicates with the active chapter about who to give out bids to. This position is vital to the continued success of the house.";
										echo '">';
										break;
									case 'Social Chair':
										echo ' title="';
										echo "The Social Chair reaches out to fraternities and sororities to plan shared events. The social chair helps to build Greek relations, and assists the Homecoming/Machy Days Coordinator in planning for those weeks.";
										echo '">';
										break;
									case 'Brotherhood Chair':
										echo ' title="';
										echo "The Brotherhood Chair plans events for all the brothers to attend. Typically, there is some sort of team-building or fun activity for the brothers to engage in. This position is vital to encouraging close friendships within the house.";
										echo '">';
										break;
									case 'Gopher Sports Chair':
										echo ' title="';
										echo "The Gopher Sports Chair monitors the success of Gropher Sports teams, and shares the results with the brothers during Monday meeting. He also plans trips to rival cities for important games.";
										echo '">';
										break;
									case 'Member Development Coordinator':
										echo ' title="';
										echo "The Member Development Coordinator develops programming meant to expand the scope of Delta Chi members. He keeps track of student group involvement, as all active members are required to be in at least one student group that is not Delta Chi.";
										echo '">';
										break;
									case 'House Operations Supervisor':
										echo ' title="';
										echo "The House Operations Supervisor is responsible for maintaining the house, distributing rooms and leases, and reporting the needs of the active chapter to the Housing Corporation.";
										echo '">';
										break;
									case 'Bylaws Chair':
										echo ' title="';
										echo "The Bylaws Chair is responsible for maintaining the chapter bylaws when changes are made during general meeting. He drafts new bylaws and presents them to the chapter for consideration.";
										echo '">';
										break;
									case 'Philanthropy Chair':
										echo ' title="';
										echo "The Philanthropy Chair is responsible for the chapter's philanthropic effots. He plans several events throughout the year to raise money for the Jimmy V Foundation for Cancer Research, and ideates on new ways to help our community.";
										echo '">';
										break;
									case 'Historian':
										echo ' title="';
										echo "The Historian keeps records of the chapter activities in the form of text, video, and photo. This position is important to maintaining the history of the house in a form that can be enjoyed by brothers for years to come.";
										echo '">';
										break;
									default:
										echo '>';
										break;
									}
								echo "$value";
								echo '</h3>';
							endforeach;
						endif;
					?>
					<h4 class="brother_name"><?php the_title(); ?></h4>
				</div>
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
