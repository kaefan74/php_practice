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
  $success=file_put_contents('../../news_data/news.text','2018-06-01 ホームページをリニューアルしました');
  if($success){
    print('書き込みが完了');
  }else{
    print('失敗しました');
  }
?>
<!-- http://localhost:8888/php/sample01.php -->
</pre>
</main>
</body>    
</html>