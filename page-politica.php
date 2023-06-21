<?php
/* Template Name: Politica de privacidade */
get_header();

?>

<main id="main-politica-de-privacidade" class="site-main" role="main">
    <section class="cabecalho-archive pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-12 position-relative">
					<h1 class="text-secondary-400 font-title-xl"><?php the_title();?></h1>
				</div>
			</div>
		</div>
	</section>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>
