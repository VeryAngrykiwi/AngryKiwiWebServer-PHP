/*
Реализуйте функцию isPowerOfThree(), которая определяет, является ли переданное число натуральной степенью тройки. Например, число 27 – это третья степень (33), а 81 – четвертая (34).
*/

function isPowerOfThree($num){
  if($num === 1){
    return true;
  }
  while($num > 1){
    if($num % 3 !== 0){
      return 'не троичное';
    }
    $num /= 3;
  }
  return 'троичное';
}
print_r(isPowerOfThree(9));