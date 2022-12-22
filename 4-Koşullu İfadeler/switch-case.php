<?php
$i = 3;

/** if ve elseif = case komutuna denk geliyor ,,,,, else=default  komutuna denk geliyor */
/*
  switch ($degisken) {
    case koşul1:
        echo "koşul 1 sağlandı";
        break;
    case koşul2:
        echo "koşul 2 sağlandı";
        break;
    default:
        echo "koşul 1 ve koşul 2 sağlanmadı";
    }
 */

/** buradaki if else kullanımıyla alttaki switch-case kullanımı aynı sonucu verir.
if ($i == 0) {
echo "i eşittir 0";
} elseif ($i == 1) {
echo "i eşittir 1";
} elseif ($i == 2) {
echo "i eşittir 2";
} else {
echo "else çalıştı"
}
 **/
switch ($i) {
    case 0:
        echo "i eşittir 0";
        break;
    case 1:
        echo "i eşittir 1";
        break;
    case 2:
        echo "i eşittir 2";
        break;
    default:
        echo "default çalıştı";
        break;
}
?>