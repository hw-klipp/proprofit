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
    <form action="/edit.php" method="POST">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <p><label>Название</label></p>
        <p>
            <input type="text" name="title" value="<?= $article->title; ?>">
        </p>
        <p><label>Описание</label></p>
        <p>
            <textarea name="content" cols="50" rows="7"><?= $article->content; ?></textarea>
        </p>
        <p>
            <button type="submit">Изменить</button>
        </p>
    </form>

</body>
</html>