<?php
/*
 Bir sınıf içerisinde methodlar geriye sınıfın kendisini döndürdüğünde -> ile devam ederek ardına zincirleme olarak başka bir method daha alabilirler.
 */

class islem{

    public $sayi1;
    public $sayi2;

    public $toplam;
    public $fark;
    public $carpim;
    public $bolum;

    public function topla(){
        $this->toplam = $this->sayi1 + $this->sayi2;
        return   $this; //zincirleme olsun diye, sınıfın kendisini dönderiyoruz.
        // böylece sınıfın içerisindeki diğer methodları da zincirleme şeklinde kullanabiliyoruz.
    }
    public function cikar(){
        $this->fark = $this->sayi1 - $this->sayi2;
        return   $this;
    }
    public function carp(){
        $this->carpim = $this->sayi1 * $this->sayi2;
        return   $this;
    }
    public function bol(){
        $this->bolum = $this->sayi1 / $this->sayi2;
        return   $this;
    }
    public function goster(){
        echo  $this ->toplam . '<br>';
        echo  $this ->fark . '<br>';
        echo  $this ->carpim . '<br>';
        echo  $this ->bolum . '<br>';
    }
}

$islem = new islem();

$islem->sayi1 = 10;
$islem->sayi2 = 5;

echo $islem->topla()->cikar()->carp()->bol()->goster();