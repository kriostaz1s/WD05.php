<?php 
echo "Исходный Массив";
echo "<br>";
$arr1 = array();
for ($i = 0; $i < 20; $i++ ){
    $per = rand(0,3);
    if( $per === 1){
      array_unshift ($arr1, ['another one bytes the dust']);
    }else{
      array_unshift ($arr1, rand(-100, 100));
    }
};
echo "<pre>";
print_r($arr1);
echo "<pre>";
echo "<br>";
echo "//1. Найти все положительные элементы массива";
echo "<br>";
//1
for ($i = 0; $i < count($arr1); $i++ ){
    if(gettype ($arr1[$i]) == 'integer'){
    if( $arr1[$i] > 0){
      echo "$arr1[$i] ";
    }}
};
echo "<br>";
echo "//2 найти элементы массива, которые больше среднеарифметического значения и вывести их ИНДЕКСЫ";
echo "<br>";
//2
for ($i = 0; $i < count($arr1); $i++ ){
    if(gettype ($arr1[$i]) == 'integer'){
        if($arr1[$i] > (array_sum($arr1) / count($arr1)) ){
        echo "$i ";
}}};
echo "<br>";
echo "//3. Вывести элементы массива, которые больше предыдущего";
echo "<br>";
//3
for ($i = 1; $i < count($arr1); $i++ ){
    if(gettype ($arr1[$i]) == 'integer'){
        if($arr1[$i] > $arr1[$i - 1]) {
        echo "$arr1[$i] ";}
    }else{
        $i += 2;
    }
};
echo "<br>";
echo "//4. Определить , есть ли в массиве  повторяющиеся элементы";
echo "<br>";
//4
for ($i = 0; $i < count($arr1); $i++ ){
    for ($j = 1; $j < count($arr1); $j++ ){
    if(($arr1[$i] === $arr1[$j]) && ($i != $j)){
        echo "Есть повторяющееся элементы ";
        echo "$arr1[$i] ($i) $arr1[$j] ($j)";
        break;
    }elseif($i === (count($arr1)-1) && $j === (count($arr1)-1) ){
        echo "Нет повторяющихся элементов";
    }

}if(($arr1[$i] === $arr1[$j]) && ($i != $j)){
    break;
}
};
echo "<br>";
echo "//5. Удалить в массиве элементы, которые встречаются более двух раз";
//5
for ($i = 0; $i < count($arr1); $i++ ){
    $c = [$i];
    for ($j = 1; $j < count($arr1); $j++ ){
    if(($arr1[$i] === $arr1[$j]) && ($i != $j)){
        array_push ($c, $j);
    }
    }
    if(count($c) > 2){
        for ($j = 0; $j < count($c) ; $j++ ){
            unset($arr1[$c[$j]]);
    }
    }
};
echo "<br>";
print_r($arr1);
echo "<br>";
echo "//6. Определите, является ли массив двумерным";
echo "<br>";
//6
$c=0;
for ($i = 0; $i < count($arr1); $i++ ){
    if(gettype($arr1[$i]) == 'array'){
        $c++;
}};
if($c === count($arr1)){
    echo "Двумерный";
    echo "<br>";
}else{
    echo "Не двумерный";
    echo "<br>";
}
echo "//7. Вывести таблицу умножения";
echo "<br>";
//7
for ($i = 1; $i <= 10; $i++ ){
        echo '   ';
    for ($j = 1; $j <= 10; $j++ ){
        echo $i * $j, " ";
        if(($i < 10) && ($i >= 5) && ($j===1)){
            echo ' ';
    } if(($i < 5) && ($j===1)){
        echo ' ';
}if(($i === 4) && ($j===2)){
    echo ' ';
}
if(($i === 3) && ($j>=2) && ($j<=3)){
    echo ' ';
}
if(($i === 2) && ($j>=2) && ($j<=4)){
    echo ' ';
}
if(($i === 1) && ($j>=2) && ($j<=9)){
    echo ' ';
}
}
    echo "<br>";
}