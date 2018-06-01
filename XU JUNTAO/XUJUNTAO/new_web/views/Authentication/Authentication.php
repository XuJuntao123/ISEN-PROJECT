<!DOCTYPE html>
<html>
<head>
<title>Login page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- JQuery CDN Code -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="mystyle.css">  
</head>
<body> 

  <form action="index.php?controllers=login&method=loggin" method = "POST">
    <div class="container" style="margin-top: 5%;">
      <div class="form-group">
        <label><b>Username</b></label>
        <input class ="form-control" type="text" placeholder="Enter Username" name="uname" required>
      </div>
      <div class="form-group">
        <label><b>Password</b></label>
        <input class ="form-control" type="password" placeholder="Enter Password" name="psw" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Login</button>
        <input type="checkbox" checked="checked"> Remember me
      </div>
      <div class="well" >
        <span>Forgot <a href="#">password?</a></span><br>
        <span><a href="<?php echo SWAP?>Registration.php">Create new Account!</a></span>
      </div>  
    </div>
  </form>



</body>
</html>