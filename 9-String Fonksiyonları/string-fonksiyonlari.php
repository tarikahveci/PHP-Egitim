<!--
strlen($metin);
Verilen metnin karakter sayısını yani uzunluğunu verir.
Uzunluğu bayt olarak verir. Türkçe karakterler 2 bayt yer kapladığı için;
mb_strlen($metin) dersek yani multi bayt strlen dersek, böyle ingilizce olmayan harfleri 2bayt olan harfleri de 1 bayt olarak sayar.
-->
<?php
$metin = 'Şahin';
//echo strlen($metin); //dersek ekrana 6 yazar. Çünkü ş harfi ingilizce değil ve o yüzden 2bayt.
echo mb_strlen($metin); //dersek ekrana 5 yazar. Çünkü her harfi 1 bayt olarak alıyor.
?>
<hr>
<!--
explode($ayirici,$metin);
Verilen metni belirtilen ayırıcı karaktere göre parçalar ve bir dizi olarak gönderir.
-->
<?php
echo '<pre>';
$expl = 'Tarık Kahveci';
print_r(explode(' ', $expl))
?>
<hr>
<!--
implode($ayirici,$dizi);
Bu fonksiyon explode() fonksiyonunun aksine bir dizideki değerleri belirtilen ayırıcıyla birleştirerek biraraya getirir.
-->
<?php
echo '<pre>';
$arr = explode(' ', $expl);
echo implode('-', $arr)
?>
<hr>
<!--
str_split($metin,$sayi);
Verilen metni verilen sayı kadar karakter gruplarına bölerek bir diziye dönüştürür.
Eğer sayı belirtilmezse, metni harf harf bölerek bir diziye atar.
-->
<?php
echo '<pre>';
$isim = 'Tarık Kahveci';
//$array = str_split($isim, 2); //2şer 2şer ayır ve dizi yap. Ama bu ingilizce olmayan karakterleri 2 bayt sayar yine
$array = mb_str_split($isim, 2); //şimdi herşeyi 1 bayt olarak aldı. harfleri de boşlukları da
print_r($array);
?>
<hr>
<!--
ltrim($metin), rtrim($metin), trim($metin);
Verilen metnin sırasıyla solundaki(left-ltrim),
sağındaki(right-rtrim) ve her iki tarafındaki(trim) gereksiz boşlukları temizler.
-->
<?php
$boslukluIsim = '  Tarık   Kahveci   ';
//$boslukluIsim = ltrim($boslukluIsim); //sol taraftaki boşluğu temizledi
//$boslukluIsim = rtrim($boslukluIsim); //sağ taraftaki boşluğu temizledi
$boslukluIsim = trim($boslukluIsim); // metnin hem sağ hem sol taraflarındaki boşlukları temizledi
echo strlen($boslukluIsim);
?>
<hr>
<!--
substr($metin,$baslangic,$uzunluk);
Bir metnin belirtilen başlangıç konumundan itibaren istenilen uzunluktaki bir parçasını gönderir.
-->
<?php
$sbstr = 'Tarık Kahveci';
$sbstr = substr($sbstr, 2, 6);
echo $sbstr;
?>
<hr>
<!--
strtolower($metin), strtoupper($metin);
Verilen metni sırasıyla küçük harfe ve büyük harfe dönüştürür.
-->
<?php
$strl = 'Tarık Kahveci';
$strl = strtolower($strl);
echo $strl . '<br>';
$strl = strtoupper($strl);
echo $strl;
?>
<hr>
<!--
mb_strtolower() ve mb_strtoupper();
Verilen metni sırasıyla küçük harfe ve büyük harfe dönüştürür. Türkçe karakter sorunu yaratmaz.
-->
<?php
$mbstrl = 'Tarık Kahveci';
$mbstrl = mb_strtolower($mbstrl);
echo $mbstrl . '<br>';
$mbstrl = mb_strtoupper($mbstrl);
echo $mbstrl;
?>
<hr>

<!--
ucfirst($metin), ucwords($metin);
Bu iki fonksiyon sırasıyla verilen metnin ilk karakterini (ucfirst) ve
metindeki her kelimenin ilk karakterini(ucwords) büyük harfe dönüştürür.
-->
<?php
$ucfw = 'tarık kahveci';
$ucfw = ucfirst($ucfw);
echo $ucfw . '<br>';
$ucfw = ucwords($ucfw);
echo $ucfw;
?>
<hr>

<!--
str_replace($kaynak,$hedef,$metin);
Verilen metindeki kaynak karakterlerin yerine hedef karakterileri koyarak değiştirme yapar.
Bu fonksiyon küçük/büyük harf duyarlıdır.
-->
<?php
$strrpl = 'Tarık Baba Kahveci';
$strrpl = str_replace('Baba', 'King', $strrpl);
echo $strrpl;
?>
<hr>

<!--
nl2br($metin);
String ifadelerde kullanılan ve alt satıra geçmeyi sağlayan \n yerine kaynak kodda <br> yazmak için kullanılır.
Sadece çift tırnak içerisinde kullanılır
-->
<?php
$nlbr = "Tarık Kahveci \n Bir alt satıra iner bu yazı";
echo nl2br($nlbr);
echo '<hr>';
$nlbr = "Tarık Kahveci \t Bir TAB boşluk bırakır";
echo nl2br($nlbr);
?>

<!--
md5($metin), sha1($metin);
Sırasıyla aldığı metne karşılık gelen karmaşık md5 ve sha1 kodlarını verir.
md5 ve sha1 aynı şeyi yapar. sha1 daha uzun daha karmaşık bir şifreleme yapar.
-->
<?php
$sifre='1234567';
echo md5($sifre);
?>
<hr>
<?php
$password='1234567';
$db_password='fcea920f7412b5da7be0cf42b8c93759';
if (md5($password) == $db_password){
    echo 'Şifreniz Doğrudur';
}
else{
    echo 'Şifrenizi hatalı girdiniz';
}
?>
<hr>
<!--
strstr();
Bir dizgede belirtilen karekterden sonrasını döndürür.
-->

<?php
$email = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // @example.com basar
?>


