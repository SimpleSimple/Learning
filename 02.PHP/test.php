<?php
// require_once "database.php";
// require_once "news.php";
// require_once "config.php";

// require_once "construct.php";

// $link   = db_connect();
// $result = addNews($link, '这是一个牛逼哄哄的标题\n\n不信你看看', '');
// print_r($result);

// // $news = getAllNews($link);
// // var_dump($news);

require_once "database.php";

$db = new Database('127.0.0.1', 'root', '', 'test');
var_dump($db->connect());