<!--
Static Kullanımı
Bir fonksiyonun çalışması bittiğinde içerisinde tanımlı olan değişkenler yok edilir yani ölürler.
Fonksiyonun bir sonraki kullanımında tanımlı olan değişkenlerin eski değerleri kaybolmuş olur.
Eğer fonksiyonun ikinci kez yada daha sonraki kullanımlarında içerisindeki değişkenlerin eski değerlerinin kaybolmasını istemiyorsanız
 o değişkenleri statik (static) olarak tanımlamanız gerekmektedir.
Bu sayede değişkenlerin eski değerlerine ulaşabilirsiniz.
-->
<?php
//Static OLMAYAN
function counter(){
    $count = 1;
    echo $count;
    $count++;
}
counter();
counter();
counter();
counter();
//Sonuç: 1111
echo '<hr>';
//Static OLAN
function counterStatic(){
    static $count = 1;
    echo $count;
    $count++;
}
counterStatic();
counterStatic();
counterStatic();
counterStatic();
//Sonuç: 1234
?>