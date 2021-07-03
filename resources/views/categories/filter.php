<h1>Все новости из категории "<?= $categoriesList[$id] ?>"</h1>
<?php foreach($newsList as $key => $news): ?>
    <?php if ($news['category_id'] == $id): ?>
        <div>
            <h2><a href="<?= route('news.show', ['id' => ++$key]) ?>"><?= $news['title'] ?></a></h2>
            <p><?= $news['description'] ?></p>
        </div>
    <?php endif; ?>
<?php endforeach; ?>