<?php
echo '<pre>';
//Dizi içerisinde dizi yapabiliriz
$hayvanlar=[
    'Etobur Hayvanlar'=>[
        'Ormanda Yaşayanlar'=>['Aslan','Kaplan','Çita'],
        'Şehirde Yaşayanlar'=>['Köpek','Kedi']
    ],
    'Otobur Hayvanlar'=>['Koyun','Keçi','İnek']
];
print_r($hayvanlar);
echo $hayvanlar['Etobur Hayvanlar']['Ormanda Yaşayanlar'][0];