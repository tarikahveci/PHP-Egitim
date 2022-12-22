<!--
Öz yinelemeli fonksiyonlar yani kendi kendini çağıran fonksiyonlardır.
-->
<?php
$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Back-end Teknolojileri'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Front-End Teknolojileri'
    ],
    [
        'id' => 3,
        'parent' => 0,
        'name' => 'Mobil Uygulama'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'name' => 'PHP'
    ],
    [
        'id' => 5,
        'parent' => 1,
        'name' => 'NodeJS'
    ],
    [
        'id' => 6,
        'parent' => 4,
        'name' => 'Laravel'
    ],
    [
        'id' => 7,
        'parent' => 4,
        'name' => 'Codeigniter'
    ],
    [
        'id' => 8,
        'parent' => 2,
        'name' => 'Javascript'
    ],
    [
        'id' => 9,
        'parent' => 8,
        'name' => 'VueJS'
    ],
    [
        'id' => 10,
        'parent' => 8,
        'name' => 'AngularJS'
    ]
];
function categoryList(array $categories, int $catParent = 0) : string
{
    $html = '<ul>';
    foreach ($categories as $ct)
        if ($ct['parent'] == $catParent): //parent'i yukarıda tanımladığımız değer yani 0'a eşit olanları çağırıyoruz önce
            $html .= '<li>' . $ct['name'];

            $html .= categoryList($categories, $ct['id']); //onların altına da, yukarıda yazdırdığın kategorinin ID'sine sahip olan,, parent'i o olanları da çağırdık
//çünkü 2.paremetre yukarıda tanımlandığı gibi parent'i gösteriyor. biz (üst kategorinin)parent'i (alt kaegorinin)ID'ye eşit olanları çağırdık
            $html .= '</li>';
        endif;
    $html .= '</ul>';
    return $html;
}

echo categoryList($categories);
