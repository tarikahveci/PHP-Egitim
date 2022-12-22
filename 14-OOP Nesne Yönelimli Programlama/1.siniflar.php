<?php

//Class Tanımlaması, harf veya alt çizgiyle başlar. Genel kullanımı diğer dillerde de
//olduğu gibi Büyük harfle başlatmaktır.

class User{
//laravel'de biz bunu Model' de yapıyorduk
    public $isim = 'Tarık KAHVECİ';
    const YAS = 26; // const ile sabit tanımlayabiliyoruz.
    public $toplam;

    public function isimYaz(){
        //laravel'de biz burayı Controller' de yapıyorduk
        return $this->isim  .'<br>';
        //$this değişkeni class'ı temsil eder.
        //$isim yerine isim kullandık çünkü class'ın kendi değişkeni.

    }

    public function topla($number1, $number2){
        $this->toplam = $number1+$number2;
        return $this->toplam;
    }

}

//Class'tan bir instance oluşturuyoruz. Bir kopya. Adı da Kullanici Olsun
$Kullanici = new User();

echo $Kullanici->isimYaz();

echo $Kullanici->topla(15,15)."<br>";
echo $Kullanici->toplam; //topla fonksiyonunun sonucunu toplamda tutuyor, toplamı döndürüyorduk.
//Daha sonra toplam'ı çağırdığımızda son sonucu tekrar görebiliyoruz. Çünkü hala bellekte duruyor.

echo '<br>';
echo User::YAS; //Sabitlere erişmek için sınıftan bir nesne türetmeye gerek yok.

?>
<!-- Daha gerçekçi bir örnek -->
<?php
class Users{
    public $ad;
    public $soyad;
    public $eposta;
    public $yas;

    public function addUser($ad,$soyad,$eposta,$yas) //method'umuza bu değerleri tanımladık.
    {
        //özelliklerimize bu değerleri atıyoruz.
        $this->ad = $ad;
        $this->soyad = $soyad;
        $this->eposta = $eposta;
        $this->yas = $yas;
    }
}
$Users = new Users(); //sınıfımızı başlatıyoruz
//artık bir kullanici ekleyebiliriz.
$Users->addUser('Tarık','Kahveci','tarikahveci@gmail.com',26);
//bu methodu çalıştırarak Users içerisindeki bütün özellikleri doldurmuş olduk.
//ve artık tüm Users özelliklerini tanımladığımız için, kullanabiliyoruz

echo '<br>'. $Users->ad . '<br>';
echo 'Hoşgeldiniz ' . $Users->ad . ' ' . $Users->soyad . ' Lordum. Eposta ve yaşınız: ' . $Users->eposta. ' ' . $Users->yas;