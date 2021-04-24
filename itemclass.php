<?php
// 
// クラスの定義
// 
class Item {
    // プロパティの定義 (publicからpribateに変更：クラスの外からアクセスできなくなる)
    private $name;
    private $price;
    private $image;

    // コンストラクタを定義
    public function __construct($name,$price,$image){
        // nameプロパティに引数の$nameを代入
        $this ->name =$name;
        // priceプロパティに引数の$priceを代入
        $this ->price=$price;
        // imageプロパティに引数の$imageを代入
        $this ->image=$image;
     }

    // // helloメソッドを定義
    // public function hello(){
    //  echo '私は'.$this->name.'です';
    // }

    // ゲッターを定義する
    public function getName(){
        return $this-> name;
    }
    public function getImage(){
        return $this-> image;
    }

    //価格を税込みにする（getTaxIncludedPriceメソッドを定義 ）
    public function getTaxIncludedPrice(){            
        return floor($this->price * 1.1);            
      }

}

?>

