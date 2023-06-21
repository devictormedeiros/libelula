<?php get_header();?>
<main id="main" class="site-main" role="main">
	
<div class="container">
	<div class="row">
		<h1 class="title_page"><?php the_title(); ?></h1>
	</div>
</div>

	<div class="container">
		<?php the_content(); ?>
	</div>
</main>
<?php get_footer();?>