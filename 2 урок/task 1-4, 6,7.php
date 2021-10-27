<!-- Задание №1.  Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу: <br>
- если $a и $b положительные, вывести их разность;
- если $а и $b отрицательные, вывести их произведение;
- если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом. -->
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

//  Задание №2. Присвоить переменной $а значение в промежутке [0..15].
// С помощью оператора switch организовать вывод чисел от $a до 15.<br></h4>

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

// Задание №3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
//   Обязательно использовать оператор return.


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


// Задание №4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
//  где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
//  В зависимости от переданного значения операции выполнить одну из арифметических операций
//  (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

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


// Задание №6. *С помощью рекурсии организовать функцию возведения числа в степень.
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow){
   if($pow > 1){
   $val = $val * power($val, $pow - 1);
   }
   return $val;
}

echo power(3,4).' : function power(3,4) <br>';




// Задание №7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:<br>
//  22 часа 15 минут
//  21 час 43 минуты

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