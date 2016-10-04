<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="fr" lang="fr">
<head>
	
 <meta http-equiv="Refresh" content="10; url=domotique.php">
	<div class ="main bloc_4" >
	
	<img src="image.jpg" border="0" />
	</div>
    </head>

    <body>
  
	<?php 
	 $output = shell_exec(" sudo ./take_a_picture.sh 2>&1" );
        sleep(2);
	//shell_exec("convert -rotate -90 image.jpg image.jpg");
	//sleep(1);
       // echo "<pre>$output</pre>";


?>
    </body>
</html>
