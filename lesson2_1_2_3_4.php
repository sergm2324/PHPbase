<pre>
<?php
/*
 Задание 1.
Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.
*/
$a = rand(-100, 100);
$b = rand(-100, 100);
var_dump($a);
var_dump($b);

if ($a >= 0 && $b >= 0) {
    echo("Оба положительные, выводим разность: " . ($a - $b));
} else if ($a < 0 && $b < 0) {
    echo("Оба отрицательные, выводим произведение: " . ($a * $b));
} else if (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)) {
    echo("Разных знаков, выводим сумму: " . ($a + $b));
};


/*
 Задание 2.
Присвоить переменной $а значение в промежутке [0..15].
С помощью оператора switch организовать вывод чисел от $a до 15.
*/


$a = rand(0, 15);
var_dump($a);

switch ($a) {
    case 0:
        echo $a++;
    case 1:
        echo $a++;
    case 2:
        echo $a++;
    case 3:
        echo $a++;
    case 4:
        echo $a++;
    case 5:
        echo $a++;
    case 6:
        echo $a++;
    case 7:
        echo $a++;
    case 8:
        echo $a++;
    case 9:
        echo $a++;
    case 10:
        echo $a++;
    case 11:
        echo $a++;
    case 12:
        echo $a++;
    case 13:
        echo $a++;
    case 14:
        echo $a++;
    case 15:
        echo $a;
        break;
}

/*
 Задание 3.
Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.
*/

$x = rand(0, 10);
$y = rand(0, 10);
var_dump($x);
var_dump($y);

function add($a, $b)
{
    return $a + $b;
}

function subtraction($a, $b)
{
    return $a - $b;
}

function division($a, $b)
{
    if ($b == 0) {
        return 'Деление на ноль!';
    } else {
        return $a / $b;
    }
}

function multiplication($a, $b)
{
    return $a * $b;
}

echo ('Результат сложения: ').add($x, $y).PHP_EOL;
echo ('Результат вычитания: ').subtraction($x, $y).PHP_EOL;
echo ('Результат деления: ').division($x, $y).PHP_EOL;
echo ('Результат умножения: ').multiplication($x, $y).PHP_EOL;

/*
 Задание 4.
Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

/**
 * Функция выполняет одну из арифметических операций с параметрами в зависимости от вида операции
 * @param {number} arg1 - первый операнд
 * @param $arg2
 * @param {number} arg2 - второй операнд
 * @param {string} operation - операция, которую нужно выполнить, может быть 4 варианта:
 * add (сложение), subtraction (вычитание), division (деление), multiplication (умножение)
 * @return number отображает результат на экране консоли.
  */
function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
        case 'add':
            return add($arg1, $arg2);
        case 'subtraction':
            return subtraction($arg1, $arg2);
        case 'division':
            return division($arg1, $arg2);
        case 'multiplication':
            return multiplication($arg1, $arg2);
        default:
            return 0;
    }
}


echo ('Результат сложения: '). mathOperation($x,$y,'add').PHP_EOL;
echo ('Результат вычитания: ').mathOperation($x,$y,'subtraction').PHP_EOL;
echo ('Результат деления: ').mathOperation($x,$y,'division').PHP_EOL;
echo ('Результат умножения: ').mathOperation($x,$y,'multiplication').PHP_EOL;




