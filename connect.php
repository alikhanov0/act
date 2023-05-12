<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=act",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Successfully connected";
} catch(PDOException $e){
    //echo "Connection failed: " . $e->getMessage();
}
?>