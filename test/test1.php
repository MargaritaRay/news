<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            margin: 0 auto;
            max-width: 800px;
        }
    </style>
</head>
<body>
<div>
    <h1>Новости</h1>
    <?php
    include 'db.php';
    //id- номер массива (ключ подмассива)
    $news = $_GET['id'];
    ?>
    <!--берем весь массив и выводим подмассив с выбранным ключом-->
    <?php var_dump($arr[$news]);?>

    <h4><?php echo $arr[$news]['title'];?></h4>
    <p><?php echo $arr[$news]['text'];?></p>

    <a href="test.php">Все новости</a>
</div>


</body>
</html>