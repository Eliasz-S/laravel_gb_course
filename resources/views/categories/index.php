<h1>Категории новостей:</h1>
<?php foreach ($categoriesList as $key => $category): ?>
    <div>
        <h2><a href="<?= route('categories.filter', ['id' => $key]) ?>"><?= $category ?></a></h2>
    </div>
<?php endforeach; ?>