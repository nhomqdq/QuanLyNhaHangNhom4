<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<meta charset="utf-8" />
    <link rel="stylesheet" href="bootstrap-3.1.1-dist/bootstrap-3.1.1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap-3.1.1-dist/bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" />
    <script type="text/javascript" src="bootstrap-3.1.1-dist/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <script src="main.js"></script>
    
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			
		</div> 
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
	<h3 class="text-primary" >HỆ THỐNG QUẢN LÝ NHÀ HÀNG SỐ MỘT HIỆN NAY</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		
		
			<br />
			
		<br />

		<?php	
		       		
			include("Ketnoi.php");
			$con=ketnoi();
			mysqli_set_charset($con,'UTF8');
		?>
		<?php
		  if(isset($_POST["btnthem"])){
		  	//$id=$_GET['id'];
		  	$Manhacungcap=$_POST["Manhacungcap"];
		  	$Mahanghoa=$_POST["Mahanghoa"];
		  	$mota=$_POST["mota"];
		  	$Soluong=$_POST["soluong"];
		  	$Gia=$_POST["gia"];
		  	$Ngay=$_POST["ngay"];

		  	//ECHO $Manhacungcap." ".$Mahanghoa. " ".$mota . $Soluong . $Gia . $Ngay; 
		  
		  	

		  	  $insert = "INSERT INTO tblnhapkho VALUES('$Mahanghoa','$mota', '$Manhacungcap',$Soluong,$Gia,'$Ngay')";
		  	  $con->query($insert);
		  	  header('location:Nhapkho.php');
		  }
		 ?>
   </table>
		
	  <div style="text-align: center;"> 
	  	<lable>TÊN NHÀ CUNG CẤP</lable>
	  	<form method="POST" action="" >
		 
		<?php
		              
			 		$str='<select name="Manhacungcap">';
			 		$sql1="select * from tblnhacungcap ";
			 		$result1=$con->query($sql1) or die($con->error);;
			 		while($data1=$result1->fetch_assoc()){
					  	$str.='<option value='.$data1['Manhacungcap'].'>'.$data1['Congty'].'</option>';
					}   	
					    $str.='</select>';
					echo $str;
		?>
		   
		</div> <br/>

		<div style="text-align: center;">
		<lable>MÃ HÀNG HÓA</lable>
		<?php
			 		$kho='<select name="Mahanghoa">';
			 		$sql2="select * from tblkho ";
			 		$result2=$con->query($sql2) or die($con->error);;
			 		while($data2=$result2->fetch_assoc()){
					  	$kho.='<option value='.$data2['Mahanghoa'].'>'.$data2['Mahanghoa'].'</option>';
					}   	
					    $kho.='</select>';
					echo $kho;
			?>
		   
		</div> <br/>

		<div style="text-align: center;">
		<lable>MÔ TẢ</lable>
		    <input type="text" name="mota"></br>
		
		    <div>  <br/>
		<lable style="text-align: center;">SÔ LƯỢNG</lable>
		    <input type="text" name="soluong"></br>
		    </div> <br/>
		<div style="text-align: center;"><lable>GIÁ</lable>
		    <input type="text" name="gia" ></br>
		    </div> <br/>
		<div style="text-align: center;"><lable >NGÀY</lable>
		    <input type="text" name="ngay"></br>
		    </div>  <br/>
		   
		

		    <input type="submit" name="btnthem" value="THÊM"> <br/>

		    

		</form>
	

		<table class="table table-bordered">
			
				<tr>
				  <th>Mã Hàng Hóa</th>
					<th>MÃ NHÀ CUNG CẤP</th>
					<th>Mô Tả</th>
					<th>Số Lượng</th>
					<th>Giá</th>   
					<th>Ngày</th>
					<th>Tên Hàng Hóa</th>
					<th>Tên Công Ty</th>
					<th>Thành Tiền</th>
					
				</tr>
		
			<?php
				$str='';
		   mysqli_set_charset($con,'UTF8');
			$sql= "SELECT  tblkho.Mahanghoa,tblnhacungcap.Manhacungcap,tblnhapkho.Mota,tblnhapkho.Soluong,tblnhapkho.Gia,tblnhapkho.Ngay,tblkho.Tenhanghoa,tblnhacungcap.Congty,(tblnhapkho.Soluong*tblnhapkho.Gia) AS Thanhtien from tblnhapkho join tblnhacungcap on tblnhacungcap.Manhacungcap = tblnhapkho.Manhacungcap join tblkho on tblkho.Mahanghoa=tblnhapkho.Mahanghoa "; 
			
			$result=$con->query($sql);
			while($data=$result->fetch_assoc()){
					   $str.='<tr>   
					      <td>'.$data['Mahanghoa'].'</td>
						 <td>'.$data['Manhacungcap'].'</td>
						 <td>'.$data['Mota'].'</td>
						 <td>'.$data['Soluong'].'</td>
						 <td>'.$data['Gia'].'</td>
						 <td>'.$data['Ngay'].'</td>
						 <td>'.$data['Tenhanghoa'].'</td>
					  	 <td>'.$data['Congty'].'</td>	
					  	 <td>'.$data['Thanhtien'].'</td>


				        </tr>';
	
			    echo $str;}
			?>
		


	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
</html>