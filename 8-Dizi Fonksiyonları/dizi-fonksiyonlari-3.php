<!--
in_array();
Bir dizide bir değerin varlığını araştırır.
-->
<br>
<?php
echo '<pre>'; //diziler chrome içinde düzgün görünsün diye
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Irix var";
}
if (in_array("mac", $os)) {
    echo "Mac var";
}
?>
<!--
array_shift();
Dizini başlangıcından bir eleman çıkarır.
-->
<br>
<?php
$deste = array("as", "papaz", "kız", "vale");
$kart = array_shift($deste);
print_r($deste);
?>
<!--
array_pop();
Dizinin sonundaki elemanı diziden çıkartır.
-->
<br>
<?php
$depo = array("portakal", "muz", "elma", "ahududu");
$meyve = array_pop($depo);
print_r($depo);
?>
<!--
array_slice();
Bir dizinin belli bir bölümünü döndürür
-->
<br>
<?php
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // çıktısı: "c", "d", "e"
$output = array_slice($input, -2, 1);  // çıktısı: "d"
$output = array_slice($input, 0, 3);   // çıktısı: "a", "b", "c"
?>
<!--
array_sum();
Bir dizideki değerlerin toplamını hesaplar.
-->
<br>
<?php
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";
?>
<!--
array_product();
Bir dizideki değerlerin çarpımını bulur.
-->
<br>
<?php
$a = array(2, 4, 6, 8);
echo "çarpım(a) = " . array_product($a) . "\n";
echo "çarpım(array()) = " . array_product(array()) . "\n";
?>
<!--
array_unique();
Diziden yinelenen değerleri siler.
-->
<br>
<?php
$girdi = array("a" => "yeşil", "kırmızı", "b" => "yeşil", "mavi", "kırmızı");
$sonuç = array_unique($girdi);
print_r($sonuç);
?>
<!--
array_values();
Bir dizinin tüm değerlerini döndürür.
-->
<br>
<?php
$dizi = array("beden" => "XL", "renk" => "sarı");
print_r(array_values($dizi));
?>
<!--
array_push();
Belli sayıda elemanı dizinin sonuna ekler.
-->
<br>
<?php
$küme = array("elma", "armut");
array_push($küme, "muz", "portakal");
print_r($küme);
?>
<!--
array_unshift();
Bir dizinin başlangıcına bir veya daha fazla eleman ekler.
-->
<br>
<?php
$liste = array("ayva", "muz");
array_unshift($liste, "elma", "armut");
print_r($liste);
?>
<!--
array_keys();
Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür.
-->
<br>
<?php
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));
?>