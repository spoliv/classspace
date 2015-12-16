<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">

</head>
<body>
<div class="container">
    <h1>Мой псевдо-новостной блог</h1>

    <div>
        <form method="post" action="../index.php?r=<?= $_GET['r'] ?>&id=<?= $_GET['id'] ?>">
            <label>
                Название
                <input type="text" name="title" value="<?= $article['title'] ?>" class="form-item" autofocus required>
            </label>
            <label>
                Содержимое
                <textarea class="form-item" name="text" required><?= $article['text'] ?></textarea>
            </label>

            <input type="submit"
                   value="Сохранить" class="btn">
        </form>
    </div>
    <footer><p>Олегов блог<br>Copyright &copy : 2015</p>
    </footer>
</div>
</body>
</html>