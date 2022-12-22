<!--
Anonim fonksiyonlar, isimsiz fonksiyonlardır.
Anonim fonksiyonlar tanımlanırken noktalı virgün ile biter.
-->
<?php
$topla= function ($num1, $num2){
    return $num1 + $num2;
};

echo $topla(1,2);

?>
<hr>
<?php
$islem = [
    'topla'=> function($a,$b){ return $a + $b;},
    'cikar'=> function($a,$b){ return $a - $b;},
    'bol'=> function($a,$b){ return $a / $b;},
    'carp'=> function($a,$b){ return $a * $b;},
];

echo $islem['topla'](10,5).'<br>';
echo $islem['cikar'](10,5).'<br>';
echo $islem['bol'](10,5).'<br>';
echo $islem['carp'](10,5).'<br>';
?>

<hr>

<?php
$islem = [
    'topla'=> function($a,$b){ return $a + $b;},
];
$number = [[1,2],[2,3],[3,4],[4,5]];

array_map(function ($e){
    global $islem;
    echo $e[0].'+'.$e[1].' =';
    $islem['topla']($e[0],$e[1]);
    echo '<br>';
}, $number);
?>
