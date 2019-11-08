<?php


//require '../App/Controllers/Posts.php';
//require '../Core/Router.php';
// spl_autoload_register(function($class){
// 		$root = dirname(__DIR__);
// 		$file = $root . '/' . str_replace('\\','/',$class). '.php';
// 		if(is_readable($file)){
// 				require $root . '/' . str_replace('\\','/',$class). '.php';
// 		}
		


// });


require_once dirname(__DIR__) . '/vendor/autoload.php';



// spl_autoload_register(function($class){
// 	$root = dirname(__DIR__);
// 	$file = $root . '/' . str_replace('\\','/',$class) . '.php';
	
// 	if(is_readable($file)){
// 		require $root . '/' . str_replace('\\','/',$class) . '.php';
		
		
// 	}
	

// });
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


$routes = new Core\Router();

$routes->add('', ['controller' => 'Home', 'action' => 'index']);
$routes->add('{controller}/{action}');
$routes->add('{controller}/{id:\d+}/{action}');
$routes->add('admin/{controller}/{action}',['namespace' => 'Admin']);

$url = $_SERVER['QUERY_STRING'];

// if($routes->match($url)){
// 	echo "<pre>";
// 	var_dump($routes->getParams());

// }

// else{
// 	echo "no url found for this". $url;
// }

$routes->dispatch($url);




