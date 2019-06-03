<?php
  
  include("Ketnoi.php");
  $con=ketnoi();
   $id=$_POST["id"];
   $sql="delete from tblmenu where Mamon=$id";
   $con->query($sql);
   echo "";
?>