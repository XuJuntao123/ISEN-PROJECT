<?php 
/**
* 
*/
class Model{
	
	function __construct()
	{
		// require "libs/database.php";
		$this->db = new Database();
	}

	public function index(){
		echo "hello class model!<br/>";
	}
}