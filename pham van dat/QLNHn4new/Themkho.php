<link rel="stylesheet" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=Schoolbell" rel="stylesheet">
<div id="tieude" style="text-align: center;"><h1>Thêm Mới Kho</h1></div>
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

 if(isset($_POST["btn"])){
   $mahanghoa=$_POST["mahanghoa"];
   $manhacc=$_POST["manc"]; 
   $tenhh=$_POST["tenhh"];
   $mota=$_POST["mota"];
     $sl=$_POST["soluong"];
     $gia=$_POST["gia"];
     $ngay=$_POST["ngay"];
  
     $sqlthem= "INSERT INTO tblnhapkho (Mahanghoa,tenhh,Mota,Manhacungcap,Soluong,Gia,Ngay) VALUES('".$mahanghoa."','".$tenhh."','".$mota."','".$manhacc."',$sl,$gia,'".$ngay."')";
     $conn->query($sqlthem);
     var_dump($conn->query($sqlthem));
 }
 
$str='
    
   <form method="post" style="margin:0px auto;text-align: center;" action="Themkho.php">
   <table>
   <tr>
   <td>Mã Hàng Hóa</td><td><input type="text"  name="mahanghoa" ></td>
   </tr>
   <tr>
   <td>
         ten hh<input type="text"  name="tenhh" >
   </td>

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
   <td><select name="manc" style="margin-left:70px;" class="changesize">';
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
   <td><a href="../Kho.php">Quay về</a></td>
   </tr>
   </table>
</form></div>';
echo $str;
?>