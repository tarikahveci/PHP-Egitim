<?php
/*
$name = $_POST['isim'];
$surname = $_POST['soyisim'];
echo $name . '' . $surname;

bu şekilde kullanarak tek tek yazabiliriz. ya da array_map kullanıp toplu işlem yaptırabiliriz.
array_map dizideki elemanları tek tek dönüyor bize. ve geriye dizi gösterir
 */

function filtre($p){
    return is_array($p) ? array_map('filtre',$p) : htmlspecialchars(trim($p)) ;
    //boşlukları silsin diye trim yazdık. istediğimiz gibi fonksiyon yazabiliriz. mesela dizi mi diye kontrol ettik is_array ile
    //ve htmlspecialchars ile bize gösterdiği sonuçta <h1> gibi şeyler istemedik, direkt onun uygulanmış halini yani başlık olarak büyük yazılı görmek istedik.
}

$dizi = array_map('filtre',$_POST);

echo '<pre>';
print_r($dizi);
?>