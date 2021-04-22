<?php
    // Menuクラスを定義
    class Item {
        public $name;

        // コンストラクタを定義
        public function __construct(){
        echo "１つの商品が作られました";        
  }
  
        // helloメソッドを定義
        public function hello(){
         echo "私はItemクラスのインスタンス名".$this ->name."です";

        }

    }
    
    // Menuクラスのインスタンス
        $arrange = new Item();
        echo '<br>';
        $bouquet = new Item();
        echo '<br>';


    // インスタンスのnameプロパティに名前を代入
        $arrange->name="Arrangement";
        $bouquet->name="Bouquet";

    // インスタンスのnameプロパティをecho
        echo $arrange->name;
        echo '<br>';
        echo $bouquet->name;
        echo '<br>';

    // インスタンス$arrangeなどに対してhelloメソッドを呼び出す
        $arrange -> hello();
        echo '<br>';
        $bouquet -> hello();

?>
