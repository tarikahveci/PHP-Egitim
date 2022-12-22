<?php
//Bir sınıfın özellik ve methodlarını başka bir sınıfa aktarmamıza olanak sağlar.
//parent:: kullanımı
//Sınıfımızda ve türetilen sınıfta aynı isimlerde özellik ve methodlara parent:: ile erişebiliriz.

class Hash{

    public function md5Hash($string){
        return md5($string);
    }
    public function sha1Hash($string){
        return sha1($string);
    }
}

class User extends Hash {
    //extend Hash yazarak,artık Hash sınıfından türetişmiş bir User sınıfına sahibiz.
    //Hash içerisinde tanımladığımız özelliklere ve methodlara User sınıfında kullanabiliyoruz.
    public $username;
    public $password;

    public function saveUser($username,$password){
        $this->username=$username;
        $this->password=$this->md5Hash($password); //Yukarıda Hash içerisinde tanımladığımız bu fonksiyonu burada kullanabildik.
    }

    public function showUser(){

        echo $this->username . '<br>';
        echo $this->password;
    }
}

$User = new User(); //sınıfı başlatıyoruz

$User-> saveUser('Tarık','123'); //yeni bir kullanıcı kaydediyoruz.

$User-> showUser(); //kullanıcı bilgilerini bize gösterecek.