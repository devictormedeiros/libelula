<?php get_header(); ?>

<main id="main" class="site-main" role="main">
	<section class="cabecalho-archive pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-12 position-relative">
					<h1 class="text-secondary-400 font-title-xl">Depoimentos</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="content-single">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<figure>
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					</figure>
				</div>
				<div class="col-lg-5">
					<h2 class="mb-3 color-primary"><?php the_title(); ?></h2>
					<p><?php the_field('texto'); ?></p>
					<div class="lista">
						<h4 class="mb-3 color-primary">O que fizemos</h4>
						<ul>
							<?php foreach (get_field('lista_o_que_fizemos') as $item) : ?>
								<li><?php echo $item['item']; ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="galeria">
						<?php foreach(get_field('galeria') as $item): ?>
						<div class="item-galeria">
							<figure>
								<img src="<?php echo $item;?>" alt="">
							</figure>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="sec-contato">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<h3 class="font-title-lg">Vamos conversar?</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus, tortor id cursus scelerisque, quam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus, tortor id cursus scelerisque, quam.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus, tortor id cursus scelerisque.</p>
					<div class="redes-sociais d-flex">
						<a href="https://api.whatsapp.com/send?phone=5511994788281" target="_blank" rel="noopener noreferrer"><?php echo get_svg('whatsapp-icon-dark'); ?></a>
						<a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer"><?php echo get_svg('facebook-icon-dark'); ?></a>
						<a href="https://www.tiktok.com/" target="_blank" rel="noopener noreferrer"><?php echo get_svg('telegram-icon-dark'); ?></a>
						<a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><?php echo get_svg('instagram-icon-dark'); ?></a>
					</div>
					<div class="info-contato">
						<p class="mb-0"><a href="" class="font-excert-bold">71 9856.3674</a> - <a href="" class="font-excert-bold">71 9645.5478</a></p>
						<p><a href="" class="font-excert">contato@libeluladecora.com</a></p>
						<p class="endereco-info"><a class="font-subtitle-lg" href="">Avenida Paralela, 189 - Trobogi - Salvador</a></p>
					</div>
				</div>
				<div class="col-lg-6">
					<?php echo do_shortcode('[contact-form-7 id="37" title="Formulário de contato"]'); ?>
				</div>
			</div>
	</section>
</main>
<?php get_footer(); ?>