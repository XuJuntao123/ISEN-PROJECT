<?php 
	class Login extends Controller{
		function __construct(){
			// require "models/login_model.php";
			// echo "I'm in login!<br>";
		}

		public function Index(){
			echo "Login index<br>";
		}	

		public function Loggin(){
			$this->model->match();
		}

		public function Logout(){
			$this->model->logout();
		}

		public function CreateAccount(){
			// echo "hello<br>";
			$this->model->create();
		}

	}
	