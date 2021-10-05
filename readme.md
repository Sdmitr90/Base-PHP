# Базовый курс PHP. 04.10-04.11.2021

## Урок 1. Введение в PHP

1. Установить программное обеспечение: веб-сервер, базу данных, интерпретатор, текстовый редактор. Проверить, что все работает правильно.

2. Выполнить примеры из методички и разобраться, как это работает.

3. Объяснить, как работает данный код:

"
     $a = 5;
     
     $b = '05';
     
     var_dump($a == $b);         // Почему true?
     
     var_dump((int)'012345');     // Почему 12345?
     
     var_dump((float)123.0 === (int)123.0); // Почему false?
     
     var_dump((int)0 === (int)'hello, world'); // Почему true?
"

4. Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.

5. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя.
