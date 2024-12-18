<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="fut_champions";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("ERROR".$mysqli -> connect_error);
    exit();
}
?>