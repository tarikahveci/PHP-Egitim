<!--
Bir ifadenin değerinin ve türünün ne olduğuna bakmak için var_dump() işlevini kullanabilirsiniz.
Hata ayıklama amacıyla bir değişkenin türünü öğrenmek için gettype() işlevini kullanın.

String "Tarık Kahveci" 'Test' '3' "2"
Integer 100 255
Float(Double) 2.5 ondalık sayı
Boolean(true, false)
Array(Dizi) ['a','b'], array(1,2)
Object(Nesne)
NULL
-->

<?php
$a= "Tarık";
$b = "3";
$c= 3;
$d= 3.3;
$e = true;
$f = [1,2,3];
$g = new stdClass();
$h = null;
echo gettype($a);
echo "<br>";
echo gettype($b);
echo "<br>";
echo gettype($c);
echo "<br>";
echo gettype($d);
echo "<br>";
echo gettype($e);
echo "<br>";
echo gettype($f);
echo "<br>";
echo gettype($g);
echo "<br>";
echo gettype($h);
echo "<br>";
echo var_dump($e);
?>