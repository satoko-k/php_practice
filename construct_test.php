<?php
    // Menuクラスを定義
    class Item {
        public $name;

        // コンストラクタを定義
        public function __construct($name){
            // nameプロパティに引数の$nameを代入
            $this ->name =$name;
         }
  
        // helloメソッドを定義
        public function hello(){
         echo '私は'.$this->name.'です';

        }

    }
    
    // Itemクラスのインスタンス
        $arrange = new Item("Arrangement");
        echo '<br>';
        $bouquet = new Item("Bouquet");
        echo '<br>';


    // インスタンスのnameプロパティに名前を代入
        // $arrange->name="Arrangement";
        // $bouquet->name="Bouquet";

        
     // インスタンス$arrangeなどに対してhelloメソッドを呼び出す
        $arrange -> hello();
        echo '<br>';
        $bouquet -> hello();

?>



