<?php
    require_once('data.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <title>flowerShop｜注文確認画面</title>
</head>
<body>
  <div class="container">
    <div class="row my-5">
      <h1 class="col-md-8 offset-2">flower shop</h1>
    </div>
        

      <h2 class="my-5">注文内容確認</h2>

    <!-- 合計金額を定義　初期値0 -->
    <?php $totalPayment =0; ?>
    <div class="row p-5">
      <?php foreach ($items as $item): ?>

      <?php
      $orderCount = $_POST[$item->getName()];      
      $item -> setOrderCount($orderCount); 
      $totalPayment += $item->getTotalPrice();     
      ?>
        <div class="col-6">
          <p class="order-amount">
            <?php echo $item->getName(); ?>
            x
            <?php echo $orderCount; ?>
            個
          </p>
          <p class="order-price pr-5"><?php echo $item->getTotalPrice(); ?>円</p>
        </div>
      <?php endforeach ?>
    </div>
    <h3 class="my-5">合計金額：<?php echo $totalPayment; ?>円</h3>

  </div>
</body>
</html>