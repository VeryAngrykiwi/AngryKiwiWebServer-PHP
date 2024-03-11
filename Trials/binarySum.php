/*Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк) и возвращает их сумму. Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.
*/

    function binarySum($a, $b){
      $decimalSum = bindec($a) + bindec($b);
      $binarySum = decbin($decimalSum);
      return $binarySum;
      }
    print_r(binarySum("1101", "101"));
