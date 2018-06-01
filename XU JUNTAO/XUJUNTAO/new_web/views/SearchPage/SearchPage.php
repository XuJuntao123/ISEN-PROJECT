<!DOCTYPE html>
<html>
<head>
	<title>index.php Search</title>	
	<link rel="stylesheet" type="text/css" href="<?php echo LOCALHOST; ?>/publics/css/mystyle">
</head>
<body>
		<!-- Search -->

		<div class="row" style="padding-top: 25px">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="container">
					<form style="margin-right:35%">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="search">
							<div class="input-group-btn">
								<button type="submit" class="btn btn-default" ><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
						<div class="btn-group btn-group-justified">
							<div class="btn-group">
								<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Filter
								<span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="index.php?sort=pup">by PRICE (up)</a></li>
									<li><a href="index.php?sort=pdown">by PRICE (down)</a></li>
									<li><a href="index.php?sort=aorder">by ALPHABETICAL ORDER</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
		<!-- Products -->

				<div class="container" style="padding-top: 25px">
					<div class="row">
		<?php
			$conn = mysqli_connect("localhost","root","", "web_database");
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}			
			$sql = "SELECT * FROM products";
			if(isset($_GET['search'])){
				$query = mysqli_real_escape_string($conn,$_GET['search']);
				$sql .= " WHERE name LIKE '%$query%'";				
			}else if(isset($_GET['sort'])){
				if ($_GET['sort'] == 'pup')
				{
				    $sql .= " ORDER BY price";
				}
				elseif ($_GET['sort'] == 'pdown')
				{
				    $sql .= " ORDER BY price DESC";
				}
				elseif ($_GET['sort'] == 'aorder')
				{
				    $sql .= " ORDER BY name";
				}
			}			

			$result = $conn->query($sql);			
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	?>
						<div class="col-md-6" style="padding-bottom: 4%; padding-left: 5%">	
							<div class="col-md-4"><?php echo '<img src="data:image/png;base64,'.base64_encode( $row['image'] ).'"alt = "damn" style="width:150px;height:150px;">'; ?></a></div>
							<div class="col-md-2">
								<?php $this_id = $row["id"]; ?>
								<h2> <a href="index.php?controllers=main&method=swap&file=Product.php&id=<?php echo $this_id; ?>"><?php echo $row["name"];?></a></h2>	
								<p>PRICE: $<?php echo $row["price"];?></p>
							</div>
							<br>
						</div>

						<?php
		    }
		}
		?>
							
			</div>
			<br/>
		</div>



		
	</div>

</body>
<style type="text/css">
		#demo {
			background: #FFF;
			overflow:hidden;
			border: 1px dashed #CCC;
			width: 100%;
		}
		#demo img {
			border: 3px solid #F2F2F2;
		}
		#indemo {
			float: left;
			width: 800%;
		}
		#demo1 {
			float: left;
		}
		#demo2 {
			float: left;
		}
	</style>
<div class="edge" style="background-color: rgb(200,200,200); height: 1px; "></div>
		<div id="demo">
			<div id="indemo">
				<div id="demo1">
				<a href="#"><img src="<?php echo PHOTOS; ?>Cheerio.jpg" border="0" height="100" width="150"></a>
				<a href="#"><img src="<?php echo PHOTOS; ?>Cheerio.jpg" border="0" height="100" width="150"></a>
				<a href="#"><img src="<?php echo PHOTOS; ?>Cheerio.jpg" border="0" height="100" width="150"></a>
				<a href="#"><img src="<?php echo PHOTOS; ?>Cheerio.jpg" border="0" height="100" width="150"></a>
				<a href="#"><img src="<?php echo PHOTOS; ?>Cheerio.jpg" border="0" height="100" width="150"></a>
				<a href="#"><img src="<?php echo PHOTOS; ?>Cheerio.jpg" border="0" height="100" width="150"></a>
				<a href="#"><img src="<?php echo PHOTOS; ?>Cheerio.jpg" border="0" height="100" width="150"></a>
				<a href="#"><img src="<?php echo PHOTOS; ?>Cheerio.jpg" border="0" height="100" width="150"></a>
				<a href="#"><img src="<?php echo PHOTOS; ?>Cheerio.jpg" border="0" height="100" width="150"></a>
				</div>
			<div id="demo2"></div>
			</div>
		</div>
	</div>
		<!--<div id=foot class="container" style="background-color: rgb(150,150,150) ; font-size: 10px " >-->
			<div style="width: 20%; float: left; text-align: center; "> 
				<h6>Shopping Guide:</h6>
			</div>
			<div style="width: 20%; float: left; text-align: center; "> 
				<h6>Payment Method:</h6>
			</div>
			<div style="width: 20%; float: left; text-align: center; "> 
				<h6>Shopping guarantee:</h6>
			</div>
			<div style="width: 40%; float: left; text-align: center; "> 
				<h6>Mobile phone shopping:</h6>
			</div><br><br><br><br><br><br>
			<div style="text-align: center; "> 
				<p>© 2017 all rights reserved</h6>
			</div>
		<!--</div>-->
	<script>
	<!--
		var speed=8;
		var tab=document.getElementById("demo");
		var tab1=document.getElementById("demo1");
		var tab2=document.getElementById("demo2");
		tab2.innerHTML=tab1.innerHTML;
		function Marquee(){
			if(tab2.offsetWidth-tab.scrollLeft<=0)
				tab.scrollLeft-=tab1.offsetWidth
			else{
				tab.scrollLeft++;
			}
		}
		var MyMar=setInterval(Marquee,speed);
		tab.onmouseover=function() {clearInterval(MyMar)};
		tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
	-->
	</script>

</html>