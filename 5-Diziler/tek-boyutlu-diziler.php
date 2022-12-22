<!--
Diziler

array() = []
-->
<?php
// $a = array('elma','armut');  =   $a = ['elma','armut']


$meyveler = ['elma', 'armut', 'şeftali', 'kayısı', 'nar'];

echo "<pre>"; //google'de çıktı olarak alt alta görmek için

print_r($meyveler); //tüm diziyi çağırdık. echo ile dizi çağıramıyoruz

var_dump($meyveler); //bu şekilde çağırarak daha detaylı çıktı görebiliriz

echo $meyveler[1]; //dizideki 2.ifadeyi çağırdık. tekli ifade olduğundan echo ile çağırabildik

?>
<hr>
<?php
$isimler = [
    'isim1' => 'Tarık',
    'isim2' => 'Memo',
];
print_r($isimler);
echo $isimler['isim1'];
?>
<hr>
<?php
$ben = [
    'isim' => 'Tarık',
    'soyisim' => 'KAHVECİ',
    'yas' => 26,
];
var_dump($ben);
?>
