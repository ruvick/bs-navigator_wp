<?php 

/*
Template Name: Страница Услуга
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<?php 
		$banner = wp_get_attachment_image_src( carbon_get_the_post_meta('banner_page'), 'full')[0];
			if(empty($banner)) {
		$banner = get_template_directory_uri() . '/img/service-bg-01.jpg';
	} 
?>

<section id="banner" class="banner" style="background-image: url(<?php echo $banner?>);">
  <div class="_container">
    <h1 class="banner__title"><? the_title();?></h1>
  </div>
</section>

<section id="descript" class="descript">
  <div class="_container text_blk">
    <?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
			}
		?> 
    <?php the_content(); ?>
  </div>
</section>

</main>

<?php get_footer(); 