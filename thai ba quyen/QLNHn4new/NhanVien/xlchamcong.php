<?php
include("../connect.php");
$con=connect();
if(isset($_POST["add_post"])){
session_start();
$ngay=$_SESSION['ngay'];
    $ds = $_POST["arr"];
    foreach($ds as $key => $value){
        $sql1="update tblchamcong set tblchamcong.$ngay=1 where tblchamcong.Manhanvien=$value";
        $con->query($sql1);
    }
    header("location:trangchamcong.php");
}
?>