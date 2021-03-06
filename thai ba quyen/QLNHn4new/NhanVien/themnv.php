<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="../img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Nhân viên</title>
		<link rel="stylesheet" href="../https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
			
		<link href="../https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link href="../https://fonts.googleapis.com/css?family=Schoolbell" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="../Nhanvien/style.css" />
			<linK rel="stylesheet" href="../css/quabinh.css">
			<link rel="stylesheet" href="../css/linearicons.css">
			<link rel="stylesheet" href="../css/font-awesome.min.css">
			<link rel="stylesheet" href="../css/bootstrap.css">
			<link rel="stylesheet" href="../css/magnific-popup.css">
			<link rel="stylesheet" href="../css/jquery-ui.css">				
			<link rel="stylesheet" href="../css/nice-select.css">							
			<link rel="stylesheet" href="../css/animate.min.css">
			<link rel="stylesheet" href="../css/owl.carousel.css">				
			<link rel="stylesheet" href="../css/main.css">
      <link rel="stylesheet" href="style.css" />
      <link href="https://fonts.googleapis.com/css?family=Schoolbell" rel="stylesheet">
		</head>
		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						        <a href="../Trangchu.php"><img src="img/logo.png" alt="" title="" /></a>
						      </div>
				  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-center d-flex">			
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="../Trangchu.php">Home</a></li>
				          <li><a href="../Thucdon.php">Thực Đơn</a></li>
				          <li><a href="../NhanVien.php">Nhân Viên</a></li>
				         
				          <li class="Kho"><a href="../Kho.php">Kho</a>
				            <ul>
				              <li><a href="../Nhapkho.php">Nhập Kho</a></li>
				              <li><a href="../Xuatkho.php">Xuất Kho</a></li>
				            </ul>
				          </li>	
				          <li class="menu-has-children"><a href="../">Quản Lý Bàn</a>
				            <ul>
											    <li><a href="../#">Order</a></li>
						              <li><a href="#">Đặt Bàn</a></li>
						              <li><a href="#">Tình Trạng</a></li>
						           				                		
				            </ul>
				          </li>					          					          		          
				          <li><a href="contact.php">Hóa Đơn</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">						
							</h1>	
							<p class="text-white link-nav"><a href="../Trangchu.php"> </a> <a href="../NhanVien.php"></a> <a href="../Khachhang.php"> </a> <span class="lnr lnr-arrow-right"></span> <a> Quyền Bá hân hạnh tài trợ chương trình này</a></p>
						</div>	
					</div>
				</div>
			</section>
<!------------------- body ---------------------->
<div>
    <div style="width:600px;margin:0px auto;">
    <br />
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
     $sqltimmax="SELECT max(Manhanvien)'stt' FROM tblnhanvien";
     $kqmax=$con->query($sqltimmax);
     if($kqmax->num_rows > 0){
     while($dt = $kqmax->fetch_assoc()){
         $manv=$dt["stt"];
        }
      }
      else{
      $manv=1;
      }
     $sqlthemcc="insert into tblchamcong(Manhanvien) values($manv)";
		 $con->query($sqlthemcc);
		 $con->query("insert into tblcongthang(Manhanvien,Tennhanvien) values($manv,'$ten')");
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
    </div>
</div>	
<br />
<!-------------------end body ---------------------->

<footer class="footer-area">
	<div class="footer-widget-wrap">
		<div class="container">
			<div class="row section-gap">
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>GIỜ MỞ CỬA</h4>
						<ul class="hr-list">
							<li class="d-flex justify-content-between">
								<span>Thứ Hai - Thứ Sáu</span> <span>08.00 am - 10.00 pm</span>
							</li>
							<li class="d-flex justify-content-between">
								<span>Thứ Bảy</span> <span>08.00 am - 10.00 pm</span>
							</li>
							<li class="d-flex justify-content-between">
								<span>Chủ Nhật</span> <span>08.00 am - 10.00 pm</span>
							</li>																				
						</ul>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Liên Hệ</h4>
						<p>
							Địa chỉ: 182 đường Lê Duẩn; Thành phố Vinh, Nghệ An.
						</p>
						<p class="number">
							096969669<br>				
						</p>
					</div>
				</div>						
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Bản tin</h4>
						<p>Quí khách có thể tin tưởng chúng tôi với những ưu đã tốt nhất cho quí vị.</p>
						<div class="d-flex flex-row" id="mc_embed_signup">
										  <form class="navbar-form" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
										    <div class="input-group add-on align-items-center d-flex">
										      	<input class="form-control" name="EMAIL" placeholder="Your Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email address'" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
										      <div class="input-group-btn">
										        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
										      </div>
										    </div>
										      <div class="info mt-20"></div>
										  </form>
									</div>
								</div>
							</div>						
						</div>					
					</div>					
				</div>
				<div class="footer-bottom-wrap">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between align-items-center">
							<p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
EMAIL: &copy;<script>document.write(new Date().getFullYear());</script> nhahang@gmail.com <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="../https://colorlib.com" target="_blank">Nhà hàng số 1 </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							<ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
	                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
	                            <li><a href="#"><i class="fa fa-behance"></i></a></li>           
	                        </ul>
						</div>						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="../js/vendor/jquery-2.2.4.min.js"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="../js/jquery-ui.js"></script>					
  			<script src="../js/easing.min.js"></script>			
			<script src="../js/hoverIntent.js"></script>
			<script src="../js/superfish.min.js"></script>	
			<script src="../js/jquery.ajaxchimp.min.js"></script>
			<script src="../js/jquery.magnific-popup.min.js"></script>						
			<script src="../js/jquery.nice-select.min.js"></script>					
			<script src="../js/owl.carousel.min.js"></script>			
            <script src="../js/isotope.pkgd.min.js"></script>								
			<script src="../js/mail-script.js"></script>	
			<script src="../js/main.js"></script>
		</body>
	</html>