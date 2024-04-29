<?php
    $number1 = 10;
    $number2 = 3;

    //산술연산
    echo $number1 + $number2 . "<br>";
    echo $number1 - $number2 . "<br>";
    echo $number1 * $number2 . "<br>";
    echo $number1 / $number2 . "<br>";
    echo $number1 % $number2 . "<br>";

    //증감 연산
    echo $number++ . "<br>";
    echo $number-- . "<br>";
    echo ++$number . "<br>";
    echo --$number . "<br>";

    //비교 연산
    echo ($number1 < $number2) . "<br>";
    echo ($number1 > $number2) . "<br>";
    echo ($number1 <= $number2) . "<br>";
    echo ($number1 >= $number2) . "<br>";
    echo ($number1 == $number2) . "<br>";
    echo ($number1 != $number2) . "<br>";

    //논리 연산
    echo ($number1 and $number2) . "<br>";
    echo ($number1 or $number2) . "<br>";

    //비트 연산
    echo ($number1 & 1) . "<br>";
    echo ($number1 | 1) . "<br>";
    echo ($number1 ^ 1) . "<br>";
    echo (~$number1) . "<br>";
    echo ($number1 >> 1) . "<br>";
    echo ($number1 << 1) . "<br>";
?>