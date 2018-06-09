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
    <?php include 'db.php'; ?>

    <?php foreach ($arr as $kay => $value){ ?>
        <a href="test1.php?id=<?php echo $kay?>"><?php echo $value['title'];?></a>
        <p><?php echo mb_substr($value['text'], 0, 100);?>...</p>
    <?php } ?>
</div>

</body>
</html>