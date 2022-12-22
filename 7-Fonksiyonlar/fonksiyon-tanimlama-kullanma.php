<!--
Fonksiyonlar kısaca bir veya daha fazla komutun içinde yer aldığı yapılardır.

PHP'de fonksiyonları, yerleşik ve kullanıcı tanımlı olmak üzere ikiye ayırabiliriz:

Yerleşik fonksiyonlar: PHP'de önceden tanımlanmış olarak kullanıma hazır fonksiyonlardır.

Kullanıcı tanımlı fonksiyonlar: Geliştirici tarafından oluşturularak kullanılan fonksiyonlardır.

Fonksiyon isimleri bir harf ya da alt çizgi ile başlar.
-->
<?php
function topla($sayi1, $sayi2 = 30) {
    return  $sayi1 + $sayi2;
}
echo topla(10, 20);
//2sine de değer girersek bizim değerimizi alır. Ekrana 30 yazdırır

echo "<hr>";

echo topla(10);
//default olarak değer verdiğimiz bir ifadeyi boş bırakırsak, o default olarak verilen ifadeyi kullanır.
//ekrana 40 yazdırır