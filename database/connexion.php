<?php 
try{
$this->con = new PDO('mysql:host=localhost;dbname=CNPTIR','root','');
} catch(Exception $e)
{
	echo 'Exception reçue : ',  $e->getMessage();
}

 ?>