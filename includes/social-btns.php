<?php
$termo = get_queried_object();
if (is_single()) {
    $link = get_permalink();
} else {
    $link = get_term_link($termo->name, 'cat-publicacoes');
}
?>

<div class="social-top">
    <a href="https://api.whatsapp.com/send?text=<?php echo $link; ?>" target="_blank" title="Compartilhar no whatsapp" class="btn-whatsapp-icon"><?= get_svg('whatsapp-icon'); ?>compartilhar</a>
    <a href="https://t.me/share/url?url=<?php echo $link; ?>" target="_blank" title="Compartilhar no Telegram" class="btn-social-icon telegram-icon"><?= get_svg('telegram-icon'); ?></a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $link; ?>" target="_blank" title="Compartilhar no Facebook" class="btn-social-icon facebook-icon"><?= get_svg('facebook-icon'); ?></a>
    <a href="https://twitter.com/intent/tweet?url=<?php echo $link; ?>" target="_blank" title="Compartilhar no Twitter" class="btn-social-icon twitter-icon"><?= get_svg('twitter-icon'); ?></a>
</div>