<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

			<section id="slider-main" class="slider-main">
				<div class="slider-bg-wrap">
					<div class="slider-bg _swiper">
					<?
						$pict = carbon_get_theme_option('slider_index');
							if ($pict) {
						$pictIndex = 0;
							foreach ($pict as $item) {
					?>
						<div class="slider-bg__slide slider__slide slider-main__slide" style="background-image: url(<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0]; ?>);">
							<div class="nuar_blk"></div>
							<div class="slider-bg__container _container"> 
								<? if (!empty($item['slider_title'])) { ?>
									<h1 class="slider-bg__title"><? echo $item['slider_title']; ?></h1>
									<p class="slider-bg__subtitle"><? echo $item['slider_subtitle']; ?></p>
								<? } ?>
							</div>
						</div>
					<?
							$pictIndex++;
							}
						}
					?> 
					</div>
					<div class="slider-bg__swiper-button-block swiper-button-block">
						<div class="_container">
							<div class="swiper-button swiper-button-next slider-main-next"></div>
							<div class="swiper-button swiper-button-prev slider-main-prev"></div>
						</div>
					</div>
				</div>
			</section>

			<section id="about" class="about">
				<div class="_container">
					<div class="about__descp">
					<? $abouttc = carbon_get_theme_option("about_home");
						if (!empty($abouttc)) { ?>
							<? echo $abouttc; ?>
						<p class="about__descp-mark">
							<?php echo carbon_get_theme_option('about_home_strong'); ?>
						</p>
					<? } ?>
					</div>

				</div>
			</section>

			<section id="about" class="consult">
				<div class="_container">
					<div class="consult__row d-flex">
						<h2 class="consult__title">
							Получи бесплатную консультацию <br>
							по любым вопросам вашего бизнеса
						</h2>
						<p class="consult__subtitle">
							Мы не бросаем слов на ветер, <br>
							а даем советы которые помогают
						</p>
						<a href="#callback" class="consult__btn btn _popup-link">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a>
					</div>
				</div>
			</section>

			<section id="services" class="services">
				<div class="_container">
					<h2 class="services__title">Наши услуги</h2>

					<div class="services__row">
						<?php
							$page_children = new WP_Query(
								array(
									'post_type' => 'page',
									'post_parent' => '32',
									'order'       => 'ASC',
											)
										);
								if ($page_children->have_posts()) :
								while ($page_children->have_posts()) : $page_children->the_post();
						?>
 							<div class="services__column">
            		<a href="<?echo get_the_permalink(get_the_ID());?>" class="services__card">
              		<div class="services__card-img">
                		<picture>
											<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
                		</picture>
              		</div>
              		<div class="services__card-descp">
                		<h3 class="services__card-descp-title"><? the_title();?></h3>
											<?echo carbon_get_post_meta(get_the_ID(),"service_smile_descr"); ?>
              		</div>
            		</a>
          		</div>
						<?php
								endwhile;
								endif;
							wp_reset_query();
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

			<section id="advant" class="advant">
				<div class="_container">

					<h2 class="advant__title">Наши преимущества</h2>

					<div class="advant__row d-flex">

						<div class="advant__item">
							<span class="advant-icon advant-icon-01"></span>
							<h3>
								Мы не привязаны <br>
								к региону
							</h3>
							<p>
								ВСЕ услуги предоставляются <br>
								НА ВСЕЙ территории РФ
							</p>
						</div>

						<div class="advant__item">
							<span class="advant-icon advant-icon-02"></span>
							<h3>Комплексные услуги</h3>
							<p>
								Мы предоставляем все услуги
								по организации и ведению
								малого и среднего бизнеса
							</p>
						</div>

						<div class="advant__item">
							<span class="advant-icon advant-icon-03"></span>
							<h3>Работаем быстро</h3>
							<p>
								Гарантируем высокую скорость
								благодаря налаженным процессам
							</p>
						</div>

						<div class="advant__item">
							<span class="advant-icon advant-icon-04"></span>
							<h3>Эффективные решения</h3>
							<p>
								Мы знаем как эффективно решать
								возникающие
								проблемы
							</p>
						</div>

					</div>

				</div>
			</section>

		</main>

<?php get_footer(); ?> 