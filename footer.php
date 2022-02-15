<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<?php wp_nav_menu( array('theme_location' => 'menu_foot','menu_class' => 'footer__menu',
				'container_class' => 'footer__menu','container' => false )); ?> 

			<div class="footer__info">
				<a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="social-link header__social-link footer__social-link-01"></a>
				<a href="<?php echo carbon_get_theme_option('as_insta'); ?>" class="social-link header__social-link footer__social-link-02"></a>
				<p class="footer__info-policy">Бизнеснавигатор 2022©</p>
			</div>

		</div>

	</div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>