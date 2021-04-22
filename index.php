<?php
    // Menuクラスを定義
    class Item {
        public $name;

        // コンストラクタを定義
        public function __construct($name){
            // nameプロパティに引数の$nameを代入
            $this ->name =$name;
         }
  
        // // helloメソッドを定義
        // public function hello(){
        //  echo '私は'.$this->name.'です';
        // }

    }
    
    // Itemクラスのインスタンス
        $arrange = new Item("Arrangement");
        $bouquet = new Item("Bouquet");

?>
<!-- php1行の時はname;の；は省略可 -->
<p><?php echo $arrange-> name; ?></p>
<p><?php echo $bouquet-> name ?></p>


