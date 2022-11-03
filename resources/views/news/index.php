<?php include_once 'menu.php'; ?>

<!-- <a href="< ?= route('newsAdd') ?>">Добавить новость</a> -->

<h1>Новости</h1>
<nav>
    <?php foreach ($news as $item) : ?>
        <a href="<?= route('newsOne', $item['id']) ?>"><?= $item['title'] ?></a>
    <?php endforeach; ?>
</nav>