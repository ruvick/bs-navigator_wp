<?php 

/*
Template Name: Страница Услуги
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

  <section id="services" class="services-page services">
		<div class="_container">
      <?php
		  	if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
			  }
		  ?> 
			<h2 class="services__title">Наши услуги</h2>
			<div class="services__row">
        <?php $stati_children = new WP_Query(array(
		      'post_type' => 'page',
		      'order'       => 'ASC',
		      'post_parent' => get_the_ID()
	          )
          );
	      if($stati_children->have_posts()) :
		    while($stati_children->have_posts()): $stati_children->the_post();
			  echo '
          <div class="services__column">
            <a href="'.get_the_permalink().'" class="services__card">
              <div class="services__card-img">
                <picture>
                  <img src="'.get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ).'" alt="">
                </picture>
              </div>
              <div class="services__card-descp">
                <h3 class="services__card-descp-title">'.get_the_title().'</h3>
                <ul class="services__card-descp-list">
                  <li>
                    Содействие в регистрации
                    реорганизации ликвидации
                    юридических лиц
                  </li>
                  <li>Регистрация ООО</li>
                  <li>Регистрация ИП</li>
                </ul>
              </div>
            </a>
          </div>';
		    endwhile;
	      endif; wp_reset_query();
	    ?>
		  </div>

		</div>
	</section>

			<section id="action" class="action">
				<div class="_container">
					<h2 class="action__title">
						Открой свой бизнес вместе <br>
						с БизнесНавигатором
					</h2>
					<p class="action__subtitle">
						Поможем подобрать форму организации, подготовить <br>
						и подать документы в налоговую инспекцию
					</p>
					<a href="#callback" class="action__link btn _popup-link">ОТКРЫТЬ БИЗНЕС</a>
				</div>
			</section>

</main>

<?php get_footer(); 