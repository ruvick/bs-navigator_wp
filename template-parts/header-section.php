<header id="header" class="header">
	<div class="header__container _container">

		<div class="header__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="logo-icon header__logo"></a> 

			<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu-list header__menu-list',
						'container_class' => 'menu-list header__menu-list','container' => false )); ?> 

			<div class="contacts header__contacts d-flex">
				<a href="#" class="social-link header__social-link header__social-link-01"></a>
				<a href="#" class="social-link header__social-link header__social-link-02"></a>
				<a href="tel:88003504566" class="contacts__phone header__phone">8 800 350 45 66</a>
				<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phone_1"); ?></a> -->
				<a href="#callback" class="header__popup-link btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
			</div>
			<a href="tel:84951700000" class="mob-phone-icon header__mob-phone-icon"></a>
			<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-callback__phone"></a> -->

			<div class="icon-menu" aria-label="Бургер меню">
				<span></span>
				<span></span>
				<span></span>
			</div>

		</div>

	</div>
</header>

<!-- Мобильное меню -->
<div class="mob-menu header__mob-menu">
	<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
		'container_class' => 'mob-menu__list','container' => false )); ?> 
	<a href="#callback" class="header__popup-link btn header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>