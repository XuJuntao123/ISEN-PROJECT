<?php 
	/**
	* 
	*/
	class Database extends PDO
	{
		function __construct()
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			
			parent::__construct("mysql:host=$servername;dbname=web_database", $username, $password);
		}

		public function index(){
			echo "hello class database!<br/>";
		}

		// public function insert(){
			// echo "hello";
			// // $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// // $sth = $this->db->prepare($sql);
			// // $sth->execute();
			// foreach($this->query('SELECT * from User') as $row) {
			// 	        print_r($row);
			// 	    }
			// }
	}

	// print_r(PDO::getAvailableDrivers());
	// echo "<pre>";
	// 		try {
	// 			    $class = new Database();
				    
	// 			    $class->insert();
	// 			} catch (PDOException $e) {
	// 			    print "Error!: " . $e->getMessage() . "<br/>";
	// 			    die();
	// 			}