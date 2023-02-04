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
echo '<br>';
$ucaklar = [
    'buyuk ucaklar'=>[
        'savas ucakları'=>[
            '1.ucak'=>'f16',
            '2.ucak'=>'f35',
            '3.ucak'=>'f22'
        ],
    ],
    'kucuk ucaklar'=>[
        'gezi ucakları','ilaçlama uçakları'
    ],
];
print_r($ucaklar);