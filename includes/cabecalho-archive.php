<?php
$term = get_queried_object(); // Obter o objeto atual da taxonomia
$taxonomy_name = $term->name; // Obter o nome atual da taxonomia
?>
<div class="cabecalho">
    <div class="title-cabecalho">
        <h1><?php echo $taxonomy_name; ?></h1>
    </div>
    <?php include 'social-btns.php'; ?>
</div>