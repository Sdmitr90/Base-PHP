<!--  6. В имеющемся шаблоне сайта заменить статичное меню (ul – li)
 на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом.
 Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать. -->

 <?php
$menu = [
    [
        "title" => "Главная",
        "href" => "/"
    ],
    [
        "title" => "Каталог",
        "href" => "/catalog/",
        "items" => [
            [
                "title" => "Товар для дома",
                "href" => "/catalog/prod_home/"
            ],
            [
                "title" => "Товары для дачи",
                "href" => "/catalog/prod_cot/",
                "items" => [
                    [
                        "title" => "Садовые",
                        "href" => "/catalog/prod_cot/garden/"
                    ],
                    [
                        "title" => "Инструменты",
                        "href" => "/catalog/prod_cot/instruments"
                    ]
                ]
            ]
        ]
    ],
    [
        "title" => "Корзина",
        "href" => "/basket/"
    ],
];

$result = "<ul>";
$result .= menu($menu);
$result .= "</ul>";

echo $result;


function menu($menu_array){
    $result = "";

    foreach($menu_array as $item){
        $result .= "<li><a href='{$item['href']}'>{$item['title']}</a>";

        if(isset($item["items"])){
            $result .= "<ul>";
            $result .= menu($item["items"]);
            $result .= "</ul>";
        }

        $result .= "</li>";
    }

    return $result;
}