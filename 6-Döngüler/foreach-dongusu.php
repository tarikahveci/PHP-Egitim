<!--
Foreach yapısı diziler üzerinde yineleme yapmayı kolaylaştırmaktadır.

Foreach yalnızca diziler ve nesneler için kullanılabilir;
farklı veri türünde veya ilklendirilmemiş bir değişken ile kullanmak istediğinizde hata verir.
-->

<?php
$adlar = [
    'Tarık',
    'Fatma',
    'Mustafa',
    'Sabah'
];
foreach ($adlar as $rs){
    echo $rs.'<br>';
}
$isimler = [
    'isim1' =>'Tarık',
    'isim2' =>'Fatma',
    'isim3' =>'Mustafa',
    'isim4' =>'Sabah'
];
foreach ($isimler as $anahtar => $tk){
    echo $tk.'<br>';
}

foreach ($isimler as $anahtar => $tk){
    echo $anahtar.' - '. $isimler[$anahtar].'<br>';
}
//$isimler[$anahtar] = $tk
?>