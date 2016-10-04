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
    if($_POST['volup'] == UP)
    {
	$output = shell_exec(" sudo ./send_serial.py 1 2>&1 " );
	$output = shell_exec(" sudo ./send_serial.py 1 2>&1 " );
	sleep(1);
	//echo "<pre>$output</pre>";
	}
     elseif($_POST['voldown'] == DOWN)
    {
	$output = shell_exec(" sudo ./send_serial.py 2 2>&1 " );
	$output = shell_exec(" sudo ./send_serial.py 2 2>&1 " );
	//$output = shell_exec(" sudo echo '2' > /dev/ttyUSB0 2>&1" );
	sleep(1);
	//echo "<pre>$output</pre>";
    }
	 elseif($_POST['ONCHAMBRE'] == ONCHAMBRE)
    {
	$output = shell_exec(" sudo ./send_serial.py 4 2>&1 " );
	$output = shell_exec(" sudo ./send_serial.py 4 2>&1 " );
	sleep(1);
       // echo "<pre>$output</pre>";
    }
 elseif($_POST['OFFCHAMBRE'] == OFFCHAMBRE)
    {
       $output = shell_exec(" sudo ./send_serial.py 5 2>&1 " );
	$output = shell_exec(" sudo ./send_serial.py 5 2>&1 " );
	sleep(1);
      //  echo "<pre>$output</pre>"; 
    }
 elseif($_POST['RAFRAICHIR'] == RAFRAICHIR)
    {
	 
        $output = shell_exec(" sudo  ./take_a_picture.sh 2>&1" );
	sleep(1);
      //  echo "<pre>$output</pre>";
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
  }?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!-- les lignes suivantes permettent la compabilité du script avec ie -->
                <!--[if lt IE 9]>
            <script src="http://github.com/aFarkas/html5shiv/blob/master/dist/html5shiv.js"></script>
        <![endif]-->
        
        <link rel = "stylesheet" media = "screen"  href = "style.css" type ="text/css" />
    <title>Mon serveur</title>
  </head>
  <body>
                <div class ="main bloc_1" >Mon Serveur </div>  
                <div class ="main bloc_2" >  Statut </div> 
                
                        <!-- boutons -->
                <div class ="main bloc_3">
                	<form method= "post" action = "domotique.php"> <right> <input type="submit" name = 'DECO' value="DECO"> </right> </form>
                	<form method="post" action="domotique.php">
					
               			<input type="submit" name = 'volup' value="UP">
	                	<input type="submit" name = 'voldown' value="DOWN">
						<input type="submit" name = 'ONCHAMBRE' value="ONCHAMBRE">
						<input type="submit" name = 'OFFCHAMBRE' value="OFFCHAMBRE">
						<input type="submit" name = 'RAFRAICHIR' value="RAFRAICHIR">
				  

            	    </form> 
            	</div>
                <div id="test">
 				<?php  include('test.php'); ?>
				</div>
  </body>
</html>




