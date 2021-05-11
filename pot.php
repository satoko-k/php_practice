<?php

 require_once('itemclass.php');

 class Pot extends Item{
    private $type;
    private $size;
  
    // Menuクラスの__construct　オーバーライド
      public function __construct($name, $price, $image,$type,$size) {
      
      parent::__construct($name, $price, $image);
      $this->type = $type;
      $this->size = $size;
      
      self::$count++;
      
    }
    public function getType() {
      return $this->type;
    }
    public function getSize(){
        return $this->size;
    }
    
    public function setType($type) {
      $this->type = $type;
    }
    public function setSize($size){
        $this->size = $size;
    }
  }

 


?>
