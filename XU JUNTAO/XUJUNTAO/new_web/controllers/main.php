<?php 

/**
* 
*/
class Main extends Controller{
	function __construct()
	{
		parent :: __construct();
		// echo "This is main!<br>";
		
	}

	public function Index(){
		$this->view->show('header.php');
		$this->view->show('SearchPage/SearchPage.php');
	}

	public function Swap($file){
		// echo "i'm in swap method!";
		// echo "<br>".$file;
		$this->view->show('header.php');
		$filesplit = explode('.', $file);
		$path = $filesplit[0] ."/". $file;
		$originalpath ='views/'.$path;
		//echo "<br>".$originalpath."<br>";
		// echo file($path);
		// echo $originalpath;
		if(file_exists($originalpath)){
			$this->view->show($path);
		}
		// echo $originalpath;
	}
}