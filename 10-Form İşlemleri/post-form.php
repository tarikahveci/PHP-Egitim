<!--
$_POST bir Süper global değişkendir.

Süper global değişkenler, her zaman tüm kapsamlarda bulunan yerleşik değişkenlerdir.
PHP $_POST, method="post" ile bir HTTP POST isteği gönderdikten sonra verileri toplamak için kullanılır.
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>


<form action="get.php" method="post">
    İsim: <input type="text" placeholder="İsim" name="isim">
    Soyisim: <input type="text" placeholder="Soyisim" name="soyisim">
    <hr>
    <label>Diller</label><br>
    <label>PHP</label>
    <input value="PHP" type="checkbox" name="dil[]"><br>
    <!-- bunlar bi dizi olduğu için yani birden çok seçim yapılabileceği için bu şekilde belirttik name kısmında.
    [] içerisine bi değer yazarak key'ini kendimi belirleyebiliriz. mesela
     dil['a']
      dil['b']
      dil['c'] yapsaydık. key'leri otomatik 0 1 2 yapmak yerine a b c yapar-->
    <label>NodeJS</label>
    <input value="NodeJS" type="checkbox" name="dil[]"><br>
    <label>JS</label>
    <input value="JS" type="checkbox" name="dil[]"><br>
    <button type="submit">Gönder</button>
</form>

</body>
</html>