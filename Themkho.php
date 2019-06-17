<link rel="stylesheet" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=Schoolbell" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div id="tieude" style="text-align: center;"><h1  style="background:linear-gradient(130deg,red, yellow);padding: 10px 0">Thêm Mới Kho</h1></div>
<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = "dbmshtquanlynhahangg";
$conn = mysqli_connect($hostname, $username, $password,$dbname);
if(!$conn){
  echo 'err';
}
mysqli_set_charset($conn,'UTF8');
?>
<?php

if(isset($_POST["mahanghoa"])){
 $mahanghoa=$_POST["mahanghoa"];
 $manhacc=$_POST["manc"]; 
 $tenhh=$_POST["tenhh"];
 $mota=$_POST["mota"];
 $sl=$_POST["soluong"];
 $gia=$_POST["gia"];
 $ngay=$_POST["ngay"];

 $sqlthem= "INSERT INTO tblnhapkho (Mahanghoa,tenhh,Mota,Manhacungcap,Soluong,Gia,Ngay) VALUES('".$mahanghoa."','".$tenhh."','".$mota."','".$manhacc."',$sl,$gia,'".$ngay."')";
 if($conn->query($sqlthem)){
  echo "<span style='color:red'>thanh cong</span>";
  header("Location: Kho.php");
}
else{
  echo "<span style='color:red'>khong thanh cong</span>";
}
}

$str='
<div >
<form method="post" style="margin:0px auto;text-align: center;" action="Themkho.php">
<center>
<table >
<tr>
<td>ma nhacc</td>
<td><select name="manc" style="margin-rigth:70px;" class="changesize">';
$sql2="select * from tblkho";
$query2=$conn->query($sql2);
while($data2=$query2->fetch_assoc()){
  $str .= '<option value="'.$data2["Mahanghoa"].'">'.$data2["Mahanghoa"].'</option>';  
}
$str.='
</select></td>
</tr>

<td>Tên Hàng Hóa</td><td><input type="text"  name="tenhh" ></td>


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
<td>Ngày</td><td><input type="date" name="ngay" ></td>
</tr>
<tr>

</tr>';
$str.='
</select></td>
</tr>
<tr>

</tr>
<tr>
<td>ma nhacc</td>
<td><select name="manc" style="margin-rigth:70px;" class="changesize">';
$sql2="select * from tblnhacungcap";
$query2=$conn->query($sql2);
while($data2=$query2->fetch_assoc()){
  $str .= '<option value="'.$data2["Manhacungcap"].'">'.$data2["Congty"].'</option>';  
}
$str.='
</select></td>
</tr>
<tr>
<td><input type="submit" name="btn" value="lưu"></td>
<td><a href="Kho.php">Quay về</a></td>
</tr>
</table>
</center>
</form>
</div>';



echo $str;
?>