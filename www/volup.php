<?php
  /*****************************************
  *  Constantes et variables
  *****************************************/
$Commande = shell_exec (' echo 49 > /dev/ttyACM0');
echo "$Commande";    
  
?>

