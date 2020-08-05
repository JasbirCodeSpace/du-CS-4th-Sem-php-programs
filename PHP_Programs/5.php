<!DOCTYPE html>

<html>
  <head>  <TITLE> FIND | ODD ADD </TITLE> </head>

  <body background="1.jpg">
    
    <center>
         <?php

          $num = $_POST['num'];

          $sum=0;
          
          function oddADD($num){
          $sum = 0;
          echo '<B>THE FIRST '.$num.' ODD NUMBERS ARE :<BR></B>';
          for($i=1;$i<=$num;$i++ ){
           echo ($i*2-1).'  ';
           $sum += ($i*2-1);
           }
           
           
           return $sum;
           
           }
           
           $sum = oddADD($num);
          echo '<br><br><B>THE SUM OF '.$num.' ODD NUMBERS OF  IS '.$sum.'</B>'; 


         ?>

    </center>

  </body>

</html>
