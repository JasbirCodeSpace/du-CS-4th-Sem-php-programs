<!DOCTYPE html>

<html>
  <head>  <TITLE> FIND | FIBONACCI </TITLE> </head>

  <body background="1.jpg">
    
    <center>
         <?php

          $num = $_POST['num'];

          
       
         
         function fib($num){
          if($num==0 || $num==1)
            return $num;
          else 
             return fib($num-1)+fib($num-2);
             


         }
         
          echo '<B>THE FIRST '.$num.' FIBONACCI NUMBERS ARE :<BR></B>';
          for($i=0;$i<$num;$i++ )
          echo fib($i).'  ';
          
          
          
         ?>

    </center>

  </body>

</html>
