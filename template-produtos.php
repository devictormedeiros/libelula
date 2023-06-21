<?php
/* Template Name: Produtos */
get_header();

?>

<main id="main-produtos" class="site-main" role="main">
    <section class="cabecalho-archive pb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 cabecalho-text">
                <h2 class="text-secondary-400 font-title-sm mb-1">Linha</h2>
                    <h1 class="text-secondary-400 font-title-xl"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content my-md-5 mb-md-5 mb-0 pt-3">
        <div class="container">
            <div class="row">
                <?php
                $args = array(
                    'post_type'      => 'produtos',
                    'post_status'    => 'publish',
                    'posts_per_page' => 20,
                    'paged'           => get_query_var('paged') ? get_query_var('paged') : 1,
                );

                // Inicializa a consulta
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-lg-3 col-6 mb-md-5 mb-4 px-md-4">
                        <div class="produto">
                        <a href=""> <figure>
                                <img class="mx-auto" src="<?php echo get_bloginfo('template_directory') . '/assets/img/produto.jpg'; ?>" alt="">
                            </figure>
                            </a>
                            <div class="text text-center mt-md-3 mt-2">
                                <a href="">
                                    <h4 class="font-excert color-primary"><?php the_title();?></h4>
                                </a>
                                <a href="">
                                    <p class="font-subtitle-md color-primary">ref <?php the_field('referencia');?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="row">
                <div class="col-12 pagination">
                <?php
                    // Paginação
                    echo paginate_links(array(
                        'total'   => $query->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                        'prev_next' => true,
                        'prev_text' => '<i class="fa-solid fa-angle-left"></i>',
                        'next_text' => '<i class="fa-solid fa-angle-right"></i>',
                        'type'      => 'list',
                    ));
                    ?>
                </div>
            </div>
        </div>  
    </section>
    <?php include 'includes/sec-contato.php';?>
</main>


<?php get_footer(); ?>