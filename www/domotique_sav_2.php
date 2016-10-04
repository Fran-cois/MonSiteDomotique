<?php
  /*****************************************
  *  Constantes et variables
  *****************************************/
  define('LOGIN','francois');  // Login correct
  define('PASSWORD','rpi-123-456');  // Mot de passe correct
  session_start();

  if(empty($_SESSION['login']))
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: index.php');
  exit();
  
  //echo'test';
}
  /*****************************************
  *  Vérification du formulaire
  *****************************************/
  // Si le tableau $_POST existe alors le formulaire a été envoyé
  if(!empty($_POST))
  {
    // Le login est-il rempli ?
    if($_POST['volup'] == UP)
    {
	echo `whoami`;
	//$fp = fopen ("/dev/ttyACM0", "w");
	//fputs($fp,"49")
	//$test=shell_exec(" sudo echo 49 > /dev/ttyACM0");
//echo $test; 
//$ou_est_ls=shell_exec('which ls'); 
//echo $ou_est_ls; 
	shell_exec(" sudo echo '1' > /dev/ttyACM0 2>&1" );
	//$resutat =shell_exec("./var/www/testscript/up.sh 2>&1");
	// print_r($resultat);
      //echo "volet up ";
	//chdir('/root');
	//shell_exec(" sudo ./vol_up.sh")
	//file_put_contents('/dev/ttyACM0', "1");
	//$results = shell_exec('wc -w *.txt | head -5');
	//echo "<pre>".$results . "</pre>";
	//shell_exec("echo '1' > /dev/ttyACM0" );
    //  echo"<script language=\"javascript\"> document.getElementById("texte_statut").className = 'NOK'; </script>";
    }
    
      // Le login est-il correct ?
      elseif($_POST['voldown'] == DOWN)
    {
       echo "volet down ";
	 shell_exec(" sudo echo '2' > /dev/ttyACM0 2>&1" );
    }
      // Le mot de passe est-il correct ?
      elseif($_POST['DECO'] == DECO)
    {
      // remove all session variables
          session_unset(); 

        // destroy the session 
                session_destroy(); 
                 header('Location: index.php');
                 exit();
    }
      else
    {
      // L'identification a réussi
      $message = 'Bienvenue '. LOGIN .' !';
       header('Location: domotique.php');
           exit();
      
    }
  }?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
                <meta charset="UTF-8">
                <!-- les lignes suivantes permettent la compabilité du script avec ie -->
                <!--[if lt IE 9]>
            <script src="http://github.com/aFarkas/html5shiv/blob/master/dist/html5shiv.js"></script>
        <![endif]-->
        <link rel = "stylesheet" media = "screen"  href = "style.css" type ="text/css" />
    <title>Mon serveur</title>
  </head>
  <body>
                <div id="titre"><center>Mon Serveur </center></div>  
                <div id="texte_statut"> <center> Statut </center></div> 
                <form method= "post" action = "domotique.php"> <right> <input type="submit" name = 'DECO' value="DECO"> </right> </form>
                        <!-- boutons -->
                <form method="post" action="domotique.php">
					<center>
                        <input type="submit" name = 'volup' value="UP">
                        <input type="submit" name = 'voldown' value="DOWN">
					</center>    

                </form> 
  </body>
</html>




