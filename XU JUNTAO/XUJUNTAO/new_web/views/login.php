<?php
session_start();
include 'dbh.php';
$uname = $_POST['uname'];
$psw = $_POST['psw'];

$sql = "SELECT * FROM users WHERE username='$uname' AND password='$psw'";
$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()){
  echo "Your username or password is incorrect!";
}
else{
  $_SESSION['id'] = $row['id'];
  $_SESSION['uname'] = $row['username'];
}

header("Location: SearchPage.php");
?>