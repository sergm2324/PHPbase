<pre>
<?php
/*
 Задание 6.
*С помощью рекурсии организовать функцию возведения числа в степень.
 * Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
 * Отрицательные можно не делать. При желании сделайте фукнцию анонимной и организуйте рекурсию через замыкание.
*/

// вариант через обычную функцию:
function power($val, $pow)
{
    if ($pow > 0) {  //4>0
        return $val * power($val, $pow - 1);
    } else {
        return 1;
    }
}

;

echo power(2, 5) . PHP_EOL;

// вариант через анонимную функцию и замыкания:
$powerAn = function ($val, $pow) use (&$powerAn) {
    if ($pow > 0) {  //4>0
        return $val * $powerAn($val, $pow - 1);
    } else {
        return 1;
    }
};
echo $powerAn(2, 5) . PHP_EOL;


/*
 Задание 7.
*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты
*/

function endWordHours($hours, $one, $two, $five)
{
    if (($hours % 10 == 1) && ($hours % 100 != 11)) {
        return $one;
    } else if ((($hours % 10 == 2) || ($hours % 10 == 3) || ($hours % 10 == 4)) && ((int)($hours / 10) % 10 != 1)) {
        return $two;
    } else {
        return $five;
    }
}

function endWordMinutes($minutes, $one, $two, $five)
{
    if (($minutes % 10 == 1) && ($minutes % 100 != 11)) {
        return $one;
    } else if ((($minutes % 10 == 2) || ($minutes % 10 == 3) || ($minutes % 10 == 4)) &&
        ((int)($minutes / 10) % 10 != 1)) {
        return $two;
    } else {
        return $five;
    }
}


$putHour = 21;
$putMinute = 43;
echo('Текущее время: ' . $putHour . ' '.endWordHours($putHour, 'час', 'часа', 'часов') . ' '.$putMinute.
  ' '.  endWordMinutes($putMinute, 'минута', 'минуты', 'минут'));