<?php get_header(); ?>
<main id="main" class="site-main search_main" role="main">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="search-title">
					<form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
						<input type="text" name="s" value="<?= $_GET['s']; ?>" />
					</form>
					<p>Resultado de busca <?= $_GET['s']; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-md-4 col-12">
						<a href="<?php the_permalink(); ?>">
							<h2><?php the_title(); ?></h2>
						</a>
						<p><?php the_excerpt(); ?></p>

					</div>
				<?php endwhile;
			else : ?>
				<div class="col-12">
					<h1>Nenhum resultado encontrado!</h1>
				</div>
			<?php endif; ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>