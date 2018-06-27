<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table {
            margin: 0 auto;
            width: 50%;
        }

        table, tr, th, td {
            border-collapse: collapse;
            border: 1px solid black;
        }

        td a:last-child {
            margin-left: 20px;
        }

    </style>
</head>
<body>

    <ul>
        <li>
            <a href="/index.php">Главная</a>
        </li>
    </ul>
    <h1>Админ-панель</h1>

    <form action="/admin.php" method="POST">
        <p><label>Название</label></p>
        <p>
            <input type="text" name="title">
        </p>
        <p><label>Описание</label></p>
        <p>
            <textarea name="content"  cols="50" rows="7"></textarea>
        </p>
        <p>
            <button type="submit">Добавить</button>
        </p>
    </form>
    <hr>

    <table>
        <thead>
            <tr >
                <th>id</th>
                <th>Название</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($news as $article): ?>
            <tr>
                <td><?= $article->id; ?></td>
                <td><a href="/article.php?id=<?= $article->id; ?>"><?= $article->title; ?></a></td>
                <td>
                    <a href="/admin.php?action=delete&id=<?= $article->id; ?>">Удалить</a>
                    <a href="/edit.php?id=<?= $article->id; ?>">Редактировать</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>