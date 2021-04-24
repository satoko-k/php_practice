<?php
    // Itemクラスの定義を移動：itemclass.php　
    // データ定義(Itemクラスのインスタンス)を移動　data.php


    // データ定義ファイルの読みこみ　Itemクラスのインスタンス
    require_once('data.php');

    

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
    <title>Document</title>
</head>
<body>
    <div class="menu-wrapper container">
        <h1 class="logo">flower shop</h1>
        <div class="menu-items">
        <!-- 配列$itemsの要素を変数$itemとするforeach文 -->
        <?php foreach($items as $item): ?>
        <img src="./images/<?php echo $item->getImage();  ?>">
        <h3><?php echo $item ->getName(); ?></h3>
        <p class="price">￥<?php echo $item->getTaxIncludedPrice();  ?>(税込）</p>
        <?php endforeach ?>
        
        </div>
    </div>
    
</body>
</html>




