<?php
include("Ketnoi.php");
 $con=ketnoi();
 $result="SELECT * FROM tblnhacungcap";
$rs_name =$con->query($result);                                          
while ($row = mysqli_fetch_assoc($rs_name))
{
$rows[] = $row;
}

 $result="SELECT * FROM `tblkho`";
$rs_name =$con->query($result);                                          
while ($row = mysqli_fetch_assoc($rs_name))
{
$row1[] = $row;
}
if (isset($_POST["ok"])) {
    $Mahanghoa=$_POST["ma"];
    $name=$_POST["name"];
    $Soluong=$_POST["Soluong"];
    $donvi=$_POST["donvi"];
    if (!$con) {
        echo "Ket noi that bai";
    }
    $sql="INSERT INTO tblkho (`Mahanghoa`, `Tenhanghoa`, `Soluong`, `Donvi`) VALUES ('".$Mahanghoa."','".$name."','".$Soluong."','".$donvi."')";
    $stmt  = $con->query($sql);
}

?>





<form method="post" action="Insert.php" enctype="multipart/form-data">
       <fieldset>
            <label>Mã hàng hóa:</label>
            <input type="text" name="ma" value="" placeholder="Mã hàng hóa " style="margin-left: 2em;width: 20em;" >
        </fieldset> 
        
        <fieldset>
            <label>name</label>
            <input type="text" name="name" value="" placeholder="name " style="margin-left: 2em;width: 20em;" >
        </fieldset>                              
         <fieldset>
            <label>Số lượng</label>
            <input type="text" name="Soluong" value="" placeholder="So Luong" style="    margin-left: 1.6em;width: 20em;">
        </fieldset>
        <fieldset>
            <label>donvi:</label>
            <input type="text" name="donvi" value="" placeholder="Giá" style="    margin-left: 2.4em;width: 20em;">
        </fieldset>
      
        <button type="submit" name="ok" style="   margin-top: 0.1em; float: left;margin-left: 27px;background: white;padding: 12px;" > Lưu</button>
    </form>