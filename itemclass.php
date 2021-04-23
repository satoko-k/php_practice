<?php
// 
// クラスの定義
// 
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

?>

