<?php 
	/**
	* 
	*/
	class Faqtable_Model extends Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		public function addanswer(){
			$sql = "INSERT INTO a (question_id, answer)VALUES(
				:id , :answer)";
			try{
			$sth = $this->db->prepare($sql);
			$sth->execute(array(':id' =>$_POST['question_id'],
								':answer' =>$_POST['fname']));
			echo "<script>
					alert('submit successfully!');
					window.location.href='index.php?controllers=main&method=swap&file=Answer.php&kid=".$_POST['question_id']."';
				</script>";
		}catch(PDOException $e){
			$e->getMessage();
		}



		}

		
	}