<?php
// 
// クラスの定義
// 
class Item {
    // プロパティの定義 (publicからpribateに変更：クラスの外からアクセスできなくなる)
    protected $name;
    protected $price;
    protected $image;
    protected $orderCount = 0; //初期値０
    // クラスプロパティ
    protected static $count = 0; //初期値0

    // コンストラクタを定義
    public function __construct($name,$price,$image){
        // nameプロパティに引数の$nameを代入
        $this ->name =$name;
        // priceプロパティに引数の$priceを代入
        $this ->price=$price;
        // imageプロパティに引数の$imageを代入
        $this ->image=$image;
        // クラスプロパティ　countに１をたす
        self::$count++;
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

    // ゲッターgetOrderCount
    public function getOrderCount(){
        return $this-> orderCount;
    }
    // セッターsetOrderCountを定義
    public function setOrderCount($orderCount){
        $this->orderCount = $orderCount;
    }



    //価格を税込みにする（getTaxIncludedPriceメソッドを定義 ）
    public function getTaxIncludedPrice(){            
        return floor($this->price * 1.1);            
      }

    // getTotalPriceメソッドを定義
    public function getTotalPrice(){
        return $this->getTaxIncludedPrice() * $this->orderCount;
    }

    // getCount
    public static function getCount(){
        return self :: $count;
    }





}

?>

