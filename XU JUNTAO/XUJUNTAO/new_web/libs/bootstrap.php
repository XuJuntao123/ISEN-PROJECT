<?php 
class Bootstrap
{
	function __construct()
	{
		/*
		* @the first parameter is for file in controllers folders, the second parameter is for method,the third parameter is for file in views.
		*/
		
		if(isset($_GET['file'])){
			$controllers = $_GET['controllers'];
			$method = $_GET['method'];
			$file = $_GET['file'];}
		elseif(isset($_GET['method'])){
			$controllers = $_GET['controllers'];
			$method = $_GET['method'];
		}elseif(isset($_GET['controllers'])){
			$controllers = $_GET['controllers'];
		}

		// echo $controllers;
		

		if(empty($controllers)){
			require "controllers/main.php";
			$controller = new Main();
			$controller->Index();
			return false;
		}

		
		$ctl ="controllers/". $controllers.".php";
		if(!file_exists($ctl)){
			$this->path_error();
			return false;
			// require "controllers/main.php";
			// echo "<meta http-equiv='refresh' content='3';url".LOCALHOST." >";;
			// $controller = new Main();
			// $controller->Index();
			// return false;
			// $this->path_error;}
		}else{
			require $ctl;
			$controller = new $controllers;
			$controller->Loadmodel($controllers);

		}

		//echo $ctl;
		
		
		if(method_exists($controller, $method)){
			if(isset($file)){
				$controller->{$method}($file);
				return false;
			}else{
				$controller->{$method}();
				return false;
			}
		}else{
			$this->path_error();
		}


		// echo $url . "<br>" . $controller . "<br>" . $method . "<br>" ;



		// if(empty($url[0])){
		// 	require "controllers/main.php";
		// 	$controller = new Main();
		// 	$controller->Index();
		// 	return false;
		// }


		// $file = "controllers/" . $url[0] . ".php";
		// // echo $file;
		
		// if(file_exists($file)){
		// 	require $file;
		// }else{
		// 	$this->path_error();
		// 	return false;
		// }


		//  require_once "controllers/" . $url[0] . ".php";
		// $controller = new $url[0]();
		// $controller->Load_model($url[0]);


		// if(isset($url[2])){
		// 	if(method_exists($controller, $url[1])){
		// 		$controller->{$url[1]}($url[2]);
		// 	}else{
		// 		// echo "hello!";
		// 		$this->path_error();
		// 	}
		// }else{
		// 	if(isset($url[1])){
		// 		if(method_exists($controller, $url[1])){
		// 			$controller->{$url[1]}();
		// 		}
		// 		else{
		// 			$this->path_error();
		// 		}
		// 	}else{
		// 		$controller->Index();
		// 	}
		// }
	}

	public function path_error(){
		require "controllers/path_error.php";
		$controller = new Path_error();
		$controller->index();
		return false;
	}

}
