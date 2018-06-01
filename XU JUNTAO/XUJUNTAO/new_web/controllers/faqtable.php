<?php 
 	/**
 	* 
 	*/
 	class Faqtable extends Controller
 	{
 		
 		function __construct()
 		{
 			# code...
 			parent::__construct();
 		}

 		public function addanswer(){
 			$this->model->addanswer();
 		}

 	
 	}