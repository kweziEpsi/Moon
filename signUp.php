<?php

$first_name = "";
$last_name = "";
$username =""; 
$email ="";
$phone ="";
$gender="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = test_input($_POST["first_name"]);
  $last_name = test_input($_POST["last_name"]);
  $username = test_input($_POST["username"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>