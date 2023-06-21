<?php
/* Template Name: Homepage */
get_header();

$categories = get_terms(array(
    'taxonomy' => 'product_cat', // Substitua 'category' pela taxonomia correta do seu post type
    'hide_empty' => true,
));

// Filtra apenas as categorias que não possuem categorias pai
$parent_categories = array_filter($categories, function ($category) {
    return $category->parent == 0;
});

?>

<main id="main-home" class="site-main mb-12 mb-md-10 mt-0 mt-md-6 d-flex flex-column gap-main" role="main">
    <div class="slider-home d-none d-md-block">
        <section class="banner" style="background-image: url('<?php echo get_bloginfo('template_directory') . '/assets/img/bg-home-min.jpg'; ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-4">
                        <h4 class="color-primary font-subtitle-xl text-uppercase">Papeis de parede</h4>
                        <h2 class="color-primary font-title-xl">Novas linhas</h2>
                        <p class="color-primary font-subtitle-xl">Renove sua casa com nossos novos papéis de parede, trazendo vida e estilo para seu lar!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner" style="background-image: url('<?php echo get_bloginfo('template_directory') . '/assets/img/bg-home-2-min.jpg'; ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-4 offset-lg-8">
                        <h4 class="color-secondary font-subtitle-xl text-uppercase">LOREM IPSUM DOLOR</h4>
                        <h2 class="color-secondary font-title-xl">IDENTIDADE</h2>
                        <p class="color-secondary font-subtitle-xl">Crie com a gente ambientes únicos, autênticos , com a sua personalidade</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="slider-home d-md-none d-block">
        <section class="banner">
            <div class="container px-0">
                <div class="row">
                    <div class="col-12 px-0 col-image">
                        <figure>
                            <img class="w-100" src="<?php echo get_bloginfo('template_directory') . '/assets/img/bg-home-min.jpg'; ?>" alt="">
                        </figure>
                    </div>
                    <div class="col-12 p-4 col-text">
                        <h4 class="color-primary font-subtitle-xl">Papeis de parede</h4>
                        <h2 class="color-primary font-title-xl mb-2">Novas linhas</h2>
                        <p class="color-primary font-subtitle-xl">Renove sua casa com nossos novos papéis de parede, trazendo vida e estilo para seu lar!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner" style="background-image: url('<?php echo get_bloginfo('template_directory') . '/assets/img/bg-home-2-min.jpg'; ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-4 offset-lg-8">
                        <h4 class="color-secondary font-subtitle-xl text-uppercase">LOREM IPSUM DOLOR</h4>
                        <h2 class="color-secondary font-title-xl">IDENTIDADE</h2>
                        <p class="color-secondary font-subtitle-xl">Crie com a gente ambientes únicos, autênticos , com a sua personalidade</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="sec-produtos">
        <div class="container">
            <?php

            // Inicia o loop dos posts
            if (!empty($parent_categories)) : $key = 1;
                foreach ($parent_categories as $parent_category) :
                    $term_id = $parent_category->term_id; // ID do termo desejado
                    // Obtém o link do termo de taxonomia pelo ID do termo
                    $term_link = get_term_link($term_id);
                    if ($key == 1) : ?>
                        <div class="row-mosaico mb-md-4 mb-3">
                            <div class="column">
                            <?php elseif ($key == 2) : ?>
                                <div class="column-large">
                                <?php endif; ?>
                                <div class="colecao-item">
                                    <div class="col-thumb">
                                        <a class="font-title-xs" href="<?php echo esc_url($term_link); ?>">Ver Coleção <i class="fa-solid fa-chevron-right"></i></a>
                                        <img src="<?php echo get_field('imagem_da_categoria', $parent_category); ?>" alt="">
                                    </div>
                                    <div class="col-text">
                                        <h4 class="font-title-md"><?php echo $parent_category->name; ?></h4>
                                        <p class="font-subtitle-lg"><?php echo $parent_category->description; ?></p>
                                    </div>
                                </div>
                                <?php if ($key == 1) : ?>
                                </div>
                            <?php elseif ($key == 3) : ?>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php $key == 3 ? $key = 1 : $key++;
                endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php __('No posts found'); ?></p>
            <?php endif; ?>
    </section>
    <section class="sec-sobre">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-text">
                    <h3 class="font-title-lg">A Libélula</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu accumsan erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur eu mauris gravida, vestibulum ipsum sit amet, cursus nunc. Donec vestibulum risus tempor lorem venenatis sodales. Praesent id commodo massa.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu accumsan erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur eu mauris gravida, vestibulum ipsum sit amet, cursus nunc. Donec vestibulum risus tempor lorem venenatis sodales. Praesent id commodo massa. </p>
                </div>

                <img src="<?php echo get_bloginfo('template_directory') . '/assets/img/img-sec-sobre.png'; ?>" alt="">
            </div>
        </div>
    </section>
    <section class="sec-depoimentos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="font-title-lg">Depoimentos</h3>
                    <p class="font-subtitle-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu accumsan erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur eu mauris gravida, vestibulum ipsum sit amet, cursus nunc. Donec vestibulum risus tempor lorem venenatis sodales. Praesent id commodo massa.</p>
                </div>
                <div class="col-12">
                <?php include 'includes/slider-depoimentos.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-nosso-fazer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 order-md-1 order-2">
                    <img class="destaque" src="<?php echo get_bloginfo('template_directory') . '/assets/img/sec-nosso-fazer.png'; ?>" alt="">
                </div>
                <div class="col-lg-7 order-md-2 order-1">
                    <h3 class="font-title-lg">O nosso fazer</h3>
                    <p class="font-subtitle-lg color-primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu accumsan erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur eu mauris gravida, vestibulum ipsum sit amet, cursus nunc. Donec vestibulum risus tempor lorem venenatis sodales. Praesent id commodo massa.</p>
                    <div class="content-slider">
                        <div class="slider-nosso-fazer">
                            <div class="box">
                                <div class="image">
                                    <?php echo get_svg('nosso-fazer/Icon') ?>
                                </div>
                                <div class="text">
                                    <h5 class="font-title-xs color-primary">Agilidade</h5>
                                    <p class="font-subtitle-md color-primary">Todo o processo é otimizado, entregando qualidade com eficiência</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <?php echo get_svg('nosso-fazer/Icon-1') ?>
                                </div>
                                <div class="text">
                                    <h5 class="font-title-xs color-primary">Excelência</h5>
                                    <p class="font-subtitle-md color-primary">Execução dos trabalhos feita por profissionais treinados e experientes</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <?php echo get_svg('nosso-fazer/Icon-2') ?>
                                </div>
                                <div class="text">
                                    <h5 class="font-title-xs color-primary">Qualidade</h5>
                                    <p class="font-subtitle-md color-primary">Trabalhamos apenas com produtos e fornecedores referência no mercado</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <?php echo get_svg('nosso-fazer/Icon-3') ?>
                                </div>
                                <div class="text">
                                    <h5 class="font-title-xs color-primary">Respeito</h5>
                                    <p class="font-subtitle-md color-primary">Nossa empresa pauta o trabalho empático e com zelo a sua experiência</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <?php echo get_svg('nosso-fazer/Icon-4') ?>
                                </div>
                                <div class="text">
                                    <h5 class="font-title-xs color-primary">Garantia</h5>
                                    <p class="font-subtitle-md color-primary">Nossos produtos e serviços possuem período de garantia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php include 'includes/sec-contato.php'; ?>
</main>


<?php get_footer(); ?>