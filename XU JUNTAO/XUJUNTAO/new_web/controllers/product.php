<?php 
	class Product extends Controller{
		function __construct(){
		}

		public function Index(){
			echo "Login index<br>";
		}	

		public function make(){
			$this->model->create();
		}

	}
	