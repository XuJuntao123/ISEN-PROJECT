
<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
</head>
<body>	
<!-- myadd -->
	<div align="middle" style="background-color: #c0b283 "><h1>Create account</h1></div>
	<form action="index.php?controllers=login&method=createaccount" method = "post">
    <div class="container">
      <div class="form-group">
        <label><b>First Name</b></label>
        <input class ="form-control" type="text" placeholder="Enter First Name" name="firstname" required>
      </div>
      <div class="form-group">
        <label><b>Last Name</b></label>
        <input class ="form-control" type="text" placeholder="Enter Last Name" name="lastname" required>
      </div>
      <div class="form-group">
        <label><b>Username</b></label>
        <input class ="form-control" type="text" placeholder="Enter Username" name="username" required>
      </div>
      <div class="form-group">
        <label><b>Password</b></label>
        <input class ="form-control" type="password" placeholder="Enter Password" name = "password" required>
      </div>
      <div class="form-group">
        <button name ="submitbtn" type="submit" class="btn btn-primary">Create Account</button>
      </div> 
    </div>
  </form>


    <div id="erwei" align="middle">
       <div id="head">
    		Two-dimensional code scanning
       </div>
       <div id="weima">Mobile phone scan</div>
       <div id=tupian>
          <img src="timg.jpg"  alt="no find">
       </div>
       <div id=zhushi> 
       		Already have an account? <a href="<?php echo SWAP ?>Authentication.php">sign in</a>
       </div>  
    </div>
</body>
</html>
