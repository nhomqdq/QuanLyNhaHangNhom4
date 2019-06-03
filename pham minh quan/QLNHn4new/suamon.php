<?php
  
  include("Ketnoi.php");
  $con=ketnoi();
   $id=$_POST["id"];
   $sql="UPDATE `tblmenu` SET  WHERE Mamon=$id";
   $con->query($sql);
   echo "";
?>