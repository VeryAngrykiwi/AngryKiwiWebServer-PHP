/*
Создайте функцию isPerfect, которая принимает число и возвращает true, если оно совершенное, и false — в ином случае.
*/

function isPerfection($num){
   $sum = 0;
   for($i = 1; $i < $num; $i++){
     if($num % $i === 0){
       $sum += $i;
     }
   }
   return $sum === $num;
 }
print_r(isPerfection(7));