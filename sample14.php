<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php
$news=file_get_contents('../../news_data/news.text');
$news.="2020-4-24追加\n".$news;
file_put_contents('../../news_data/news.text',$news);
print($news);
// readfile('../../news_data/news.text');

?>
<!-- http://localhost:8888/php/sample01.php -->
</pre>
</main>
</body>    
</html>