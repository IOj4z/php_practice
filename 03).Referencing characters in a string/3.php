<?php
//10).Создайте переменную $text и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.
$text = 'abcde';
echo $text[0] . "<br>";
echo $text[2] . "<br>";
echo $text[4] . "<br>";

//11). Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.
//Create a $text variable and give it the value 'abcde'. Referring to the individual characters of this string, display the character 'a', the character 'c', the character 'e'.
$text = 'abcde';
$text = str_replace('a', '!', $text);
echo $text . "<br>";


//12).Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.
//Create a variable $num and give it the value '12345'. Find the sum of the digits of this number.

$num = '12345';
echo strlen($num) . "<br>";