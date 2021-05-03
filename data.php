<?php 
// データ定義用ファイル

// クラス定義ファイルitemclass.phpの読み込み
// require_once('itemclass.php');

require_once('pot.php');
require_once('arrange.php');


// データ定義
// Itemクラスのインスタンス
  $arrange1 = new Item("Arrangement_S",2500,"arrange01.jpg");
  $arrange2 = new Item("Arrangement_M",3500,"arrange02.jpg");
  $arrange3 = new Item("Arrangement_L",5500,"arrange03.jpg");
  $bouquet1 = new Item("Bouquet_S",2500,"bouguet01.jpg");
  $bouquet2 = new Item("Bouquet_M",3500,"bouguet02.jpg");
  $bouquet3 = new Item("Bouquet_L",5500,"bouguet03.jpg");
  $pot1 = new Pot("チューリップの花鉢",2000,"pot01.jpg");

// 配列に上記インスタンスを順番に入れる
  $items = array($arrange1,$arrange2,$arrange3,$bouquet1,$bouquet2,$bouquet3,$pot1);

// setOrderCountメソッドの確認：引数は３
  $arrange1 ->setOrderCount(3);

?>