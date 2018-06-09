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
            margin-top: 20px;
            max-width: 600px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>

<div>
    <h1>Новости кино</h1>

<!--перебор массива-->
    <?php foreach ($data['article'] as $key => $value) { ?>
        <article>
<!--переход по ссылке с id-->
            <a href="template/article.php?id=<?php echo $key;?>">
<!--Вывод заголовка новости-->
                <?php echo $value['title'];?>
            </a>
            <p>
<!--частичнаый вывод додержимого новости-->
                <?php echo mb_substr($value['text'], 0 , 100);?>...
            </p>
        </article>
    <?php } ?>
</div>

</body>
</html>