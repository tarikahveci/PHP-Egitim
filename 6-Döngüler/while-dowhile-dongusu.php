<!--
Önceden belirlenmiş koşul bozulana kadar döngü devam eder.
-->

<?php
//WHILE DÖNGÜSÜ
$i = 0;
while( $i < 10 ){
    echo $i.'Selam'.'<br>';
    $i++;
}
?>
<hr>

<?php
//DO WHILE DÖNGÜSÜ. WHILE DÖNGÜSÜNDEN FARKI; WHİLE DÖNGÜSÜNDE PARENTEZ İÇİNDE YAZDIĞIMIZI
//DO' DAN SONRA WHILE AÇIP YAZMAK
$a = 1;
do {
    echo $a.'Selam<br>';
    $a++;
} while ($a <= 5)
?>
