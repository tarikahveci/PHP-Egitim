<!--
$_GET bir Süper global değişkendir.

Süper global değişkenler, her zaman tüm kapsamlarda bulunan yerleşik değişkenlerdir.
PHP $_GET, bir HTTP GET isteği gönderdikten sonra verileri toplamak için kullanılır.

GET ve POST methodunun farkı,
1.
post'ta verilermiz arka planda gönderilirken
get kullandığımızda slug kısmında açık şekilde gönderilir
2.
get kullandığımızda slug kısmında elle veriyi değiştirebiliriz.
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get</title>
</head>
<body>

<form action="post.php" method="get">
    İsim: <input type="text" placeholder="İsim" name="isim">
    Soyisim: <input type="text" placeholder="Soyisim" name="soyisim">
    <hr>
    <label>Diller</label><br>
    <label>PHP</label>
    <input value="PHP" type="checkbox" name="dil[]"><br>
    <label>NodeJS</label>
    <input value="NodeJS" type="checkbox" name="dil[]"><br>
    <label>JS</label>
    <input value="JS" type="checkbox" name="dil[]"><br>
    <button type="submit">Gönder</button>
</form>

</body>
</html>


