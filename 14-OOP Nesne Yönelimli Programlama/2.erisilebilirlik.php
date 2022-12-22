<!--
public
Her yerden erişilebilir.

private
Sadece sınıf içerisinden erişilebilir.

protected
Dışarıdan erişilmez.
Sınıf içinde erişilebilir.
Miras alma yoluyla kullanılabilir.
-->
<?php

class User{
    public $isim;
    private $soyisim;
    protected $eposta;

    //kısayoldan get ve set tanımlama:
    //bu sınıfın içerisinde önce sol click->sonra sağ click->Generate->Getters and Setters->istediğimizi seçiyoruz
    //hepsini public olarak tanımladı.



    public function setIsim($isim)
        //bir isim değeri gönderiyoruz ve içerisindeki isim özelliğine bunu eşitliyor.
        //daha sonra bi alttaki getIsim fonksiyonunda bu isim verisini bize getiriyor.
        //bu hem public hem private hem protected için yani hepsi için geçerli.
    {
        $this->isim = $isim;
    }

    public function getIsim()
    {
        return $this->isim;
    }


    public function setSoyisim($soyisim)
    {
        $this->soyisim = $soyisim;
    }


    public function getSoyisim()
    {
        return $this->soyisim;
    }


    public function setEposta($eposta)
    {
        $this->eposta = $eposta;
    }


    public function getEposta()
    {
        return $this->eposta;
    }

}


$User=new User();
//sınıfımızın içerisine bu değerleri belirliyoruz. set ile tanımlıyoruz get ile kullanıyoruz.
$User->setIsim('Tarık');
$User->setSoyisim('KAHVECİ');
$User->setEposta('tarikahveci@gmail.com');

//bunları kullanmak için de get ile kullanıyoruz.
echo $User->getIsim() . '<br>';
echo $User->getSoyisim() . '<br>';
echo $User->getEposta() . '<br>';
