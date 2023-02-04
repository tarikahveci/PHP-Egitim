<!--
Birleştirme Operatörü

Birleştirme operatörü nokta(.) ile gösterilir.
İki ifadenin arasında yer alarak sağındaki ifade ile solundaki ifadeleri birbirine birleştirir.


Atama Operatörü

Atama operatörümüz matematikten de tanıdığımız eşittir (=) sembolüdür.
 Bu operatör sağındaki değeri solundaki değişkene atar.
-->

<?php
//BİRLEŞTİRME OPERATÖRÜ
$isim = 'Tarık';
$soyisim = 'Kahveci';
$yas = 26;
echo 'Merhaba, benim ismim '. $isim.' soyismim '.$soyisim.'. Şuan '.$yas.' yaşımdayım.';
// Ekrana "Merhaba, benim ismim Tarık soyismim Kahveci. Şuan 27 yaşımdayım." sonucunu yazar.

?>

<?php
//ATAMA OPERATÖRÜ
/*
 * +=
 * -=
 * *=
 * /=
 * %=
 * .=
 */
$a=3;
$b=3;
$c=3;
$d=3;
$e=3;
$f=3;

echo $a += 2; // 3+2 ekrana 5 yazar
echo '<br>';
echo $b -= 2; // 3-2 ekrana 1 yazar
echo '<br>';
echo $c *= 2; // 3*2 ekrana 6 yazar
echo '<br>';
echo $d /= 2; // 3/2 ekrana 1.5 yazar
echo '<br>';
echo $e %= 2; // 3/2'den kalan, ekrana 1 yazar
echo '<br>';
echo $f .= 2; // 3 ve 2yi birleştiriyor, ekrana 32 yazar
echo '<br>';


$adsoyad = 'Tarık';
echo $adsoyad .= ' Kahveci';

echo '<br>';


$html  = '<div>';
//bu aşamada html'in değeri <div>
$html .=    '<h1>Patika.Dev</h1>';
//Önceki aşamadan <div> geldi. Üzerine bu aşamadan <h1>Patika.Dev</h1> geldi
// ve toplamda <div> <h1>Patika.Dev</h1> oldu
$html .= '</div>';
//burda da az öncekinin üzerine </div> geldi
// ve toplamda <div> <h1>Patika.Dev</h1> </div> oldu.


echo $html; // Ekrana "Patika.dev" olarak basar.
?>
