<!--
Request Kullanımı ($_REQUEST)

Kullanımı $_GET, $_POST kullanımı gibidir.
Hem $_POST verilerini hem $_GET verilerini hem de $_COOKIE verilerini görebiliriz.
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

<form action="request.php?memleket=Adana" method="post">
    <!-- burada manuel olarak memlekete adana gönderdik. bunu normalde get methoduyla yapabilirdik-->
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