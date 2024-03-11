<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
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
    ?>
  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>