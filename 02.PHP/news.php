<?php
function getAllNews($link) {
    $query  = "select * from news";
    $result = mysqli_query($link, $query);
    if (!$result) {
        die(mysqli_error($link));
    }

    $n = mysqli_num_rows($result);
    for ($i = 0; $i < $n; $i++) {
        $row    = mysqli_fetch_assoc($result);
        $news[] = $row;
    }

    return $news;
}

function addNews($link, $title, $content) {
    $title   = trim($title);
    $content = trim($content);

    if ($title == '') {
        return false;
    }

    $template_add="INSERT INTO news(title,content) VALUES('%s','%s');";

    $query=sprintf($template_add,
    	mysqli_real_escape_string($link,$title),
    	mysqli_real_escape_string($link,$content));

    print_r($query);
}