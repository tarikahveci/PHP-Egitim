<?php
$sonuc = rename('test.txt','yeni/test2.txt');
if ($sonuc){
    echo 'Dosya başarıyla tekrar isimlendirildi.';
}else{
    echo 'Bir hata oluştu';
}
//rename fonksiyonu boolin tipi(true ya da false) bi değer gösterir.
//Hem taşımak hem ismini değiştirmek
//rename('text.txt','b/c/text2.txt');