<?php get_header(); ?>

<main id="main" class="site-main mb-12 mb-md-10 mt-0 mt-md-6 d-flex flex-column gap-main" role="main">
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
				<div class="col-lg-5 ps-5">
					<h2 class="mb-3 color-primary font-title-lg"><?php the_title(); ?></h2>
					<p class="font-testmonials color-primary-300 mb-5"><?php the_field('texto'); ?></p>
					<div class="lista mt-5">
						<h4 class="mb-3 color-primary font-title-xs">O que fizemos</h4>
						<ul class="column-count-2">
							<?php foreach (get_field('lista_o_que_fizemos') as $item) : ?>
								<li class="color-primary-300 font-subtitle-md mb-1"><?php echo $item['item']; ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="row mt-md-5">
				<div class="col-12">
					<div class="slider-galeria">
					<?php foreach (get_field('galeria') as $item) : ?>
							<div class="item-galeria">
							<figure>
								<a href="<?php echo $item; ?>" data-lightbox="galeria"><img src="<?php echo $item; ?>" alt=""></a>
							</figure>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="sec-depoimentos">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="font-title-lg color-primary mb-0">Outros projetos</h3>
				</div>
				<div class="col-12">
						<?php include 'includes/slider-depoimentos.php'; ?>
				</div>
			</div>
		</div>
	</section>
	<?php include 'includes/sec-contato.php'; ?>
</main>
<?php get_footer(); ?>