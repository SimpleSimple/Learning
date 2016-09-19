<?php
include_once "database.php";
include_once "MysqliDB.php";

if ($_POST) {
    $title   = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $author  = htmlspecialchars($_POST['author']);

    // $pdo = new PDO("mysql:localhost=host;dbname=test", "root", "", array("PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION"));
    // $pdo->query("set name utf8");
    // $sql  = "insert into news(title,content,author) values(?,?,?)";
    // $stmt = $pdo->prepare($sql);
    // //var_dump($stmt);
    // $stmt->execute(array($title, $content, $author));
    // $data = $stmt->fetch(PDO::FETCH_ASSOC);
    // $row  = $stmt->rowCount();
    // var_dump($row);

    // print_r($title . "=>" . $content . "=>" . $author);
    $db = MysqliDB::getInstance();
    //$getSql = "insert into news(title,content) values('" . $title . "','" . $content . "');"
    $rlt = $db->insert('news', array($title, $content));
    var_dump($rlt);
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form method="POST" action="" enctype="multipart/form-data" id="form1">
<table id="table1" style="width:50%;">
<tr>
<td>标题：</td>
<td><input type="text" id="title" name="title" /></td>
</tr>
<tr>
<td valign="top">内容：</td>
<td><textarea id="content" name="content" style="width:400px;height:150px;"></textarea></td>
<tr>
<td>作者：</td>
<td><input type="text" id="author" name="author" style="width:120px;"></td>
<tr>
<td></td>
<td><input type="submit" value="提交"></td>
</tr>
</form>
</body>
</html>
