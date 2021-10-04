<?php

$username =""; 
$email ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["username"]);
  $email = test_input($_POST["email"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>