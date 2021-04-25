<?php

// 
// データ定義用ファイル
// 

// クラス定義ファイルitemclass.phpの読み込み
require_once('itemclass.php');


// データ定義
// Itemクラスのインスタンス
  $arrange1 = new Item("Arrangement_S",2500,"arrange01.jpg");
  $arrange2 = new Item("Arrangement_M",3500,"arrange02.jpg");
  $bouquet1 = new Item("Bouquet_S",2500,"bouguet01.jpg");
  $bouquet2 = new Item("Bouquet_M",3500,"bouguet02.jpg");

// 配列に上記インスタンスを順番に入れる
  $items = array($arrange1,$arrange2,$bouquet1,$bouquet2);

// setOrderCountメソッドの確認：引数は３
  $arrange1 ->setOrderCount(3);

?>