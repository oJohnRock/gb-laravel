<?php include_once 'menu.php'; ?>

<h1>Категории</h1>
<nav>
    <?php foreach ($categories as $item) : ?>
        <a href="<?= route('categoryNews', $item['id']) ?>"><?= $item['name'] ?></a>
    <?php endforeach; ?>
</nav>