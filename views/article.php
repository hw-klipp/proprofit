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
        <a href="/news">Главная</a>
    </li>
    <li>
        <a href="/dashboard">Админ-панель</a>
    </li>
</ul>
<br>

<h1><?= $this->article->title ?></h1>
<p><?= $this->article->date; ?> <?= $this->article->author->name ?? null ?></p>
<p><?= $this->article->content; ?></p>

</body>
</html>