<?php
/*
Template Name: Front
*/
get_header(); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<header class="hero-section content-wrap" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
				<div class="hero-header page-content">
					<h1><?php the_field('hero_headline');?></h1>
				</div>
				<div class="hero-subhead">
					<?php the_field('hero_subheadline');?>
				</div>
				<div class="hero-tag">
					<h2><?php the_field('hero_tagline')?></h2>
				</div>
			</header>
			<div class="page-content content-wrap">
				<div>
					<?php if( have_posts() ) {
						while( have_posts() ) {
						the_post();
							the_content();
						}
						} ?>
				</div>
			</div>
			<div class="callout-section content-wrap">
				<div class="callout-quote">
					<h3><?php the_field('callout_quote')?></h3>
				</div>
				<div class="callout-author">
					<?php the_field('callout_quote_author')?>
				</div>
			</div>

			<div class="bullet-section content-wrap">
				<div class="bullet-wrap">
					<div class="bullet-header">
						<?php 
						$bullet = get_field('bullet_section');
						echo $bullet['bullet_left_header'];
						?>	
					</div>
					<div class="bullet-content">
						<?php echo $bullet['bullet_right_content'];?>	
					</div>
				</div>
				<div class="bullet-wrap">
					<div class="bullet-header">
						<?php 
						$bullet = get_field('bullet_section_2');
						echo $bullet['bullet_left_header_2'];
						?>	
					</div>
					<div class="bullet-content">
						<?php echo $bullet['bullet_middle_content'];?>	
					</div>
					<div class="bullet-content">
						<?php echo $bullet['bullet_right_content_2'];?>	
					</div>
				</div>
			</div>
			<div class="leadership-section content-wrap">
			<h2>Leadership</h2>
				<div class="leader-flex">
					<div class="leader-left">
						<div class="leader-image">
							<img src="<?php $leader = get_field('leadership_section');
							 echo $leader['leader_image'];?>">
						</div>
					</div>
					<div class="leader-right">
						<div class="leader-name">
							<?php echo $leader['leader_name'];?>
						</div>
						<div class="leader-title">
							<?php echo $leader['leader_title'];?>
						</div>
						<div class="leader-bio">
							<?php echo $leader['leader_bio'];?>
						</div>
						<div class="social-wrap">
							<div class="isearch">
								<?php echo $leader['leader_isearch'];?>
							</div>
							<div class="linkedin">
								<?php echo $leader['leader_linkedin'];?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="news-wrap content-wrap">
				<?php

				// The Query
				$args = array(
					'category_name' => 'news'
				);
				$the_query = new WP_Query( $args );
				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();?>
						<div class="news-post">
						<h3><?php the_title(); ?></h3>
						<div class="news-info">
						<?php the_author() . the_date();?>
						<p><?php the_excerpt(); ?></p>
						</div><?php
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				} else {
					// no posts found
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
