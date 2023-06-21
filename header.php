<?php require 'includes/cabecalho.php'; ?>

<body <?php body_class(); ?>>
    <header>
        <div class="container position-relative">
            <div class="header">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-2 col-6">
                        <div class="logo">
                            <a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>">
                            <?php echo get_svg('logo-header')?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1 col-6">
                        <button class="menu-hamburguer-icon" title="Abrir menu" type="button">
                        <?php echo get_svg('icon-menu')?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanva-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <button title="Fechar menu" class="" type="button">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="col-12">
                        <nav class="navbar navbar-left">
                            <?php wp_nav_menu(
                                array(
                                    'menu'              => 'menu',
                                    'theme_location'    => 'menu',
                                    'depth'             => 3,
                                    'container'         => 'ul',
                                    'container_class'   => 'menu collapse',
                                    'container_id'      => 'navbar',
                                    'menu_class'        => 'navbar-nav',
                                )
                            ); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>