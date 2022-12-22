<?php
/*

Bir sınıf başlatıldığında çalışacak ilk method __construct()   bu kurucu method'tur
son method __destruct() methodlarıdır.                         bu yıkıcı
 method'tur


public function __construct(){
    echo 'SINIF BAŞLADI';
}


public function __destruct(){
    echo 'SINIF SONLANDI';
}
*/

class Deneme{
    public function __construct(){
        echo 'Kurucu Method Çalıştı' . '<br>';
    }

    public function __destruct(){
        echo '<hr>' . 'Yıkıcı Method Çalıştı' . '<hr>';
        //aynı sayfada aşağıda da bir örnek olduğu için. __destruck fonksiyonu en son çalıştığı için, yine en son çalıştı
        //normalde bi sayfada 1tane __construct ve 1tane __destruct olur.
        //Eğitim olduğu için farklı kullanımları görmek amacıyla yaptığımız için biz burada 2şer tane kullandık
    }

    public function bizimFonksiyon(){
        echo 'Bizim fonksiyon çalıştı' . '<br>';
    }
}
$Deneme = new Deneme();
echo $Deneme->bizimFonksiyon() . '<br>';

?>
<!--
__construct()'a parametre gönderilebilir,
Gönderilen parametreleri __construct' sınıfı başlatırken iletebiliriz.
-->
<?php

class User{
    private $isim;
    private $soyisim;

    public function __construct($isim,$soyisim){
        $this->isim = $isim;
        $this->soyisim = $soyisim;
    }

    public function __destruct(){
        $this->isim = null;
        $this->soyisim = null;
    }

    public function isimYaz(){
        return $this->isim . ' ' . $this->soyisim;
    }
}
$User = new User('Tarık','KAHVECİ');
echo $User->isimYaz();
?>
