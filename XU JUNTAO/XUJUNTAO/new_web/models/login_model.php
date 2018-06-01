<?php 
	/**
	* 
	*/
	class Login_Model extends Model
	{
		function __construct(){
			parent::__construct();
			// echo "I'm in login model!<br>";
			Session::init();
		}

		public function index(){
			echo "Login_Model index!<br>";
		}

		public function match(){
			$sth = $this->db->prepare("SELECT * from user WHERE Username=?");
			
			$sth->execute(array($_POST['uname']));

			$data = $sth->fetchAll();
			$data = $data[0];


			if(empty($data)){
				echo "<script>
						alert('User does not exist!');
						window.history.back(-1);
					</script>";
				return false;
			}

			if($data['Password'] == $_POST['psw'])
			{
				Session::set('User',$data['Username']);
				echo "<script>
						alert('Log-in successfull!');
						window.location.href='index.php';
					 </script>";
			}
			else{
				echo "<script>
							alert('The password is wrong, you will be brought back to the last page');
							window.history.back(-1);
					</script>";
			;
			}


			
			// if(empty($sth->fetchAll()))
			// 	echo 111;
			// else{
			// 	echo 222;
			// }
			// // echo $sql. '<br>';
			// $all = $sth->fetchAll();
			// // echo "select all from table User:<br><hr>";
			// // echo "<pre>";
			// print_r($all);

			// Session::init();
			// Session::set()
			// if($row > 0){
			// 	Session::init();
			// 	Session::set("loggedIn",true);
			// 	header("location: dashboard");
			// }else{
			// 	header("location: login");
			// }
		}

		public function create(){
			echo "hi<br>";
			// gettype($_POST['username']);
			$sth = $this->db->prepare("SELECT * from user where Username = :username");
			$sth->execute(array(':username' => $_POST['username']
				));
			$data = $sth->fetchAll();
			if(empty($data)){
				try{
					$sth = $this->db->prepare("INSERT into User(Firstname,Lastname,Username,Password)
						VALUES(:firstname,:lastname,:username,:password)");
				}catch(PDOExcption $e){
					$e->getMessage();
				}
				$sth->execute(array(
					':firstname' => $_POST['firstname'],
					':lastname' => $_POST['lastname'],
					':username' => $_POST['username'],
					':password' => $_POST['password']));
				echo "<script>
						alert('Sign up successfully!back to main page for you!');
						window.location.href='index.php';
					</script>";
			}else{
				echo "<script>
						alert('Error:the user has already existed!');
						window.history.back(-1);
					</script>";
			}
			
		}

		public function logout(){
			Session::destroy();
			header("Location: index.php");
			exit;
		}
	}