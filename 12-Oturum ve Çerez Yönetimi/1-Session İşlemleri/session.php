<?php
/*
//Tarayıcı kapatılana kadar oturum verilerimiz session içerisinde saklanır.

session_start(); //ile oturum başlatılır.

$_SESSION['session_anahtar'] = 'deger' ; //ile session ataması yapılır.

echo $_SESSION['session_anahtar'] ; //ile session değerine ulaşılır.

unset($_SESSION['session_anahtar']) ; //ile bir anahtara air session değeri silinir.

session_destroy(); //ile oturum sonlandırılır.
*/

//Session ve Cookie farkı; cookie'ler web sitesine giriş yapan kullanıcıların bilgisayarında saklanıyor.
//session ise bu veriler server'da saklanır

/*
 * BU İŞLEMLERİ YAPARKEN SLUG KISMINA ELLE SESSİON YAZIP GİRİŞ YAPIYORUZ. GORUNTULEME YAZIP BİLGİLERİ GÖRÜNTÜLÜYORUZ
 * SİL YAZIP OTURUM VERİLERİNİ SİLİYORUZ
 */
session_start();

$_SESSION ['kullanici'] = [
    'isim'=>'Tarık',
    'soyisim'=>'KAHVECİ',
    'yas'=>26,
    'email'=>'tarikahveci@gmail.com',
];