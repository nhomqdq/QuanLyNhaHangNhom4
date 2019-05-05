<?php
     $id=$_POST["id"];
     include("../connect.php");
     $conn=connect();
     $sql="DELETE FROM tblnhanvien WHERE Manhanvien=$id";
     $conn->query($sql);
     $conn->close();
?>