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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>flowerShop</title>
</head>
<body>
    <div class="menu-wrapper container mb-5">
        <div class="row my-5">
        <h1 class="col-md-8 offset-2">flower shop</h1>
        </div>
        
            <form method="post" action="confirm.php">
                <div class="menu-items row mb-3">
                    <!-- 配列$itemsの要素を変数$itemとするforeach文 -->

                    <?php foreach($items as $item): ?>
                    <div class="menu-item col-md-4 mb-3">
                        <img class="img-fluid rounded" src="./images/<?php echo $item->getImage();  ?>">
                        <h3><?php echo $item ->getName(); ?></h3>
                        <p class="price mb-1">￥<?php echo $item->getTaxIncludedPrice();  ?>(税込）</p>
                        <!-- <p>注文数: <?php echo $item->getOrderCount() ?></p> -->
                        <input class="number" type="number" value="0" name="<?php echo $item->getName() ?>"><span>個</span>
                    </div>
                    <?php endforeach ?>

                    
                </div>
                <div class="row">
                    <input type="submit" value="注文する" class="btn btn-primary  btn-lg col-md-4 offset-md-4">
                </div>
            </form>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>




