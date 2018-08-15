<?php
/*
 * Template Name: Photo Gallery
*/

get_header('page'); ?>

<?php get_sidebar('banner');?>
<header class="post page-content">
	<h1><?php echo get_the_title();?></h1>
</header>
<?php if(have_posts()){
	the_post();?>
<article class="post <?php echo $post->post_name;?>">
	<?php the_content();?>
</article>


<section class="photo-gallery">
	<?php 

	$gallery = get_field('gallery');

	foreach ( $gallery as $image ) { 

		// echo '<pre>';
		// print_r($image);
		// echo '</pre>';

		?>
		<div class="gal-thumb">
			<a class="gallery" href="<?php echo $image['url']; ?>">
				<img src="<?php echo $image['sizes']['medium']; ?>">
			</a>
			
		</div>
	<?php }
	 ?>
</section>


<?php }
get_footer('page'); ?>