<?php
#########################################################
	$routes = [];
	$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$segments = explode('/', $uri_path);
	$action = $_SERVER['REQUEST_URI'];

	function Route($action, Closure $callback, $method='get'){
		global $routes, $segments, $action;

		$action = trim($action, '/');
		$routes[$action] = $callback;
	}

	function dispatch($action){
		global $routes, $segments, $action;
		$action = trim($action, '/');

		if (!isset($routes[$action])) {
			return notfound();
		}

		$callback = $routes[$action];

		$parms = call_user_func($callback);
		$parms = explode('@',$parms);

		if (count($parms)<2){
			return notfound('Method is not found');
		}

		$contr = controller($parms);
		if($contr) {
			$json_string = json_encode($contr, JSON_PRETTY_PRINT);
			print_r($json_string);
		}
	}

	function controller($parms){
		global $routes, $segments, $action;

		$controller_name = $parms[0];
		$method_name = $parms[1];
		$id = $segments[2]??null;
		$controller_path = '../Controllers/'.$controller_name.'.php';
		$controller_class = "\Myproject\\$controller_name";
		include_once $controller_path;
		$myclass = new $controller_class();
		return $myclass->$method_name($id);
	}

	function view($view, $parms){
		$view_path = '../views/'.$view.'.php';

		if (!file_exists($view_path)){
			return notfound('The view is not found');
		}

		include_once '../views/'.$view.'.php';
	}

	function notfound($msg){
		echo "404";
		echo "<hr>";
		echo $msg;
	}


#########################################################
	include_once 'routes.php';
#########################################################
	dispatch($action);
#########################################################
