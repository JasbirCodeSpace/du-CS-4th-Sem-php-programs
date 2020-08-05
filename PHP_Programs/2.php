<!DOCTYPE html>

<html>
  <head>  <TITLE> FIND | FACTORIAL </TITLE> </head>

  <body background="1.jpg">
    
    <center>
         <?php

          $num = $_POST['num'];
          
          
          function fact($num){
          $fact = 1;

          for($i=1;$i<=$num;$i++)
           $fact *= $i;
           
           return $fact;
           
          }

          echo 'THE FACTORIAL OF '.$num.' IS '.fact($num); 


         ?>

    </center>

  </body>

</html>
