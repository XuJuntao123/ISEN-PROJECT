
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>F&Q </title>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo CSS ?>F&Q.css">

</head>

<body>
<!-- Content -->
<div class="jumbotron">
	<div class="container">
		<div class="row">
		  <div class="col-md-4" ><img src="<?php echo PHOTOS; ?>FQ.png" style="width:300px;height:130px;margin-top: 60px" ></div>
		  <div class="col-md-8">
			<h1>Common Problems</h1>
				<h3>Question and answers</h3>

				 <hr/>
				<div class="accordion">
                 
              	
              	<?php 	
					require "models/faq_model.php";
					// require "controllers/faq.php";
					// $controller = new Faq();
					// $controller->Loadmodel('faq');
					// $this->model->index();
					$model = new Faq_Model();
					$model->index(); ?>
              			
                <a class="x-link" rel="stylesheet">如何退款?</a>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
				<hr />
             
                <a class="x-link" rel="stylesheet">Other questions?</a>
               <p>If you have other questions, please <a href="index.php?controllers=main&method=swap&file=Contactus.php">Contact us</a>.</p>
			</div>
			</div>
		</div>
	</div>
</div>
   
<div id="footer" style="background-color:#C0B283;clear:both;text-align:center;">Made in China</div>

</body>
</html>
