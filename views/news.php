<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul>
    <li>
        <a href="/dashboard">Админ-панель</a>
    </li>
</ul>

<h2>Новости</h2>

<?php foreach($this->news as $article): ?>
    <article>
        <h3><a href="/article/<?= $article->id; ?>"><?= $article->title; ?></a></h3>
        <p><?= $article->date; ?> <?= $article->author->name ?? null ?></p>
        <p><?= $article->content; ?></p>
    </article>
    <hr>
<?php endforeach; ?>

</body>
</html>