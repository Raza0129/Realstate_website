<?php 

$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "allahtawakalstate";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


if ($conn->connect_error) {
    die("connection failed". $conn->connect_error); 
}
?>