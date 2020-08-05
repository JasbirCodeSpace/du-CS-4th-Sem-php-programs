<!DOCTYPE html>

<html>
  <head>  <TITLE> FIND | EVEN ADD </TITLE> </head>

  <body background="1.jpg">
    
    <center>
         <?php

          $num = $_POST['num'];
          
          
          function evenADD($num){
          $sum = 0;
          echo '<B>THE FIRST '.$num.' EVEN NUMBERS ARE :<BR></B>';
          for($i=1;$i<=$num;$i++ ){
           echo ($i*2).'  ';
           $sum += ($i*2);
           }
            return $sum;
           }
           $sum = evenADD($num);
           
          echo '<br><br><B>THE SUM OF '.$num.' EVEN NUMBERS OF  IS '.$sum.'</B>'; 


         ?>

    </center>

  </body>

</html>
