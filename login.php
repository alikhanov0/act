<?php
include 'connect.php';
session_start();
// Retrieve the email and password values from the AJAX request
$email = $_POST['email'];
$password = $_POST['password'];

setcookie("first_name", "admin");
setcookie("last_name", "admin");
setcookie("email", $email);
// Check in admin table
$sql = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password'";
$result = $conn->query($sql);
if ($result->rowCount() > 0) {
  // Return a success response with the role
  $response = array('status' => 'true', 'role' => 'admin');
  setcookie("role","admin");
  echo json_encode($response);
  exit();
}

// Check in teachers table
$sql = "SELECT * FROM `teachers` WHERE `email` = '$email' AND `password` = '$password'";
$result = $conn->query($sql);
if ($result->rowCount() > 0) {
  // Return a success response with the role
  $response = array('status' => 'true', 'role' => 'teacher');
  setcookie("role","teacher");
  echo json_encode($response);
  $sql = "SELECT `first_name`, `last_name` from `teachers`";
  $result = $conn->query($sql);
  $row = $result->fetch();
  setcookie("first_name",$row['first_name']);
  setcookie("last_name",$row['last_name']);
  exit();
}

// Check in curators table
$sql = "SELECT * FROM `curators` WHERE `email` = '$email' AND `password` = '$password'";
$result = $conn->query($sql);
if ($result->rowCount() > 0) {
  // Return a success response with the role
  $response = array('status' => 'true', 'role' => 'curator');
  $sql = "SELECT `first_name`, `last_name` from `curators`";
  setcookie("role","curator");
  $result = $conn->query($sql);
  $row = $result->fetch();
  setcookie("first_name",$row['first_name']);
  setcookie("last_name",$row['last_name']);
  echo json_encode($response);
  exit();
}

// Check in students table
$sql = "SELECT * FROM `students` WHERE `email` = '$email' AND `password` = '$password'";
$result = $conn->query($sql);
if ($result->rowCount() > 0) {
  // Return a success response with the role
  $response = array('status' => 'true', 'role' => 'student');
  echo json_encode($response);
  setcookie("role","student");
  $sql = "SELECT `first_name`, `last_name` from `students`";
  $result = $conn->query($sql);
  $row = $result->fetch();
  setcookie("first_name",$row['first_name']);
  setcookie("last_name",$row['last_name']);
  
  exit();
}

// If no matching records found in any table, return an error response
$response = array('status' => 'false', 'message' => 'Invalid email or password');
echo json_encode($response);

exit();
?>