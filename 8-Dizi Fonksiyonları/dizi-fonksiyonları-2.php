<!--
shuffle();
Bir diziyi karıştırır.
-->

<?php
echo '<pre>'; //diziler chrome içinde düzgün görünsün diye
$sayılar = range(1, 20, 1); //step yani kaçar kaçar artsın. bişe yazmazsak 1er 1er artar. örnek olsun diye 1 yazdım.
shuffle($sayılar);
foreach ($sayılar as $sayı) {
echo "$sayı ";
}
?>
<hr>
<!--
array_combine();
Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur.
-->
<?php
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);
?>
<hr>
<!--
array_count_values();
Bir dizideki tüm değerleri sayar.
-->
<?php
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
?>
<hr>
<!--
array_flip();
Bir dizideki anahtarlarla değerleri yer değiştirir.
-->
<?php
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);
print_r($flipped);
?>
<hr>
<!--
array_key_exists();
Belirtilen anahtar veya indis dizide var mı diye bakar.
-->
<?php
$dizi = array('ilk' => 1, 'ikinci' => 4);
if (array_key_exists('ilk', $dizi)) {
    echo "'ilk' elememanı dizide mevcut";
}
?>
<hr>
<!--
array_map();
Belirtilen dizilerin elemanlarını geriçağırım işlevini uygular.
-->
<?php
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);
?>
<hr>
<!--
array_filter();
Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir.
-->
<?php
function tek($var)
{
    //tamsayı girdi tek sayı mı diye bakar
    return $var & 1;
}

function cift($var)
{
    //tamsayı girdi çift sayı mı diye bakar
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo " Tek:\n";
print_r(array_filter($array1, "tek"));
echo "Çift:\n";
print_r(array_filter($array2, "cift"));
?>
<hr>
<!--
array_merge();
Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur.
-->
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>
<hr>
<!--
array_rand();
Bir diziden belli sayıda rasgele anahtar döndürür.
-->
<?php
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);  //random olarak 2 tane eleman gösterecek
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
?>
<hr>
<!--
array_reverse();
Diziyi tersine sıralayıp döndürür.
-->
<?php
$girdi  = array("php", 4.0, array("green", "red"));
$normal = array_reverse($girdi);
$korunan = array_reverse($girdi, true);

print_r($girdi);
print_r($normal);
print_r($korunan);
?>
<hr>
<!--
array_search();
Bir dizide belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür.
-->
<?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;
?>