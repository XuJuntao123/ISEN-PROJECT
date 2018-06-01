<?php 
	/**
	* 
	*/
	class Email extends Controller
	{
					
		function __construct()
		{
			parent::__construct();
		}

		public function contactus(){
			$this->model->contactus();
		}

		public function getfeedback(){
			$this->model->index();
			
		}
	}