<!--
FOR döngüsü Belirli ifadelerle kod bloklarını tekrar tekrar çalıştırmak için kullanılır.
döngümüz başladığında ilk ifademiz bir kez çalışıyor
döngümüz her döndüğünde 2.ifademizi yani koşulumuzu kontrol ediyor
her döngümüzün sonunda 3.ifademiz çalışıyor.

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

1den başladı 10a kadar olan tam sayıları ekrana 1er artırarak yazdı
-->
<?php
for ($i = 0; $i <= 10; $i++) {
    echo $i;
}
?>
<hr>
<?php
$dizi = [
    'Tarık',
    'Memo',
    'Serkan',
    'Kaan',
    'Seyit',
    'Mert'
];
for ($i = 0; $i <= 5; $i++) {
    echo $dizi[$i].'<br>';
}
?>
