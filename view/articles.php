<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Новости</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <h1>Мой псевдо-новостной блог</h1>
    <a href="../index.php?r=news/admin">Панель администратора</a>

    <div>
        <?php foreach ($news as $article): ?>
            <div class="article">
                <h3><a href="../index.php?r=news/one&id=<?= $article['id'] ?>"><?= $article['title'] ?></a></h3>

                <p><?= mb_substr($article['text'], 0, 150) ?></p>
            </div>
        <?php endforeach ?>
    </div>
    <footer><p>Олегов Блог<br>Copyright &copy : 2015</p>
    </footer>
</div>
</body>
</html>