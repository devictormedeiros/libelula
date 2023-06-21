<?php

add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('align-wide');
add_theme_support('menus');

register_nav_menus(
    array(
    'menu' => __('Menu', 'theme'),
    'menu-portfolio' => __('Footer portfólio', 'theme'),
    'menu-institucional' => __('Footer institucional', 'theme'),
    )
);

add_action('wp_enqueue_scripts', 'gf_enqueue_scripts');

function gf_enqueue_scripts()
{
    wp_enqueue_script('jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@next/dist/aos.js');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
    wp_enqueue_script('lightbox-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js');
    wp_enqueue_script('fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js', '', '', false);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js');

    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
    wp_enqueue_style('slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
    wp_enqueue_style('fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css');
    wp_enqueue_style('lightbox-css', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css');
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/style.css');
}


// POSTS TYPE
function meus_posts_types() {
    register_post_type('depoimentos',
        array(
            'labels' => array (
               'name' => _('Depoimentos'), 
               'singular_name' => _('Depoimento')
           ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-tools',
            'supports' => array ('title','thumbnail','excerpt','page-attributes'),
        )
    );
    register_post_type('produtos',
    array(
        'labels' => array (
           'name' => _('Produtos'), 
           'singular_name' => _('Produto')
       ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => array ('title','thumbnail','excerpt','page-attributes'),
    )
);
}
add_action('init','meus_posts_types',0); 


// CRIAR TAXONOMIA
function create_taxonomy_type() {
    register_taxonomy(
             'product_cat',
             'produtos',
              array(
                 'label' => 'Categorias de Produtos ',
                 'hierarchical' => true,
                 'show_in_nav_menus' => true,
                'show_in_menu' => true
             )
    );
}
add_action( 'init', 'create_taxonomy_type' );


add_filter('wpcf7_autop_or_not', '__return_false');

// Função get SVG
function get_svg($svg)
{
stream_context_set_default(
    array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
        ),
    )
);
    $file = file_get_contents(get_bloginfo('template_directory') . '/assets/svg/' . $svg . '.svg');
    return $file;
}

function my_myme_types($mime_types)
{
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);


function wpbeginner_numeric_posts_nav()
{

    if (is_singular()) {
        return;
    }

    global $wp_query;

    /**
* 
 * Stop execution if there's only 1 page 
*/
    if ($wp_query->max_num_pages <= 1) {
        return;
    }

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max   = intval($wp_query->max_num_pages);

    /**
* 
 * Add current page to the array 
*/
    if ($paged >= 1) {
        $links[] = $paged;
    }

    /**
* 
 * Add the pages around the current page to the array 
*/
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /**
* 
 * Previous Post Link 
*/
    if (get_previous_posts_link()) {
        printf('<li class="prev-post">%s</li>' . "\n", get_previous_posts_link('<i class="fas fa-chevron-left"></i>'));
    }

    /**
* 
 * Link to first page, plus ellipses if necessary 
*/
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links)) {
            echo '<li>…</li>';
        }
    }

    /**
* 
 * Link to current page, plus 2 pages in either direction if necessary 
*/
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /**
* 
 * Link to last page, plus ellipses if necessary 
*/
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links)) {
            echo '<li>…</li>' . "\n";
        }

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /**
* 
 * Next Post Link 
*/
    if (get_next_posts_link()) {
        printf('<li class="next-post">%s</li>' . "\n", get_next_posts_link('<i class="fas fa-chevron-right"></i>'));
    }

    echo '</ul></div>' . "\n";
}