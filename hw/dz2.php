<?php
//1 Написать функцию, которая возводит число в указанную степень
function plov($numb, $sqr){
    for ($i = 1; $i < $sqr; $i++){
     $numb *= 2;
    };
    return($numb);
};
echo"<pre>";
print_r(plov(2,5));
echo"<pre>";
//2 Написать функцию, которая проверяет, являются ли все буквы в строке строчными
function stroch($str){
    if ($str === strtolower($str)){
    return('Строчные');
    }else{
    return('Не совсем');
    };
};
echo"<pre>";
print_r(stroch('Palmaliv moya lubov'));         //Работает только с латиницей
echo"<pre>";
//3  Написать функцию, которая генерирует массив указанной длинны со случайными значениями
function mass($arr, $len){
    for ($i = 0; $i < $len; $i++){
     array_push($arr,rand(-100, 100));
    };
    return($arr);
};
echo"<pre>";
print_r(mass($f = [], 6));
echo"<pre>";
//4 ф-ция, которая по номеру дня возвращает его название
function alcochol($day){
    switch ($day) {
        case 1:
            echo "Понедельник - день-бездельник";
            break;
        case 2:
            echo "Вторник - повторник";
            break;
        case 3:
            echo "Среда - тамада";
            break;
        case 4:
            echo "Четверг - я заботы все отверг";
            break;
        case 5:
            echo "Пятница - пьяница";
            break;
        case 6:
            echo "Суббота - неработа";
            break;
        case 7:
            echo "Воскресенье - день веселья";
            break;
    }
};
echo"<pre>";
print_r(alcochol(5));
echo"<pre>";
//5  Написать функцию которая выводит n-ое число Фибоначчи
function fibon($nomer){
    $fib = [0, 1];
    for ($i = 1; $i < $nomer; $i++){
     array_push($fib,$fib[$i] + $fib[$i-1]);
    };
    return($fib[$nomer - 1]);
};
echo"<pre>";
print_r(fibon(17));
echo"<pre>";

