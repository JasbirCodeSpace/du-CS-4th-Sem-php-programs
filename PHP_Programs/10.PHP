<!DOCTYPE html>

<HTML>
 <HEAD>
   <TITLE> FIND | SORTED ARRAY</TITLE>
 
 </HEAD>
 
 
 
 <BODY>
   
     <?php
         $ARRAY = $_POST['ARRAY'];
         $A = array();
         $ch = '';
         
         $ind=0;
         
         for($i=0;$i<$ARRAY{strlen($ARRAY)};$i++){
           $ch  = $A{$i};
           
           if($ch=='.')
            break;
           else if($ch==',')
            continue;
            
           else{
            $A[$ind] = (int)(substr($ARRAY));
           }
         }
         
         for($i=0;$i<$row;$i++){
          for($j=0;$j<=$i;$j++){
             echo '*';
            }
            echo '<br>';
         }
     
     
     ?>
      
  
 
 
 
 </BODY>

</HTML>
