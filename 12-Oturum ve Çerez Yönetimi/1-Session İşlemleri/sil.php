<?php

session_start();
session_destroy();

//header fonksiyonu ile, istenilen işlem yapıldıktan sonra gösterilecek sayfayı belirtiriz.
header('Location: goruntuleme.php');
?>