<?php
    // Menuクラスを定義
    class Item {

    }
 
// Menuクラスのインスタンス
    $arrange = new Item();
    $bouquet = new Item();

// インスタンスのnameプロパティに名前を代入
    $arrange->name="Arrangement";
    $bouquet->name="Bouquet";

// インスタンスのnameプロパティをecho
    echo $arrange->name;
    echo '<br>';
    echo $bouquet->name;


?>
