<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>HỆ THỐNG QUẢN LÝ NHÀ HÀNG</title>
		 
			
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<style>
					.row text-center {
				overflow: hidden;
				max-width: 250x;
				max-height:260px;
	
			}
	
			.col-sm-4 item {
				position: relative;
	
			}
	
			img {
				transition: 0.5s ease; 
			}
	
			img:hover {
				transform: scale(1.2);
			}
	
				</style>
	
			<linK rel="stylesheet" href="css/quabinh.css">
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						        <a href="Trangchu.php"><img src="img/logo.png" alt="" title="" /></a>
						      </div>
				  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-center d-flex">			
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="Trangchu.php">Home</a></li>
				          <li><a href="Thucdon.php">Thực Đơn</a>
									<ul>
				              <li><a href="Donuong.php">Đồ Nướng</a></li>
											<li><a href="Doannhanh.php">Đồ Ăn Nhanh</a></li>
											<li><a href="Banhtrai.php">Bánh Trái</a></li>
				              <li><a href="Thucuong.php">Thức Uống</a></li>
				            </ul>
									</li>
				          <li><a href="NhanVien.php">Nhân Viên</a></li>
				         
				          <li class="Kho"><a href="Kho.php">Kho</a>
				            <ul>
				              <li><a href="Themkho.php">Nhập Kho</a></li>
				              <liu><a href="Xuatkho.php">Xuất Kho</a></li>
				            </ul>
				          </li>	h
				          <li class="menu-has-children"><a href="">Quản Lý Bàn</a>
				            <ul>
											    <li><a href="Order.php">Order</a></li>
						              <li><a href="#">Đặt Bàn</a></li>
						              <li><a href="#">Tình Trạng</a></li>
						           				                		
				            </ul>
				          </li>					          					          		          
				          <li><a href="ccontact.php">Hóa Đơn</a></li>
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
							<p class="text-white link-nav"><a href="Trangchu.php"> </a> <a href="NhanVien.php"></a> <a href="Khachhang.php"> </a> <span class="lnr lnr-arrow-right"></span>  </a></p>
						</div>	
					</div>
				</div>
			</section>
			<div>
			<br/>

			<br/>
			</div>
      
			<div class="container text-center">
        
        <div class="row text-center">
			
			<table class="table table-bordered">
			
				<tr>
				  <th>Mã Hàng Hóa</th>
					<th>Mã Nhà Cung Cấp</th>
					<th>Mô Tả</th>
					<th>Số Lượng</th>
					<th>Gía</th>   
					<th>Ngày</th>
					<th>Công ty</th>
					<th>Tên Hàng Hóa</th>
					<th>Thành tiền </th>
					
				</tr>
		
			<?php
			
			include("Ketnoi.php");
			$con=ketnoi();
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
					   <td><a href="Suakho.php">chi tiet</a></td>
					   </td>
					  
				        </tr>';
				    }
				
			    echo $str;
			?>
		</table>
        </div>
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
EMAIL: &copy;<script>document.write(new Date().getFullYear());</script> nhahang@gmail.com <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Nhà hàng số 1 </a>
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

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>			
            <script src="js/isotope.pkgd.min.js"></script>								
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>