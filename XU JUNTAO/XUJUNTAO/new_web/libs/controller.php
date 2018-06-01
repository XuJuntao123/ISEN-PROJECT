<?php 

/**
* 
*/
class Controller
{
	function __construct()
	{
		$this->view = new View();
		// echo "hello class controller!</br>";
	}

	function Loadmodel($file){
		$path = "models/".$file. "_model.php";
		$classname = $file. "_model";
		
		if(file_exists($path)){
			require $path;
			// echo $file;
			$this->model = new $classname();
		}
		
	}
}