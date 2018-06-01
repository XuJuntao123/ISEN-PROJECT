<?php
	class Product_Model extends Model{
		function __construct(){
			parent::__construct();
			Session::init();
		}

		public function create(){
			$name = $_POST['name'];
			$price = $_POST['price'];
			$description = $_POST['description'];
			$check = getimagesize($_FILES["img"]["tmp_name"]);
			if($check !== false){
				$img = $_FILES['img']['tmp_name'];
				$imgContent = addslashes(file_get_contents($img));

				$sth = $this->db->prepare("SELECT * FROM products WHERE name='$name' AND price='$price' AND description = '$description' AND image = '$img' ");
				$sth->execute(array('name' => $_POST['name']));
				$data = $sth->fetchAll();

				if(empty($data)){
					try{
						$sth = $this->db->prepare("INSERT INTO products(name, price, description, image)
							VALUES('$name', '$price', '$description', '$imgContent')");
					}catch(PDOExcption $e){
						$e->getMessage();
					}
					$sth->execute(array(
						'$name' => $_POST['name'],
						'$price' => $_POST['price'],
						'$description' => $_POST['description'],
						'$img' => $imgContent));
					echo "<script>
							alert('Sign up successfully!back to main page for you!');
							window.location.href='index.php';
						</script>";
				}else{
					echo "<script>
						alert('Error:This product already exists!');
						window.history.back(-1);
					</script>";
				}

				
			}else{
				echo "<script>
							alert('Failed to get picture!');
							window.location.href='index.php';
						</script>";
			}
			
		}

	}

?>
