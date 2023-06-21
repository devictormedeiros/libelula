<?php get_header();?>
<main id="main" class="site-main" role="main">
	

<div class="container">
	<div class="row">
		<h1 class="title_page"><?php the_title(); ?></h1>
	</div>
</div>
	<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>

	
</main>

<?php get_footer();?>