<?php 
require_once ($_SERVER['DOCUMENT_ROOT'] . '/func/getMenu.php');
?>

<ul class="<?= $ulClass ?>">
    <?php foreach($menuItems as $menuItem): ?>
        <li><a href="<?= $menuItem['path'] ?>" class="<?= isCurrentUrl($menuItem['path']) ? 'selected' : '' ?>"><?= toCut($menuItem['title']) ?></a>
    <?php endforeach; ?>
</ul>