<?php 
/*
 * The template for the Home page
 */
?>

<?php get_header(); ?>

<?php 
$query = new WP_Query(
	$args = array(
		'post_type' => 'photo',
		'posts_per_page' => 1,
		'orderby' => 'rand',
	)
); 
while ($query->have_posts()) : $query->the_post(); ?>
	<div class= "hero-home">
	<div class= "hero-photo">
	<?php the_post_thumbnail('full'); ?>
	</div>
	<div class= "hero-title">
		<h1>PHOTOGRAPHE EVENT</h1>
	</div>
	<? wp_reset_postdata(); ?>
	<?php 
endwhile; ?> 
</div>
<?php get_footer(); ?>
