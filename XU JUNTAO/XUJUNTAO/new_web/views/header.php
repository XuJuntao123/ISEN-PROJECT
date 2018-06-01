<?php Session::init() ?>
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

  <link rel="stylesheet" type="text/css" href="<?php echo LOCALHOST; ?>/public/css/mystyle.css">
  <!-- Navbar -->
  <div class="nav navbar-inverse" style="background-color: #373737">
    <div class="container"> 
      <div class="navbar-header">
        <img src="<?php echo LOCALHOST ?>/publics/photos/cash.png" style="width:50px;height:50px; margin: 5px">
      </div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
        <span class="sr-only">Togggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      </div> 
      <div class="collapse navbar-collapse" id="example">
        <ul class="nav navbar-nav" style="margin-top: 5px;">
          <li><a href="index.php">HOME</a></li>
          <li><a href="<?php echo SWAP ?>FAQ.php">FAQs</a></li>
          <li><a href="<?php echo SWAP ?>ContactUs.php">CONTACT US</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-top: 5px;">
          <?php if(Session::get('User') == false):?>
            <li><a href="<?php  echo SWAP?>Authentication.php">LOG-IN</a></li>
          <?php elseif(Session::get('User') == 'root'): ?>
            <li><a href="<?php echo SWAP ?>CreateProduct.php">CREATE PRODUCT</a></li>
            <li><a href="<?php echo SWAP ?>ContactInfo.php">USER FEEDBACK</a></li>
            <li><a href="index.php?controllers=login&method=logout"><?php echo Session::get('User') ?></a></li>
          <?php else: ?>
            <li><a href="index.php?controllers=login&method=logout"><?php echo Session::get('User') ?></a></li>
          <?php endif; ?>
        </ul> 
      </div>      
    </div>
  </div>
