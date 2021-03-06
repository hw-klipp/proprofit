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
            <a href="/news">Главная</a>
        </li>
    </ul>
    <h1>Админ-панель</h1>

    <form action="/add" method="POST">
        <p><label>Название</label></p>
        <p>
            <input type="text" name="title">
        </p>
        <p><label>Автор</label></p>
        <p>
            <input type="text" name="author">
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
                <th>Автор</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->news as $article): ?>
            <tr>
                <td><?= $article->id; ?></td>
                <td><a href="../index.php"><?= $article->title; ?></a></td>
                <td><?= $article->author->name ?? null ?></td>
                <td>
                    <a href="/delete/<?= $article->id; ?>">Удалить</a>
                    <a href="/edit/<?= $article->id; ?>">Редактировать</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>