<?php
//Write a script that counts the number of seconds in an hour, in a day, in a month.

function calcSecondsHour($data)
{
    $minute = 60;
    $hour = $minute * $minute;
    $result = $hour * $data;
    echo 'in hour ' . ' = ' . $result . ' seconds' . "<br>";
}

function calcSecondsDay($data)
{
    $minute = 60;
    $hour = $minute * $minute;
    $day = 24 * $hour;
    $result = $day * $data;
    echo 'in day ' . ' = ' . $result . ' seconds' . "<br>";
}

function calcSecondsMonth($data)
{
    $minute = 60;
    $hour = $minute * $minute;
    $day = 24 * $hour;
    $month = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y')) * $day;
    $result = $month * $data;
    echo 'in month ' . ' = ' . $result . ' seconds' . "<br>";
}

calcSecondsHour(1);
calcSecondsDay(1);
calcSecondsMonth(1);


//Create three variables - hour, minute, second. Use them to display the current time in the format 'hour:minute:second'.
$seconds = date('s');
$minute = date('i');
$hour = date('H');
echo $hour . ':' . $minute . ':' . $seconds . "<br>";


//Create a variable, assign a number to it. Square this number (which means you need to multiply it by itself). Bring it to the screen.

$number = 15;
$result = $number ** 2;
echo $result . "<br>";

//Modify this code to use the =, -=, *=, /= operators. The number of lines of code should not change.
//$var = 47;
//$var = $var + 7;
//$var = $var - 18;
//$var = $var * 10;
//$var = $var / 20;
//echo $var;
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var . "<br>";

//Modify this code to use the .= operator. The number of lines of code should not change.
/*
$text = 'Я';
$text = $text.' хочу';
$text = $text.' знать';
$text = $text.' PHP!';
echo $text;*/

$text = 'Я';
$text = sprintf("%s", $text . ' хочу');
$text = sprintf("%s", $text . ' знать');
$text = sprintf("%s", $text . ' PHP!');
echo $text . "<br>";

/*Modify this code to use the and -- operators. The number of lines of code should not change.

$var = 10;
$var = $var1;
$var = $var1;
$var = $var - 1;
echo $var;*/

$var = 10;
$var++;
$var++;
$var--;
echo $var . "<br>";

/*Modify this code to use the , -- , =, -=, *=, /= operators. The number of lines of code should not change.

$var = 10;
$var = $var7;
$var = $var1;
$var = $var - 1;
$var = $var12;
$var = $var * 7;
$var = $var - 15;
echo $var;*/

$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;