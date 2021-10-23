<!DOCTYPE html>
<html lang="en">
<head>
    <title>5 Задание</title>
    <meta charset="UTF-8">
    <style type="text/css">
       * {
  margin: 0;
  padding: 0;
}
html,
body {
  height: 100%;
}
.wrapper {
  position: relative;
  min-height: 100%;
}
.content {
  display: flex;
  flex-direction:column;
  padding-bottom: 90px;
}
h4:nth-child(n + 2){
   margin-top: 50px;
}
.footer {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 80px;
  text-align: center;
}
    </style>
</head>
<body>
<div class="wrapper">

<div class="content">
<h4>Задание №1. <br> Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу: <br>
- если $a и $b положительные, вывести их разность;<br>
- если $а и $b отрицательные, вывести их произведение;<br>
- если $а и $b разных знаков, вывести их сумму;<br>
Ноль можно считать положительным числом.<br></h4>

<?php

$a = 2;
$b = -3;

if ($a >= 0 and $b >= 0){
  echo difference($a,$b). ': разность а и б; '.'<br>';
} else if ($a < 0 and $b < 0) {
   echo multiplication($a,$b). ': произведение а и б; '.'<br>';
} else {
   echo summ($a,$b). ': сумма а и б; '.'<br>';
}

?>

<h4> Задание №2. Присвоить переменной $а значение в промежутке [0..15].<br>
С помощью оператора switch организовать вывод чисел от $a до 15.<br></h4>

<?php

$a = 5;

switch ($a){
   case 0:
      echo 0;
   case 1:
      echo 1;
   case 2:
      echo 2;
   case 3:
      echo 3;
   case 4:
      echo 4;
   case 5:
      echo 5;
   case 6:
      echo 6;
   case 7:
      echo 7;
   case 8:
      echo 8;
   case 9:
      echo 9;
   case 10:
      echo 10;
   case 11:
      echo 11;
   case 12:
      echo 12;
   case 13:
      echo 13;
   case 14:
      echo 14;
   case 15:
      echo 15;      
   default:
   echo  ': вывод чисел от $a = 5 до 15; '.'<br>';
   break;
}

?>

<h4>Задание №3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.<br>
  Обязательно использовать оператор return.<br></h4>

<?php


function difference($x, $y){
   return $x - $y;
}

function multiplication ($x, $y){
   return $x * $y;
}

function summ ($x, $y){
   return $x + $y;
}

function division ($x, $y){
   return $x / $y;
}

?>

<h4> Задание №4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),<br>
 где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.<br>
 В зависимости от переданного значения операции выполнить одну из арифметических операций<br>
 (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).<br></h4>

 <?php

function mathOperation($arg1, $arg2, $operation){
   switch ($operation){
      case 'difference':
         return difference($arg1, $arg2);
      case 'multiplication':
         return multiplication($arg1, $arg2);
      case 'summ':
         return summ($arg1, $arg2);
      case 'division':
         return division($arg1, $arg2); 
      default:
      break;     
   }
}

echo mathOperation(2,3,"multiplication").': function mathOperation(2,3,"multiplication") <br>' ;

?>

<h4> Задание №5. Посмотреть на встроенные функции PHP. <br>
 Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.<br></h4>

<h4>
Задание №6. *С помощью рекурсии организовать функцию возведения числа в степень.<br>
Формат: function power($val, $pow), где $val – заданное число, $pow – степень.<br>
</h4>
<?php

function power($val, $pow){
   if($pow > 1){
   $val = $val * power($val, $pow - 1);
   }
   return $val;
}

echo power(3,4).' : function power(3,4) <br>';

?>

<h4>
Задание №7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:<br>
 22 часа 15 минут<br>
 21 час 43 минуты<br>
</h4>

<?php

function current_time(){
   $date = new DateTime('now', new DateTimeZone('Europe/Moscow'));
   $hours = $date->format('H');
   $minutes =  $date->format('i');
   $h = 'часов';
   $m = 'минут';
   
   if ($hours == 1 or $hours == 21){
       $h = 'час';
   } else if($hours > 1 and $hours < 5 or $hours == 22 or $hours == 23) {
       $h = 'часа';
   }
   
   if ($minutes[-1] == 1 or $minutes[-1] == 21 ){
      $m = 'минута';
   } else if ($minutes[-1] > 1 and $minutes[-1] < 5) {
      $m = 'минуты';
   }
   
   return $hours." ".$h." ".$minutes." ".$m;
   }
   
   echo current_time();
   ?>
</div>
   <footer class="footer">
   <?php echo date('Y') ?>
   </footer>
</div>
</body>
</html>





