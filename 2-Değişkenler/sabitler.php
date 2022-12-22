<!--
Bir sabit define() işlevi kullanılarak tanımlanabilir. Bir sabit tanımlandıktan sonra asla değiştirilemez ve tanımsız yapılamaz.

Harf ve alt çizgi ile başlar.
Obje hariç tüm veri tiplerini tutabilir.
Sayı ile başlayamaz.
Türkçe karekter içerebilir.
Geleneksel olarak, sabit isimleri daima büyük harfle yazılır. kÜÇÜK DE YAZARIZ AMA STANDARDA UYGUN OLMAZ
-->

<?php

define('ISIM','Memo');
define('ISIM2','Tarık');
define('_SOYISIM','Alt çizgiyle de başlayabilir ama sayı ile başlayamaz' );
//değiken olmadığı için aynı sabite farklı bir tanımlama yapamayız. o yüzden 2.sine ISIM2 dedik. Sadece ISIM yazsak hata veriyor
echo ISIM;
echo ISIM2;
echo _SOYISIM;

?>