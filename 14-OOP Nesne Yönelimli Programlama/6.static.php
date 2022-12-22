<?php
/*
Sınıf özelliklerinin ya da methodların static olarak tanımlanması,
o özelliklerin ve yöntemlerin sınıfı başlatmadan kullanılabilmesini sağlar.

Static methodlar Ram'de tutulur ve daha performaslıdır.
*/

class Customer{
    public static string $name;
    public string $surname;

    public static function customerFullName(): string //string bi ifade gelecek demek
    {
        return self::$name; //burada this yapmıyoruz self yapıyoruz static'te
    }

    public function getSurname(): string
    {
        return $this->surname;
    }
}

$Customer = new Customer();
Customer::$name = 'TARIK';
echo Customer::customerFullName();
?>

<!--
Static methodlar Ram'de tutulduğu için sınıfı tekrar başlattığımızda statik olarak güncellenen verilere ulaşabiliriz.
-->
<?php
class Customer2{
    public static string $name2;

    public function getName(): string
    {
        return self::$name2;
    }
}
Customer2::$name2 = '<br>'. 'Tarık Kahveci';
$Customer2= new Customer2();
echo $Customer2->getName();
?>
