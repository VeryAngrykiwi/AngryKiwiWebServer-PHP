<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

    /*Реализуйте функцию isBalanced(), которая принимает на вход строку, состоящую только из открывающих и закрывающих круглых скобок, и проверяет, является ли эта строка корректной. Пустая строка (отсутствие скобок) считается корректной.

    Строка считается корректной (сбалансированной), если содержащаяся в ней скобочная структура соответствует требованиям:

    Скобки — это парные структуры. У каждой открывающей скобки должна быть соответствующая ей закрывающая скобка.
    Закрывающая скобка не должна идти впереди открывающей. Такой вариант недопустим )(, а вот такой допустим ()().
    */
    
      function isBalanced($str) {
          $stack = [];
          foreach(str_split($str) as $char) {
              if($char === '(') {
                  array_push($stack, $char);
                  return 'попал';
              } elseif($char === ')') {
                  if(empty($stack)) {
                      return 'мимо';
                  } else {
                      array_pop($stack);
                  }
              }
          }
          return empty($stack);
      }
        print_r(isBalanced("((()))"));
      
    ?>
  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>
