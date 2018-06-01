<?php  
	/**
	* 
	*/
	class Email_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function contactus(){
			$sql="INSERT INTO ContactUs (Name, EmailAddress, Country, ContactNumber, Inquiry) VALUES (
				:name, :emailaddress, :country, :contactnumber, :inquiry)";
			try {
				$sth = $this->db->prepare($sql);
				$sth->execute(array(
						':name' => $_POST['name'],
						':emailaddress' => $_POST['emailaddress'],
						':country' => $_POST['country'],
						':contactnumber' => $_POST['contactnumber'],
						':inquiry' => $_POST['inquiry']));	
						echo "<script>
							alert('Your inquiry or feedback has been submitted.');
							window.location.href='index.php?controllers=main&method=swap&file=ContactUs.php';
						</script>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		public function index(){
			$sth = $this->db->prepare("SELECT * from contactus");
			$sth->execute();
	
	
              for($i = 0;$i < $sth->rowCount();$i++){
				$data = $sth->fetch(PDO::FETCH_OBJ);
              	echo "<tr>
              			<td>".( $i+1 )."</td>
              			<td>".$data->Name."</td>
              			<td>".$data->Country."</td>
              			<td>".$data->Inquiry."</td>
            		</tr>"
            		;
              }
		}
	}