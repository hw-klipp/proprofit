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

    <h1>Редактирование статьи</h1>
    <form action="/update" method="POST">
        <input type="hidden" name="id" value="<?=str_replace('/edit/', '', $_SERVER['REQUEST_URI'])?>">
        <p><label>Название</label></p>
        <p>
            <input type="text" name="title" value="<?= $this->article->title; ?>">
        </p>
        <p><label>Автор</label></p>
        <p>
            <input type="text" name="author" value="<?= $this->article->author->name; ?>">
        </p>
        <p><label>Описание</label></p>
        <p>
            <textarea name="content" cols="50" rows="7"><?= $this->article->content; ?></textarea>
        </p>
        <p>
            <button type="submit">Изменить</button>
        </p>
    </form>

</body>
</html>