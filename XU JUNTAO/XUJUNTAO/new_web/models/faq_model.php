<?php 
	/**
	* 
	*/
	class Faq_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			
			$sth = $this->db->prepare("SELECT * from q");
			$sth->execute();
			for($i = 0;$i < $sth->rowCount();$i++){
				$data = $sth->fetch(PDO::FETCH_OBJ);
				
				echo "<a href='index.php?controllers=main&method=swap&file=Answer.php&kid=".$data->id."' class='x-link'>".$data->q_question."</a>"."<br>";
				echo $data->q_summary. " <br/>";
				echo '<hr>';
			}

		
		}
	}
	// href="answer.php?kid=1"