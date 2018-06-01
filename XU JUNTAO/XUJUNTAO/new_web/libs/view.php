<?php 

/**
* 
*/
class View
{
	function __construct()
	{
		// echo "<div>hello class View!<br/></div>";
	}

	public function show($path){
		// echo $path;
		// $path = explode('views/', $path);
		// echo $path;
		$path = 'views/' . $path ;
		if(file_exists($path)){
			require $path;
		}

		else{
			require 'controllers/path_error.php';
			new Path_error();
		}
	}

}