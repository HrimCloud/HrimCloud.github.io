<?php get_header(); ?>

<!-- FEATURED BOXES SECTION -->
<?php get_template_part("includes/front-featured-boxes-section"); ?>

<!-- AWESOME PARALLAX SECTION -->
<?php get_template_part("includes/front-parallax-section"); ?>

<!-- PAGE EDITER CONTENT -->
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div id="front-content-box" class="skt-section">
			<div class="container">
				 <div class="row-fluid"> 
						<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>