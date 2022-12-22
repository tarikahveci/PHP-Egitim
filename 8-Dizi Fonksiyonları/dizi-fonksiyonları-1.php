<!--
print_r();
Bir değişkenin veya dizinin gösterimini ekrana basar.

var_dump();
Bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösterir.
Diziler ve nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.

explode();
Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir. (bir string ifadeyi array yapmamızı sağlar)
İlk olarak ifadedeki neyi kaldırıp birleştireceğimizi yazıyoruz.
2.olarak ayıracağımız istediğimiz diziyi yazıyoruz.


implode();
Dizi elemanlarını birleştirip bir dizge elde eder.  (bir array ifadeyi string yapmamızı sağlar)
İlk olarak hangi ifadeyi hangi karakterle birleşirebileceğimizi yazıyoruz.
2.olarak birleştirmek istediğimiz diziyi yazıyoruz.

count();
Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.

is_array();
Değişkenin bir dizi içerip içermediğine bakar. sonucu 1 verirse; demekki dizi içeriyor.
-->
<?php
$arr = [1,2,3,4,5,6,7];

print_r($arr);

echo "<br>";

var_dump($arr);

echo "<br>";

$dizge = implode('--', $arr);
echo $dizge;

echo "<br>";

$newArr = explode('--', $dizge);
print_r($newArr);

echo "<br>";

echo count($arr);

echo "<br>";

//count kullanım alanına bir örnek
for ($i = 0 ; $i <= count($arr)-1 ; $i++)
    echo $arr[$i];

echo "<br>";

echo is_array($arr);

echo "<br>";

$arr2 = '[1,2,3,4,5,6,7]';
if (is_array($arr2)){
    echo 'bu bir dizidir';
}else{
    echo 'bu bir dizi değildir.';
}