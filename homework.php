<?php

// Character
// 属性：プロパティともいう
// - HP
// - MP 
// - name
// 振る舞い：メソッドともいう（関数）
// - 斬る attack 5
// - 呪文 magic 10 mp -5
// - 回復 heal +10 mp -10

class Character
{



    public $hp;
    public $mp;
    public $name;

    public function __construct($hp, $mp, $name){
        $this ->hp = $hp;
        $this ->mp = $mp;
        $this ->name = $name;
    }

    function attack (){
        echo "斬る 5　ダメージ";
        echo "<br>";
    }

    function magic (){
        echo "魔法　10　ダメージ MPが5減った";
        echo "<br>";
    }

    function heal (){
        echo "回復　HPを10回復　MPが10減った";
        echo "<br>";
    }

}


//  +a---------------------------------------

// ゆうしゃ
// $hp HP
// $mp MP
// $name name

// 回転斬り
// 炎魔法
// 超回復

class Hero
{
    public $hp;
    public $mp;
    public $name;

    public function __construct($hp, $mp, $name){
        $this ->hp = $hp;
        $this ->mp = $mp;
        $this ->name =$name;
    }

    function slash ($opponent){
        echo $this ->name. "の大回転斬り";
        echo "<br>";
        echo $opponent->name. "に10のダメージ";
        $opponent->hp -= 10;
        echo "<br>";
        echo $opponent->name ."のHPは".$opponent->hp;
    }

    function firemagic($opponent){
        echo $this ->name. "の炎魔法";
        echo "<br>";
        echo $opponent->name. "に20のダメージ";
        echo "<br>";
        $opponent ->hp -= 20;
        echo $opponent->name ."のHPは".$opponent->hp;
        echo "<br>";
        echo "MPを20消費";
        $this ->mp -= 20;
        echo "<br>";
        echo "残りのMPは" . $this ->mp;
    }

    function superheal (){
        echo $this ->name. "は超回復した";
        echo "<br>";
        echo "体力が30回復した";
        echo "<br>";
        $this ->hp += +30;
        echo "残りのHPは" . $this ->hp;
        echo "<br>";
        echo "MPを20消費";
        $this ->mp -= 20;
        echo "<br>";
        echo "残りのMPは" . $this ->mp;

    }
    


}


// まおう
// $hp HP
// $tp Type

// devilattack

class King
{

    public $hp;
    public $tp;

    public function __construct($hp, $tp, $name){
        $this ->hp = $hp;
        $this ->tp = $tp;
        $this ->name = $name;
    }

    function devilattack($target)
    {
        echo $this->name.'のじゃあくなこうげき';
        echo "<br>";
        echo $target->name. "は20のダメージ";
        $target->hp -= 20;
        echo "<br>";
        echo "残りのHPは" . $target ->hp;

    }


}

 


