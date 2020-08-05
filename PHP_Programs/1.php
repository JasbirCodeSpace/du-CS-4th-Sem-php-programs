<!DOCTYPE html>

<html>
  <head>  <TITLE>FIND | LARGEST </TITLE></head>

  <body background="1.jpg">

  <center>
   <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $num3 = $_POST["num3"];


      function largest( $num1, $num2, $num3){
      if($num1 > $num2 && $num1 > $num3)
        echo ' THE FIRST NUMBER '. $num1.' IS GREATEST ';
      else if($num2 > $num1 && $num2 > $num3)
           echo ' THE SECOND NUMBER '. $num2.' IS GREATEST ';
      else
          echo ' THE THIRD NUMBER '. $num3.' IS GREATEST ';
          
     }
     
     largest( $num1, $num2, $num3)
   ?>


  </center>

  </body>

</html>
