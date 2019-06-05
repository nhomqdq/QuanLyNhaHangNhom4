<?php
     $id=$_POST["id"];
     include("../Ketnoi.php");
     mysqli_set_charset($con, 'UTF8'); 
     $conn=Ketnoi();
     $sql="DELETE FROM tblnhanvien WHERE Manhanvien=$id";
     $sqlcc="DELETE FROM tblchamcong WHERE Manhanvien=$id";
     $sqlql="DELETE FROM tblquanly WHERE Manhanvien=$id";
     $conn->query($sqlql);
     $conn->query("delete from tblcongthang where Manhanvien=$id");
     $conn->query($sqlcc);
     $conn->query($sql);
     $conn->close();
?>