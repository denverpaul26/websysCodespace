<?php
$num = 21;

function global_var() {
  
  global $num;
  echo"Variable num inside1 function $num \n";
}

  global_var();
  
  
  echo"Variable num outside funcadasdtion $num \n";
  

?>