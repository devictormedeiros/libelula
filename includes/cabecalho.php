<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
	<meta name="color-scheme" content="light">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=5, minimum-scale=1, width=device-width, height=device-height" />
	<meta name="format-detection" content="telephone=no">
	<meta name="author" content="Seox">
	<meta name="keywords" content="blog, conteúdo, post, artigo, notícia, informação, atualidades,tecnologia, inovação, gadgets, internet, mídias sociais">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="alternate" type="application/rss+xml" href="<?php echo esc_url(home_url('/')); ?>feed/" title="Feed de <?php wp_title('/', true, 'right'); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() . '/assets/img/favicon.ico' ?>" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() . '/assets/img/favicon.ico' ?>">
 	<script>
 		var site_url = "<?php echo get_stylesheet_directory_uri(); ?>";
 	</script>
 	<title><?php wp_title(); ?>
 </title>
 <?php wp_head(); ?>
</head>
