<?php
require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/News.php';

$view = new View();
$news = new News('db.php');



$view->assign('article', $news->getData());
echo $view->render('news.php');
