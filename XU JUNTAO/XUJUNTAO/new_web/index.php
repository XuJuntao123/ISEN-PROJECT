
<?php  


//die("ccc");


	// Library
	require "libs/controller.php";
	require "libs/model.php";
	require "libs/view.php";
	require "libs/bootstrap.php";
	require "libs/session.php";
	require_once "libs/database.php";

	require "config/router.php";
	$bootstrap = new Bootstrap();
	








	// require 'models/login_model.php';
	// require "libs/database.php";
			

	// $log = new Login_Model();	
	// $log->showall();
	// $log = new Database();
	// echo "<pre>";
	// try{
	// 	$log->insert();
	// }catch(PDOException $e){
	// 	print "Error!: " . $e->getMessage() . "<br/>";
	// 	die();
	// }
	// echo "<pre>";
	// $log->db->insert("select * from User");
	// 