<link rel="stylesheet" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=Schoolbell" rel="stylesheet">
<div id="tieude"><h1>Sửa Thông Tin Nhân Viên</h1></div>
<?php
 $id=$_GET["id"];
 include("../connect.php");
 $con=connect();
 mysqli_set_charset($con, 'UTF8');
 if(isset($_POST["btn"])){
     $ten=$_POST["tennv"];$sdt=$_POST["sdt"];$hsluong=$_POST["hsluong"];$maca=$_POST["maca"];
     $dc=$_POST["diachi"];$chucvu=$_POST["chucvu"];$mabp=$_POST["mabp"];
     $sqlsua="UPDATE tblnhanvien SET Tennhanvien='$ten',Diachi='$dc',Sodienthoai='$sdt',
     Chucvu='$chucvu',Maca='$maca',hesoluong=$hsluong,Mabophan='$mabp' WHERE Manhanvien=$id";
     $con->query($sqlsua);
 }
$sql="select * from tblnhanvien where Manhanvien=$id";
$resul=$con->query($sql);
$data=$resul->fetch_assoc();
$str='
    <div id="bdkhung" style="margin:0px auto; width: 600px;">
   <form method="post" style="margin:0px auto;text-align: center;">
   <table>
   <tr>
   <td>Tên nhân viên</td><td><input type="text" placeholder="tên nv" name="tennv" value="'.$data["Tennhanvien"].'"></td>
   </tr>
   <tr>
   <td>Địa chỉ</td><td><input type="text" placeholder="địa chỉ" name="diachi" value="'.$data["Diachi"].'"></td>
   </tr>
   <tr>
   <td>Sđt</td><td><input type="text" placeholder="sđt" name="sdt" value="'.$data["Sodienthoai"].'"></td>
   </tr>
   <tr>
   <td>Chức Vụ</td><td><input type="text" placeholder="chức vụ" name="chucvu" value="'.$data["Chucvu"].'"></td>
   </tr>
   <tr>
   <td>Mã ca</td><td><select stt="'.$data["Manhanvien"].'" name="maca" style="margin-left:97px;" class="changesize">';
   $sql1="select * from tblca";
   $query1=$con->query($sql1);
   while($data1=$query1->fetch_assoc()){
    if($data1["Maca"]==$data["Maca"]){
    $str .= '<option value="'.$data1["Maca"].'" selected>'.$data1["Ca"].'</option>';}
    else{
      $str .= '<option value="'.$data1["Maca"].'">'.$data1["Ca"].'</option>';  
        }
    }
    $str.='
   </select></td>
   </tr>
   <tr>
   <td>Hệ Số Lương</td><td><input type="text" placeholder="hệ số lương" name="hsluong" value="'.$data["hesoluong"].'"></td>
   </tr>
   <tr>
   <td>mã bộ phận</td>
   <td><select stt="'.$data["Manhanvien"].'" name="mabp" style="margin-left:70px;" class="changesize">';
   $sql2="select * from tblquanly";
   $query2=$con->query($sql2);
   while($data2=$query2->fetch_assoc()){
    if($data2["Mabophan"]==$data["Mabophan"]){
    $str .= '<option value="'.$data2["Mabophan"].'" selected>'.$data2["Tenbophan"].'</option>';}
    else{
      $str .= '<option value="'.$data2["Mabophan"].'">'.$data2["Tenbophan"].'</option>';  
        }
    }
    $str.='
   </select></td>
   </tr>
   <tr>
   <td><input type="submit" name="btn" value="Xác Nhận Thay Đổi"></td>
   <td><a href="../NhanVien.php">Quay về</a></td>
   </tr>
   </table>
</form></div>';
echo $str;
?>