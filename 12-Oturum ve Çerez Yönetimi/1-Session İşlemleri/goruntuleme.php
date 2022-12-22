<?php

session_start();
//isset bir değişkenin var olup olmadığını kontrol eder.
if (isset($_SESSION['kullanici']['isim'])){
    echo 'Merhaba '. $_SESSION['kullanici']['isim'] . ' Hoşgeldiniz.' ;
    echo '<pre>';
    print_r($_SESSION);
}else{
    echo 'Lütfen oturum açınız.';
}

?>