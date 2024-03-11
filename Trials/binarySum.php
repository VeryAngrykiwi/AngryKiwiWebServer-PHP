<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
/*Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк) и возвращает их сумму. Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.
*/

    function binarySum($a, $b){
      $decimalSum = bindec($a) + bindec($b);
      $binarySum = decbin($decimalSum);
      return $binarySum;
      }
    print_r(binarySum("1101", "101"));
    ?>  
  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>