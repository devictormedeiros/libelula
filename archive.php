<?php get_header(); ?>
<main id="main" class="site-main" role="main">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    include 'includes/post-item.php';
                }
            }
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>