<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" type="text/css" href="<?php echo CSS ?>mystyle.css">
</head>

<body>


<div class="container">
  <form action="index.php?controllers=email&method=contactus" method="POST">

  <h1>Contact Us</h1>
  <br>
    <label for="name">Name</label>
    <br>
    <input type="input" id="name" name="name" placeholder="Please input your full name." style=" width:500px">
  </br>

  <br>
    <label for="email">Email Address</label>
    <br>
    <input type="input" id="email" name="emailaddress" placeholder="Please input your email address." style="width:500px">
  </br>

  <br>
    <label for="contact">Contact Number</label>
    <br>
    <input type="input" id="contact" name="contactnumber" placeholder="Please input your contact number." style="width:500px">
  </br>

  <br>

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Afghanistan">Afghanistan</option>
      <option value="Australia">Australia</option>
      <option value="Austria">Austria</option>
      <option value="Belgium">Belgium</option>
      <option value="Canada">Canada</option>
      <option value="China">China</option>
      <option value="Czech">Czech Republic</option>
      <option value="Denmark">Denmark</option>
      <option value="France">France</option>
      <option value="Germany">Germany</option>
      <option value="Greece">Greece</option>
      <option value="HongKong">Hong Kong</option>
      <option value="Hungary">Hungary</option>
      <option value="Iceland">Iceland</option>
      <option value="Italy">Italy</option>
      <option value="Korea">Korea</option>
      <option value="Luxembourg">Luxembourg</option>
      <option value="Morocco">Morocco</option>
      <option value="Netherlands">Netherlands</option>
      <option value="Norway">Norway</option>
      <option value="Philippines">Philippines</option>
      <option value="Poland">Poland</option>
      <option value="Portugal">Portugal</option>
      <option value="Spain">Spain</option>
      <option value="Sweden">Sweden</option>
      <option value="Switzerland">Switzerland</option>
      <option value="Taiwan">Taiwan</option>
      <option value="USA">USA</option>
    </select>

    <label for="inquiry">Inquiry or Feedback</label>
    <textarea id="inquiry" name="inquiry" placeholder="What inquiry or feedback do you have?" style="height:200px"></textarea>

    <label for="call"> You may also call us at +33 5 09 75 83 51 or email us at webtech@isen.yncrea.fr. Thank you! </label>
    <br></br>

    <input type="submit" name="confirm" value="Submit">
  

  </form>
</div>
</body>

</html>