<!--
Fonksiyonun dışında tanımladığımız bir değişkeni ya da dışarıdan aldığımız verileri database bağlantılarını falan,
global yazarak fonksiyon içerisinde tanımlamamız gerekir.
Bu sayede fonksiyonun dışında tanımlamış da olsak o değişkeni kullanabiliriz.
-->
<?php
$isim = 'Tarık';

function isimyaz() {
    global $isim; //burada global yazarak isim değişkenini tanımlamamış olsaydık;
                  //isim değişkeni fonksiyon içinde tanımlı olmadığından, fonksiyon bir sonuç vermezdi hata verirdi.
    return $isim;
}
echo isimyaz();
?>