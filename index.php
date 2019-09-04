<?php

// ピカチュウの設計図が書かれたファイルの読み込み
require_once ('Pikachu.php');
require_once ('blacky.php');


// ピカチュウの設計図をもとに、実態を作成
// インスタンス化  $名前 = new クラス名 (); 
$Pikachu1 = new Pikachu (200, 100);

// クラスをもとに作ったピカチュウの操作
// プロパティとかメソッドの使い方

// ピカチュウ1にHP100を設定する
$Pikachu1->hp = 100;

// ピカチュウ1にMP50を設定する
$Pikachu1->mp = 50;

// 画面にピカチュウのHPとMPを表示
echo 'ピカチュウのHPは';
echo $Pikachu1->hp;
echo '<br>';

echo 'ピカチュウのMPは';
echo $Pikachu1->mp;
echo '<br>';

// メソッド（振る舞い）の実行
$Pikachu1->thunderVolt();
$Pikachu1-> ironTail();

$Pikachu2 = new Pikachu (400, 800);

$Pikachu2 ->hp = 500;
$Pikachu2 ->mp = 1500;

echo 'ピカチュウ1のHPは';
echo $Pikachu1->hp;
echo '<br>';

echo 'ピカチュウ2のHPは';
echo $Pikachu2->hp;
echo '<br>';



$blacky1 = new blacky ();

$blacky1 ->hp = 160;
$blacky1 ->mp = 100;

$blacky1 ->poison();

// ピカチュウ3の作成
$pikachu3 = new Pikachu(90, 80);

echo 'ピカチュウ3のHPは';
echo $pikachu3 ->hp;

echo "<br>";
echo "<br>";


echo "<hr>";

// ここから課題 9/3
require_once ('homework.php');


$chara1 = new Character (100,120,"勇者");

echo $chara1 ->name;
echo " HP";
echo $chara1 ->hp;
echo " MP";
echo $chara1 ->mp;
echo "<br>";

$chara1 ->attack();
$chara1 ->heal ();

echo "<hr>";

$chara2 = new Character (50, 300, "魔法使い");

echo $chara2 ->name;
echo " HP";
echo $chara2 ->hp;
echo " MP";
echo $chara2 ->mp;
echo "<br>";

$chara2 ->magic ();
echo "<hr>";

//  +a

$hero1 = new Hero (200,300, "ゆうしゃ1");
$king1 = new King (800, "炎", 'まおう1');

echo "-------". $hero1 ->name . "のステータス-------";
echo "<br>";
echo "HP" . $hero1->hp;
echo "<br>";
echo "MP" . $hero1->mp;
echo "<br>";
echo "<br>";
$target = $hero1;

echo "-------". $king1 ->name . "のステータス-------";
echo "<br>";
echo "HP" . $king1->hp;
echo "<br>";
echo "属性 " . $king1->tp;
echo "<hr>";
$opponent = $king1;

$hero1 ->slash ($opponent);
echo "<br>";
echo "<br>";

$king1 ->devilattack($target);
echo "<br>";
echo "<br>";

$hero1 ->firemagic($opponent);
echo "<br>";
echo "<br>";

$king1 ->devilattack($target);
echo "<br>";
echo "<br>";

$hero1->superheal();
