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
<h4>Задание №5. Посмотреть на встроенные функции PHP.<br>
Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.</h4>

</div>
   <footer class="footer">
   <?php echo date('Y') ?>
   </footer>
</div>
</body>
</html>
