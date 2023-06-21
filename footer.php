<footer>
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-6">
				<div class="row align-items-end footer-social">
					<div class="logo">
						<a href="<?php bloginfo('url') ?>" class="d-md-block d-none" title="<?php bloginfo('name') ?>">
						<?php echo get_svg('logo-footer');?>
						</a>
						<a href="<?php bloginfo('url') ?>" class="d-md-none d-block" title="<?php bloginfo('name') ?>">
						<?php echo get_svg('logo-company-horizontal');?>
						</a>
					</div>
					<div class="redes-sociais">
						<a href="https://www.tiktok.com/@cuica_brasil" class="text-secondary-400" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a>
						<a href="https://www.instagram.com/cuicabr/" class="text-secondary-400" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
						<a href="https://api.whatsapp.com/send?phone=5511994788281" class="text-secondary-400" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-pinterest"></i></a>
					</div>

				</div>
				<div class="row row-text-footer d-md-block d-none">
					<div class="col-12">
						<p class="text-secondary-400 font-subtitle-lg text-center text-md-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus, tortor id cursus scelerisque, quam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus, tortor id cursus scelerisque, quam.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="row">
				<div class="col-lg-6 mb-md-0 mb-3">
  <h3 class="font-title-sm color-secondary mb-md-3 accordion-title">Portfólio</h3>
  <?php wp_nav_menu(array(
    'menu'              => 'menu-portfolio',
    'theme_location'    => 'menu-portfolio',
    'container'         => 'ul',
    'menu_class'        => 'accordion-items',
  )); ?>
</div>
<div class="col-lg-6 mb-md-0 mb-3">
  <h3 class="font-title-sm color-secondary mb-md-3 accordion-title">Institucional</h3>
  <?php wp_nav_menu(array(
    'menu'              => 'menu-institucional',
    'theme_location'    => 'menu-institucional',
    'container'         => 'ul',
    'menu_class'        => 'accordion-items',  
  )); ?>
</div>
				</div>
				<div class="row row-text-footer d-md-none d-block">
					<div class="col-12">
						<p class="text-secondary-400 font-subtitle-lg text-center text-md-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus, tortor id cursus scelerisque, quam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus, tortor id cursus scelerisque, quam.</p>
					</div>
				</div>
			</div>
			<div class="row col-12 mt-lg-8 mt-4 footer-bottom justify-content-lg-between justify-content-center">
			<div class="col-lg-4 text-md-start text-center mt-md-0 mt-4">
				<p class="text-secondary-400 font-subtitle-md "><?php echo date('Y'); ?> | <?php _e('Todos os direitos reservados', 'cuica_theme'); ?></p>
			</div>
			<div class="col-lg-4 text-md-end text-center mt-md-0 mt-4">
				<a href="https://www.vanzillotta.com" target="_blank" class="logo-marcello-vanzillotta"><?php echo get_svg('logo-marcello');?></a>
			</div>
		</div>
		</div>

	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>