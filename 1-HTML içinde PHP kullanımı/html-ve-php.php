<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Başlık1</h1>

<p>Buraları php yorumlayıcısı çözümlemiyor.
    Php yorumlayıcının çözümlemesi için php etiketini başlatmamız ve sonlandırmamız lazım,
    içine yazdıklarımızı çözümler</p>

<?php echo "<p>Php etiketi içerisinde oldugundan php çözümledi burayı</p>" ?>
<?= "İçerik 2"; ?>
<?php echo 'içerisindeki yazıda çift tırnak varsa "bu şekilde" , echo komutunu tek tırnakla çalıştırrız ki çakışmasın' ?>

<script>alert('<?= "script içinde de phpyi kullanabiliriz." ?>')</script>
</body>
</html>