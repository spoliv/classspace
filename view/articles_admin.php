<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">

</head>
<body>
<div class="container">
    <h1>Мой псевдо-новостной блог</h1>

    <div>
        <a href="../index.php?r=news/add">Добавить статью</a><br><br>
        <table class="admin-table">
            <tr>
                <th>Заголовок</th>
                <th></th>
                <th></th>
            </tr>

            <?php foreach ($news as $article): ?>
                <tr>
                    <td><?= $article['title'] ?></td>
                    <td><a href="../index.php?r=news/edit&id=<?= $article['id'] ?>">Редактировать</a></td>
                    <td><a href="../index.php?r=news/delete&id=<?= $article['id'] ?>">Удалить</a></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <footer><p>Олегов блог<br>Copyright &copy : 2015</p>
    </footer>
</div>
</body>
</html>