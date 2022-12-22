<?php
/*
Abstract(Soyutlama) Kullanımı
Soyutlanmış sınıflar içerisinde soyut methodlar barındırır.
Soyutlanmış sınıftan türetilen sınıflar soyut sınıf içerisinde ki soyut methodları bulundurmak zorundadır.


Özellikleri

Soyut methodlar ve sabitler içerebilir.
Normal methodlar, özellikler ve sabitler içerebilir.
public, protected ve private olarak tanım yapılabilir.
Aynı sınıf sadece bir abstract sınıftan türetilebilir.
*/

abstract class Urun
{
    public $fiyat;
    public $vergi;
    public $urunAdi;

    abstract public function urunAdi($urunAdi);

    abstract public function urunVergi($vergi);

    abstract public function urunFiyat($fiyat);

    public function urunEkle()
    {
        //normalde burada database'e kayıt yapmamız lazım. Ama o konuya henüz gelmedik. O yüzden burada sadece yazdırma işlemi yaptık.
        echo $this->urunAdi . ' isimli ürün KDV(' . $this->vergi . '%) dahil ' . ($this->fiyat + (($this->fiyat / 100) * $this->vergi)) . ' eklendi.';
    }

}

class Icecek extends Urun
{

    public function urunAdi($urunAdi)
    {
        $this->urunAdi = $urunAdi;
    }

    public function urunVergi($vergi)
    {
        $this->vergi = $vergi;
    }

    public function urunFiyat($fiyat)
    {
        $this->fiyat = $fiyat;
    }

}


class Tekstil extends Urun
{

    public function urunAdi($urunAdi)
    {
        $this->urunAdi = $urunAdi;
    }

    public function urunVergi($vergi)
    {
        $this->vergi = $vergi;
    }

    public function urunFiyat($fiyat)
    {
        $this->fiyat = $fiyat;
    }

}

$Icecek = new Icecek();
$Icecek->urunAdi('Kola');
$Icecek->urunVergi(18);
$Icecek->urunFiyat(10);
$Icecek->urunEkle();

echo '<hr>';

$Icecek = new Tekstil();
$Icecek->urunAdi('T-short');
$Icecek->urunVergi(12);
$Icecek->urunFiyat(80);
$Icecek->urunEkle();