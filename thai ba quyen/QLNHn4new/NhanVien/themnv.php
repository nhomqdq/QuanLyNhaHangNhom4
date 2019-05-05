<link rel="stylesheet" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=Schoolbell" rel="stylesheet">
<div id="tieude"><h1>Thêm Mới Nhân Viên</h1></div>
<?php
 include("../connect.php");
 $con=connect();
 mysqli_set_charset($con, 'UTF8');
 if(isset($_POST["btn"])){
     $ten=$_POST["tennv"];$sdt=$_POST["sdt"];$hsluong=$_POST["hsluong"];$maca=$_POST["maca"];
     $dc=$_POST["diachi"];$chucvu=$_POST["chucvu"];$mabp=$_POST["mabp"];$ngaylam=$_POST["ngaylam"];
     $ngaysinh=$_POST["ngaysinh"];$gt=$_POST["gt"];
     $sqlthem="INSERT INTO tblnhanvien(Tennhanvien,Ngaysinh,Gioitinh,Diachi,Sodienthoai,Chucvu,Maca,hesoluong,Ngaybatdau,Mabophan) 
     VALUES('$ten','$ngaysinh',$gt,'$dc','$sdt','$chucvu','$maca',$hsluong,'$ngaylam','$mabp')";
     $con->query($sqlthem);
 }
$str='
    <div id="bdkhung" style="margin:0px auto; width: 600px;">
   <form method="post" style="margin:0px auto;text-align: center;">
   <table>
   <tr>
   <td>Tên nhân viên</td><td><input type="text" placeholder="tên nv" name="tennv" ></td>
   </tr>
   <tr>
   <td>Ngày sinh</td><td><input type="text" placeholder="dd/mm/yyyy" name="ngaysinh" ></td>
   </tr>
   <tr>
   <td>Giới Tính</td><td id="gt"> <form action="" methor="post">
        <input type="radio" name="gt" value="0" checked>nam<br>
        <input type="radio" name="gt" value="1">nữ<br>
   </form></td>
   </tr>
   <tr>
   <td>Địa chỉ</td><td><input type="text" placeholder="địa chỉ" name="diachi" ></td>
   </tr>
   <tr>
   <td>Ngày vào làm</td><td><input type="date" placeholder="dd-mm-yyyy" name="ngaylam" ></td>
   </tr>
   <tr>
   <td>Sđt</td><td><input type="text" placeholder="sđt" name="sdt" ></td>
   </tr>
   <tr>
   <td>Chức Vụ</td><td><input type="text" placeholder="chức vụ" name="chucvu" ></td>
   </tr>
   <tr>
   <td>Ca làm</td><td><select name="maca" style="margin-left:97px;" class="changesize">';
   $sql1="select * from tblca";
   $query1=$con->query($sql1);
   while($data1=$query1->fetch_assoc()){ 
      $str .= '<option value="'.$data1["Maca"].'">'.$data1["Ca"].'</option>';  
    }
    $str.='
   </select></td>
   </tr>
   <tr>
   <td>Hệ Số Lương</td><td><input type="text" placeholder="hệ số lương" name="hsluong"></td>
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
   <td><a href="../NhanVien.php">Quay về</a></td>
   </tr>
   </table>
</form></div>';
echo $str;
?>