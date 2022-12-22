<!--
Toplama (+)
Çıkartma (–)
Çarpma (*)
Bölme (/)
Mod (%)
Aritmetik operatörleri kullanırken matematikte olduğu gibi işlem sırası vardır.
Önce Parantez içleri, çarpma/bölme ve toplama çıkarma işlemleri sırasıyla uygulanır.
-->
<?php
//Toplama Operatörü:
$num1 = 4; // "num1" değişkenine 4 sayısını atar
$num2 = 3; // "num2" değişkenine 3 sayısını atar
$total = $num1 + $num2; // Sonuç 7 olur
$toplam = $num1 + 2; // Sonuç 6 olur

echo $toplam;
?>
<?php
//Çıkarma Operatörü:
$num1 = 8; // "num1" değişkenine 8 değerini atar
$num2 = 2; // "num2" değişkenine 2 değerini atar
$result = $num1 - $num2; // Sonuç 6 Olur
$result = $num1 - 1; // Sonuç 7 olur.

echo $result;
?>
<?php
//Çarpma Operatörü:
$num1 = 2; // "num1" değişkenine 2 değerini atar
$num2 = 8; // "num2" değişkenine 82 değerini atar
$result = $num1 * $num2; // Sonuç 16 Olur
$result = $num1 * 2; // Sonuç 4 olur.

echo $result;
?>
<?php
//Bölme Operatörü:
$num1 = 6; // "num1" değişkenine 6 değerini atar
$num2 = 3; // "num2" değişkenine 2 değerini atar
$result = $num1 / $num2; // Sonuç 2 olur
$result = $num1 / 2; // Sonuç 3 olur.

echo $result;
?>
<?php
//Mod (Kalan) Operatörü:
$num1 = 5; // "num1" değişkenine 5 değerini atar
$num2 = 3; // "num2" değişkenine 2 değerini atar
$result = $num1 % $num2; // Sonuç 2 olur
$result = $num1 % 4; // Sonuç 1 olur.

echo $result;
?>
