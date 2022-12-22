<?php
/*
Kullanılması zorunlu değildir.
Aynı isimli sınıfların ayırt edilmesini sağlar.
Geleneksel olarak anadizinden bulunduğu klasöre kadar uzanan hiyerarşik bir namespace tanımlanır.
*/

//Örnek olması için app diye klasör açtık içine controller ve view diye klasörler açtık.
//onların içine de home.php adında dosya açtık

require 'app/controller/home.php';
require 'app/view/home.php';

$Home= new app\controller\Home();

echo '<hr>';

$Home= new app\view\Home();