<?php
    require_once('data.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="container">
    <h2>注文内容確認</h2>
    <!-- 合計金額を定義　初期値0 -->
    <?php $totalPayment =0; ?>

    <?php foreach ($items as $item): ?>

      <?php
      
      $orderCount = $_POST[$item->getName()];      
      $item -> setOrderCount($orderCount); 
      $totalPayment += $item->getTotalPrice();     
      
      ?>
      <p class="order-amount">

        <?php echo $item->getName(); ?>
        x
        <?php echo $orderCount; ?>
        個
      </p>
      <p class="order-price"><?php echo $item->getTotalPrice(); ?>円</p>

    <?php endforeach ?>

    <h3>合計金額：<?php echo $totalPayment; ?>円</h3>

  </div>
</body>
</html>