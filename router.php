<?php 

$pages_controllers = scandir('controllers/');

//$nombre = count($pages_controllers);


for ($i=2; $i < 16; $i++) { 

	$page = $pages_controllers[$i];

        include 'controllers/'.$page;
        
}
	//die($page);




if (isset($_GET['c']) && isset($_GET['a'])) 
{
	$controller = $_GET['c'];
	$action     = $_GET['a'];
	
if (class_exists($controller, true) and method_exists($controller,$action)) 
{
	$controller = new $controller();
    $controller->$action();
} 
else 
{
	include "erreur.html";
}

} 
else
{
	include "erreur.html";
}






?>