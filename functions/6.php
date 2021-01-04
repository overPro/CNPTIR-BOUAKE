<?php
if(isset($_POST['valider'])){
	$ccnumber = $_POST['sai_num'];
	$totalcarte = 0;
  $dnum = 0;
  $test = 0;
  $number_len = strlen($ccnumber);
  if ($number_len < 13) {
    // Nombre de chiffres entrés incorrect
    echo "Nombre de chiffres entrés incorrect";
    return false;
    
  }
  else {
    for ($i=$number_len; $i>=1; $i--) {
      $test += 1;
      $num = substr($ccnumber, ($i-1), 1);
      if (($test % 2) != 0) {
        $totalcarte += (int)$num;
      }
      else {
        $dnum = (int)$num * 2;
        if ($dnum > 10) {
          $totalcarte += 1 + $dnum - 10;
        }
        else {
          $totalcarte += $dnum;
        }
      }
    }
    if (($totalcarte % 10) != 0) {
      // Numéro de carte non valide
    	 echo "Numéro de carte non valide";
      return false;
     
    }
    else {
      // Carte acceptée
    	echo "Carte acceptée";
      return true;
      
    }
  }
} 


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>test</title>
 </head>
 <body>
 	<form method="POST" action="algo.php">
 		Numero de carte : <input type="text" name="sai_num">
 		<button name="valider">Valider</button>
 		
 	</form>
 
 </body>
 </html>