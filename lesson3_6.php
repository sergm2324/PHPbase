<?php
/*
 Задание 6.
В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
Необходимо представить пункты меню как элементы массива и вывести их циклом.
Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
Попробовать реализовать через рекурсию.
*/

//обычное меню
$arr_menu = [
    'index.php' => 'Меню1',
    '1' => 'Меню2',
    '2' => 'Меню3',
    '3' => 'Меню4',
];

function get_menu($arr)
{
    $result = "<ul>";
    foreach ($arr as $key => $value) {
        $result .= "<li><a href='{$key}'>{$value}</a></li>";
    }
    $result .= "</ul>";
    return $result;
}

echo get_menu($arr_menu);

echo "------------------------<br/>";

//вложенное меню без рекурсии
$arr_menulevel = [
    '#' => 'Меню1',
    [
        '#' => 'Меню1_1',
        '1' => 'Меню1_2',
        '2' => 'Меню1_3',
        '3' => 'Меню1_4',
    ],
    '1' => 'Меню2',
    '2' => 'Меню3',
    '3' => 'Меню4',
];

    echo "<ul>";
    foreach ($arr_menulevel as $key => $value) {
        if (is_array($value)) {
            echo "<ul>";
            foreach ($value as $key2 =>$punct) {
                echo "<li><a href='{$key2}'>{$punct}</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<li><a href='{$key}'>{$value}</a></li>";
        }

    }
    echo "</ul>";

echo "------------------------<br/>";
//вложенное меню с рекурсией

function get_menulevel($arr){
    echo "<ul>";
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            get_menulevel($value);
        } else {
            echo "<li><a href='{$key}'>{$value}</a></li>";
        }
    }
    echo "</ul>";
}

get_menulevel($arr_menulevel);
