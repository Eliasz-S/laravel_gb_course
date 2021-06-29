<?php foreach ($newsList as $key => $news): ?>
    <div>
        <h2><a href="<?= route('news.show', ['id' => ++$key]) ?>"><?= $news['title'] ?></a></h2>
        <h4>
            <a href="<?= route('categories.filter', ['id' => $news['category_id']]) ?>">
                <?= $categoriesList[$news['category_id']] ?>
            </a>
        </h4>
        <p><?= $news['description'] ?></p>
    </div>
<?php endforeach; ?>

