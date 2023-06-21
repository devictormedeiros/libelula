<?php

get_header();
$taxonomy = get_queried_object(); // Obtém o objeto da taxonomia atual

// Configura os argumentos para recuperar os termos filho com posts associados
$args = array(
    'taxonomy' => $taxonomy->taxonomy,
    'child_of' => $taxonomy->term_id,
    'hide_empty' => true, // Exclui termos vazios
);

// Obtém os termos filho com posts associados
$child_terms = get_terms($args);
?>

<main id="main" class="site-main mb-12 mb-md-10 mt-0 mt-md-6 d-flex flex-column gap-main" role="main">
    <section class="cabecalho-archive pb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 cabecalho-text">
                    <?php
                    // Obtém o objeto da categoria atual
                    $category = get_queried_object();
                    $nome_categoria = single_cat_title('', false);
                    // Verifica se há uma categoria atualmente sendo exibida
                    if ($category instanceof WP_Term) : ?>
                        <?php if (empty($child_terms)) : ?>
                            <h2 class="text-secondary-400 font-title-sm mb-2">Linha</h2>
                        <?php endif; ?>
                        <h1 class="text-secondary-400 font-title-xl"><?php echo $nome_categoria; ?></h1>
                    <?php endif;  ?>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-produtos">
        <div class="container">
            <?php
            // Verifica se a categoria atual tem posts
            if (have_posts()) {
                if (!empty($child_terms)) {
                    // Exibe a lista das subcategorias não vazias
                    $key = 1;

                    foreach ($child_terms as $subcategory) {
                        $term_id = $subcategory->term_id; // ID do termo desejado
                        // Obtém o link do termo de taxonomia pelo ID do termo
                        $term_link = get_term_link($term_id);
                        if ($key == 1) { ?>
                            <div class="row-mosaico mb-md-4 mb-3">
                                <div class="column">
                                <?php } elseif ($key == 2) { ?>
                                </div>
                                <div class="column-large">
                                <?php }
                                ?>
                                <div class="colecao-item">
                                    <div class="col-thumb">
                                        <a class="font-title-xs" href="<?php echo esc_url($term_link); ?>">Ver Coleção <i class="fa-solid fa-chevron-right"></i></a>
                                        <img src="<?php echo get_field('imagem_da_categoria', $subcategory); ?>" alt="">
                                    </div>
                                    <div class="col-text">
                                        <h5 class="font-subtitle-xl mb-1">Linha</h5>
                                        <h4 class="font-title-md"><?php echo $subcategory->name; ?></h4>
                                        <p class="font-subtitle-lg"><?php echo $subcategory->description; ?></p>
                                    </div>
                                </div>
                                <?php
                                if ($key == 3) { ?>
                                </div>
                            </div>
                    <?php }

                                $key == 3 ? $key = 1 : $key++;
                            }

                            if ($key != 1) {
                                // Fecha a div da última coluna se o número total de subcategorias não for um múltiplo de 3
                                echo '</div></div>';
                            }
                        } else { ?>
                    <div class="row">
                        <?php
                            if (have_posts()) {
                                $key = 1;
                                while (have_posts()) {
                                    the_post();
                        ?>
                                <div class="col-lg-3 col-6 mb-md-5 mb-4 px-md-4">
                                    <div class="produto">
                                        <a href="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" data-lightbox="produto" data-title="<?php the_title(); ?>">
                                            <figure>
                                                <?php the_post_thumbnail(); ?>
                                            </figure>
                                        </a>
                                        <div class="text text-center mt-md-3 mt-2">

                                                <h4 class="font-excert color-primary"><?php the_title(); ?></h4>

                                                <p class="font-subtitle-md color-primary">ref <?php the_field('referencia'); ?></p>

                                        </div>
                                    </div>
                                </div>
                        <?php
                                    $key++;
                                }

                                wp_reset_postdata();
                            } else {
                                echo '<p>' . __('Não há posts.') . '</p>';
                            }
                        ?>
                    </div>
            <?php }
                    } else {
                        // Se a categoria não tiver posts, exiba uma mensagem de aviso
                        echo '<h2 class="w-100 text-center color-primary font-title-lg">' . __('Não há posts.') . '</h2>';
                    }
            ?>
        </div>
    </section>

</main>


<?php get_footer(); ?>
<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    });
</script>