<?php

// 
// データ定義用ファイル
// 

// クラス定義ファイルitemclass.phpの読み込み
require_once('itemclass.php');


// データ定義
// Itemクラスのインスタンス
  $arrange1 = new Item("Arrangement_S");
  $arrange2 = new Item("Arrangement_M");
  $bouquet1 = new Item("Bouquet_S");
  $bouquet2 = new Item("Bouquet_M");

// 配列に上記インスタンスを順番に入れる
  $items = array($arrange1,$arrange2,$bouquet1,$bouquet2);


?>