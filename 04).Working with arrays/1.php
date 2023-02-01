<?php
//1). Создайте массив $arr=['a', 'b', 'c']. Выведите значение массива на экран с помощью функции var_dump().
$arr = ['a', 'b', 'c'];
var_dump($arr);

echo "<br>";
//2). С помощью массива $arr из предыдущего номера выведите на экран содержимое первого, второго и третьего элементов.
$arr = ['a', 'b', 'c'];
echo $arr[1] . "<br>";
echo $arr[2] . "<br>";


//3). Создайте массив $arr=['a', 'b', 'c', 'd'] и с его помощью выведите на экран строку 'a+b, c+d'.
$arr = ['a', 'b', 'c', 'd'];
echo $arr[0] . " + " . $arr[1] . ', ' . $arr[2] . " + " . $arr[3] . "<br>";

//4). Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент массива на второй, а третий элемент на четвертый. Результаты сложите, присвойте переменной $result. Выведите на экран значение этой переменной.
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result . "<br>";

//5). Заполните массив $arr числами от 1 до 5. Не объявляйте массив, а просто заполните его присваиванием $arr[] = новое значение.
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;

//Create an array $arr. Display the element with the key 'c'.
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo $arr['c'] . "<br>";
// Create an array $arr. Find the sum of the elements of this array.
$arrs = ['a' => 1, 'b' => 2, 'c' => 3];
echo array_sum($arrs) . "<br>";
// Create an array of salaries $arr. Display the salary of Petya and Kolya.
$arr = ['Kolya' => '1000$', 'Vasya' => '500$', 'Peter' => '200$'];
echo 'Kolya - ' . $arr['Kolya'] . "<br>" . 'Peter - ' . $arr['Peter'] . "<br>";

// Create an associative array of days of the week. The keys in it should be the numbers of days from the beginning of the week (Monday - should have a key of 1, Tuesday - 2, etc.). Display the current day of the week.
//Now let the number of the day of the week be stored in the $day variable, for example, it contains the number 3. Print the day of the week corresponding to the value of the $day variable.
$days_of_week = ['1' => 'Понедельник', '2' => 'Вторник', '3' => 'Среда', '4' => 'Четверг', '5' => 'Пятница', '6' => 'Суббота', '7' => 'Воскресенье'];
echo $days_of_week[date('w')] . "<br>";

//Create a multidimensional array $arr. Use it to display the words 'joomla', 'drupal', 'green', 'red' on the screen.

$arrgs = [
    'cms' => ['joomla', 'wordpress', 'drupal'],
    'colors' => ['blue' => 'blue', 'red' => 'red', 'green' => 'green']
];

echo $arrgs['cms'][0] . "<br>";
echo $arrgs['cms'][2] . "<br>";
echo $arrgs['colors']['red'] . "<br>";
echo $arrgs['colors']['green'] . "<br>";

//Create a 2D array. The first two keys are 'ru' and 'en'. Let the first key contain an element that is an array of the names of the days of the week in Russian, and the second - in English. Use this array to output Monday in Russian and Wednesday in English (let Monday be the first day).

$days = [
    'ru' => ['1' => 'Понедельник', '2' => 'Вторник', '3' => 'Среда', '4' => 'Четверг', '5' => 'Пятница', '6' => 'Суббота', '7' => 'Воскресенье'],
    'en' => ['1' => 'Monday', '2' => 'Tuesday', '3' => 'Wednesday', '4' => 'Thursday', '5' => 'Friday', '6' => 'Saturday', '7' => 'Sunday']
];

echo $days['ru'][1] . "<br>";
echo $days['en'][3] . "<br>";

//Now let the $lang variable store the language (it takes one of the values either 'ru' or 'en' - either this or that), and the $day variable the number of the day. Print the day of the week corresponding to the $lang and $day variables as a word. That is: if, for example, $lang = 'ru' and $day = 3, then we'll output 'Wednesday'.

$lang = 'ru';
$day = 3;

echo $days[$lang][$day];