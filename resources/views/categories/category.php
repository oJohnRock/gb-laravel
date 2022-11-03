<?php include_once 'menu.php'; ?>

<h2><?= $category['name'] ?></h2>
<nav>
    <?php foreach ($news as $item) : ?>
        <a href="<?= route('newsOne', $item['id']) ?>"><?= $item['title'] ?></a>
    <?php endforeach; ?>
</nav>