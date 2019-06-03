<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="utf-8" />
    <link rel="stylesheet" href="bootstrap-3.1.1-dist/bootstrap-3.1.1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap-3.1.1-dist/bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" />
    <script type="text/javascript" src="bootstrap-3.1.1-dist/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <script src="main.js"></script>
    <script> 
	  
        $(document).ready(function(e) {
           
            $("#xoa").click(function(){
              var id=$("#xoa").attr("idmon");
              $.post("xoamon.php",{id:id},function(data){
                location.reload("Thucdon.php");
              });
			});
            $("#sua").click(function(){
              var id=$("#sua").attr("idmon");
              $.post("suamon.php",{id:id},function(data){
                location.reload("Thucdon.php");
              });
			});
        });
    </script>
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
		<form method="POST">
		<?php
		$id=$_GET['id'];
				
		include("Ketnoi.php");
		$con=ketnoi();
		mysqli_set_charset($con, 'UTF8');
		
		$sql= "select * from tblMenu
		 where Mamon=".$id;
		$result=$con->query($sql);
		  
		$data=$result->fetch_assoc();
		?>
		<?php
			if(isset($_POST["btnsua"])){
				$name =$_POST["Tenmon"];
				$cp =$_POST["Chiphi"];
				$img =$_POST["Img"];

				$sql1="UPDATE tblmenu SET Tenmon='$name',Chiphi=$cp,Img='$img' WHERE Mamon=$id";
				$con->query($sql1);				
			}
			if(isset($_POST["btnthem"])){
				$name =$_POST["Tenmon"];
				$cp =$_POST["Chiphi"];
				$img =$_POST["Img"];

				$sql2="INSERT INTO tblmenu( Tenmon, Chiphi, Img) VALUES ('$name',$cp,'$img')";
				$con->query($sql2);
				
				
			}

		?>
			<div class="form-inline">
				<label>TÊN MÓN  ::>   </label>
				<input type="text" id="Tenmon" name="Tenmon" value="<?php echo $data["Tenmon"];?>" class="form-control"/>
				
			</div>
			<br />
			<div class="form-inline">
				<label>CHI PHÍ  ::>     </label>
				<input type="text" id="Chiphi" name="Chiphi"  value="<?php echo $data["Chiphi"];?>" class="form-control"/>
			</div>
			 
			<br />
			<div class="form-inline">
				<label>HÌNH ẢNH ::></label>
				<input type="text" id="img" name="Img" value="<?php echo $data["Img"];?>"  class="form-control"/>
			</div>
			<br />
			<input type="submit" value ="SỬA THÔNG TIN" class="btn btn-primary" name="btnsua">
			<input type="submit" value ="THÊM THÔNG TIN" class="btn btn-primary" name="btnthem">

		</form>
		<br />
		<table class="table table-bordered">
			
				<tr>
				    <th>HÌNH ẢNH MINH HỌA</th>
					<th>TÊN SẢN PHẨM</th>
					<th>CHI PHÍ</th>
					<th>XÓA SẢN PHẨM</th>
					

					
				</tr>
			
			<?php
				
					   $link='img/'.$data["Img"].'.jpg';
					   $str='<tr>
					   <td><img src="'.$link.'" width="80px" height="40px";></td>
					   <td>'.$data['Tenmon'].'</td>
					   <td>'.$data['Chiphi'].'</td>
					   <td><button class="btn btn-primary" type="button" idmon="'.$data['Mamon'].'" id="xoa">XÓA THÔNG TIN</button></td>
					  
				        </tr>';
				
			    echo $str;
			?>
		</table>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
</html>