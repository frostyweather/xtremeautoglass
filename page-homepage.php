<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php include (TEMPLATEPATH . '/inc/hero.php');  ?>
		<div class="l-container">
			<?php the_content() ?>
		</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
