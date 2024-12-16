<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="fut_champions";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("ERROR".$conn->connect_error);
    
}
?>