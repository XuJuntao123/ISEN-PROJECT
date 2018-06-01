<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>	
</head>
<body>
<!-- Content -->
<?php
	$this->db = new Database();
	$id = $_GET['id'];
	$sth = $this->db->prepare("SELECT * FROM products WHERE id = '$id' ");
	$sth->execute(array('id' => '$id'));
	$data = $sth->fetchAll();
	for($i = 0; $i < sizeof($data); $i++){
		if($data[$i]['id'] = $id){
			$datum = $data[$i];
		}
	}
?>
<div class="jumbotron">
	<div class="container" style="padding-top: 30px;">
		<div class="row">
			<div class="col-md-4"><?php echo '<img src="data:image/png;base64,'.base64_encode( $datum['image'] ).'"alt = "damn" style="width:200px;height:200px;">'; ?></div>
			<div class="col-md-8">
				<h1><?php echo $datum['name'];?></h1>
				<h2>Price: <?php echo $datum['price'];?></h2>
				<p><?php echo $datum['description'];?></p>
				<button onclick="display_alert()" class="btn btn-primary">BUY</button>
				<script>
					function display_alert()
					 {
					 	alert('<?php echo $datum['name'];?> has been bought by <?php echo Session::get('User') ?>!.');
					 }
					
				</script>
			</div>
		</div>
	</div>
</div>
</body>
</html>