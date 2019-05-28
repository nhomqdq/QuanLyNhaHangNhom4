<link rel="stylesheet" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=Schoolbell" rel="stylesheet">
<div id="tieude" style="text-align: center;"><h1>Thêm Mới Kho</h1></div>
<?php 
              
      include("Ketnoi.php");
      $con=ketnoi();
      mysqli_set_charset($con,'UTF8');
    ?>
<?php

 if(isset($_POST["btn"])){
     $ten=$_POST["Themkho"];$mahanghoa=$_POST["mahanghoa"];$manhacc=$_POST["manhacc"];$mota=$_POST["mota"];
     $sl=$_POST["soluong"];$gia=$_POST["gia"];$ngay=$_POST["ngay"];$tenhanghoa=$_POST["tenhanghoa"];
  
     $sqlthem="INSERT INTO tblKho(Mahanghoa,Manhacungcap,Mota,Soluong,Gia,Ngay,Tenhanghoa) 
     VALUES('$Mahanghoa','$Manhacungcap',$Mota,'$Soluong','$Gia','$Ngay','$Tenhanghoa')";
     $con->query($sqlthem);
 }
$str='
    
   <form method="post" style="margin:0px auto;text-align: center;">
   <table>
   <tr>
   <td>Mã Hàng Hóa</td><td><input type="text"  name="mahanghoa" ></td>
   </tr>
   <tr>
   <td>Mã Nhà Cung Cấp</td><td><input type="text"  name="manhacc" ></td>
   </tr>
   <tr>
   <td>Mô Tả</td><td><input type="text"  name="mota" ></td>
   </tr>
   <tr>
   <td>Số Lượng</td><td><input type="text"  name="soluong" ></td>
   </tr>
   <tr>
  <td>giá</td><td><input type="text"  name="gia" ></td>
   </tr>
   <tr>
   <td>Ngày</td><td><input type="text" name="Ngày" ></td>
   </tr>
   <tr>
   <td>Tên Hàng Hóa</td><td><input type="text"  name="tenhanghoa" ></td>
   </tr>';
   $sql1="select * from tblkho";
   $query1=$con->query($sql1);
   while($data1=$query1->fetch_assoc()){ 
      $str .= '<option value="'.$data1["Mahanghoa"].'">'.$data1["Mahanghoa"].'</option>';  
    }
    $str.='
   </select></td>
   </tr>
   <tr>
   <td>Hệ Số Lương</td><td><input type="text"  name="hsluong"></td>
   </tr>
   <tr>
   <td>Tên bộ phận</td>
   <td><select name="mabp" style="margin-left:70px;" class="changesize">';
   $sql2="select * from tblquanly";
   $query2=$con->query($sql2);
   while($data2=$query2->fetch_assoc()){
      $str .= '<option value="'.$data2["Mabophan"].'">'.$data2["Tenbophan"].'</option>';  
    }
    $str.='
   </select></td>
   </tr>
   <tr>
   <td><input type="submit" name="btn" value="Xác Nhận Thay Đổi"></td>
   <td><a href="../Kho.php">Quay về</a></td>
   </tr>
   </table>
</form></div>';
echo $str;
?>