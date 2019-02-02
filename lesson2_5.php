<?php
/*
 Задание 5.
ВАЖНОЕ! Написать функцию renderTemplate возвращающую шаблон в виде текста, вынесите весь повторяющийся
код из шаблона страниц (doctype, menu, header, footer) в отдельный шаблон (layout), сделайте отдельный
шаблон страницы с приветствием. Обеспечьте формирование результирующей страницы используя только функцию
renderTemplate, т.е. в layout должен вставиться подшаблончик страницы с приветствием.
*/

function renderTemplate($page, $content = '')
{
    // если внутри подшаблона нет переменных, то можно и так:
    //$content = $content . ".php";
    //$content = file_get_contents($content);
    // если же есть переменные, то так:
    ob_start();
    $content = $content . ".php";
    include $content;
    $content = ob_get_clean();

    $fileName = $page . ".php";
    include $fileName;
    return ob_get_clean();
}

echo renderTemplate('main', 'about');


