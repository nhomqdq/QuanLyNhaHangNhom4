<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = "dbmshtquanlynhahangg";
$conn = mysqli_connect($hostname, $username, $password,$dbname);
mysqli_set_charset($conn,'UTF8');
$id = $_GET["id"];
$sql = "delete from tblnhapkho where mahanghoa='".$id."'";
$conn->query($sql);
header("location: suakho.php");
?>