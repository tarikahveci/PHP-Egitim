<!--
current();
Bir dizideki geçerli öğeyi döndür
end();
Bir dizinin dahili işaretçisini son elemanına ayarlar
next();
Bir dizinin dahili işaretçisini ilerletir
prev();
Dahili dizi işaretçisini geri alır.
-->
<?php
$arac = array('tabanvay', 'bisiklet', 'otomobil', 'uçak');
$kip = current($arac); // $kip = 'tabanvay';
$kip = next($arac);    // $kip = 'bisiklet';
$kip = current($arac); // $kip = 'bisiklet';
$kip = next($arac);    // $kip = 'otomobil';
$kip = prev($arac);    // $kip = 'bisiklet';
$kip = end($arac);     // $kip = 'uçak';
$kip = current($arac); // $kip = 'uçak';

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }
?>
<!--
reset();
Bir dizinin dahili göstericisini ilk elemana konumlar.
extract();
Bir dizideki değişkenleri simge tablosuna dahil eder
-->
<hr>
<?php

/* Dizinin wddx_deserialize tarafından döndürülen
   bir dizi olduğunu varsayalım */

$boyut = "büyük";
$dizi = array(
    "renk"  => "mavi",
    "boyut" => "orta",
    "sekil" => "küre");
extract($dizi, EXTR_PREFIX_SAME, "wddx");

echo "$renk, $boyut, $sekil, $wddx_boyut\n";

?>

<!--

asort();
Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar.
-->
<hr>
<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>
<!--
arsort();
Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan büyükten küçüğe doğru sıralar.
-->
<hr>
<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>
<!--
ksort();

Bir diziyi anahtarlarına göre küçükten büyüğe doğru sıralar.
-->
<hr>
<?php
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>
<!--
krsort();
Bir diziyi anahtarlarına göre büyükten küçüğe doğru sıralar.
-->
<hr>
<?php
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>