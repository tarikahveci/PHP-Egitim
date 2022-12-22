<!--
$a = 3;
$b = 4;

echo $a == $b; // Sonuç: false   BİRBİRİNE EŞİT MİDİR? 2 eşittir '2' der
echo $a === $b; // Sonuç: false  BİRBİRİYLE AYNI MIDIR? 2 aynı değildir '2' der
echo $a != $b; // Sonuç: true    BİRBİRİYLE EŞİT DEĞİL MİDİR?
echo $a !== $b; // Sonuç: true   BİRBİRİYLE AYNI DEĞİL MİDİR?
echo $a < $b; // Sonuç: true     A KÜÇÜKTÜR B'DEN
echo $a > $b; // Sonuç: false    A BÜYÜKTÜR B'DEN
echo $a <= $b; // Sonuç: true    A KÜÇÜK EŞİTTİR B'YE
echo $a >= $b; // Sonuç: false   A BÜYÜK EŞİTTİR B'YE

echo $a <=> $b; // Sonuç: -1     MEKİK. A KÜÇÜK EŞİTSE VE BÜYÜKSE.
1 0 -1 VAR. EŞİTSE 0, A BÜYÜKSE 1, B BÜYÜKSE -1

-->
<?php
$a = 3;
$b = 4;

var_dump($a == $b);

echo "<br>";

var_dump($a === $b);

echo "<br>";

var_dump($a != $b);

echo "<br>";

var_dump($a !== $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a > $b);

echo "<br>";

var_dump($a <= $b);

echo "<br>";

var_dump($a >= $b);

echo "<br>";

var_dump($a <=> $b);

echo "<br>";
?>