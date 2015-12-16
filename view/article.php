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
        <div class="article">
            <h3><?= $article['title']?></h3>
            <p><?= $article['text']?></p>
        </div>
    </div>
    <footer><p>Олегов блог<br>Copyright &copy : 2015</p>
    </footer>
</div>
</body>
</html>