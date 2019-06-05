<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PMQuân</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="../https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
			
		<link href="../https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link href="../https://fonts.googleapis.com/css?family=Schoolbell" rel="stylesheet">
	<script>    
        $(document).ready(function(e) {    
            $("#ngay").change(function(){
               // alert ("sâs");
				var thang=$(this).val();
                $.post("../NhanVien/viewluong.php",{thang:thang},function(data){
                    $("#bdluong").html(data);
                });
            });				
        });
    </script>

	</head>
	<body>
    <nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
							<input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
							<button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<ul>
							
							<li><a href="Trangchu.php">Home</a></li>
				          <li><a href="Thucdon.php">Thực Đơn</a>

									<ul>
				              <li><a href="Donuong.php">Đồ Nướng</a></li>
											<li><a href="Doannhan.php">Đồ Ăn Nhanh</a></li>
											<li><a href="Banhtrai.php">Bánh Trái</a></li>
				              <li><a href="Thucuong.php">Thức Uống</a></li>
				            </ul>
									</li>
				          <li><a href="NhanVien.php">Nhân Viên</a></li>
				          
				          <li class="Kho"><a href="Kho.php">Kho</a>
				            <ul>
				              <li><a href="Nhapkho.php">Nhập Kho</a></li>
				              <li><a href="XuatKho.php">Xuất Kho</a></li>
				            </ul>
				          </li>	
				          <li class="Quanlyban"><a href="">Quản Lý Bàn</a>
				            <ul>
											    <li><a href="Order.php">Order</a></li>
						              <li><a href="Datban.php">Đặt Bàn</a></li>
						              <li><a href="#">Tình Trạng</a></li>
						           				                		
				            </ul>
				          </li>					          					          		          
				          <li><a href="Hoadon.php">Hóa Đơn</a></li>
				          <li><a href="#">View Công</a>
										<ul>
											<li><a href="./chamcong.php#">Chấm Công</a></li>
											<li><a href="./bangcong.php">Xem bảng Công</a></li>
										</ul>
									</li>s
				        </ul>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<div id="colorlib-page">
		<header>
        <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="index.html"><i class="flaticon-cutlery"></i><span>PM</span><span>Quân</span></a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
			
		</header>
		<aside id="colorlib-hero">
        <aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1>NHÀ HÀNG &amp; Số 1</h1>
					   					<p>Chúng tôi tự hào là nhà hàng số một hiện nay.</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn"></a></p>
					   					<div class="desc2"></div>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1>NHÀ HÀNG PMQ</h1>
					   					<p>Với những đầu biết chuyên nghiệp sẽ luôn sẵn sàng phục vụ các bạn.</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn"></a></p>
					   					<div class="desc2"></div>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1></h1>
					   					<p>Sẵn sàng phục vụ là châm ngôn của chung tôi</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn"></a></p>
					   					<div class="desc2"></div>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1></h1>
					   					<p>Cảm ơn các bạn đã ghé thăm</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn"></a></p>
					   					<div class="desc2"></div>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	
			  	</ul>
			  	<div class="mouse">
				   <a href="#" class="mouse-icon">
				   	<div class="mouse-wheel"></div>
				   </a>
				</div>
		  	</div>
		

              <aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1>NHÀ HÀNG &amp; Số 1</h1>
					   					<p>Chúng tôi tự hào là nhà hàng số một hiện nay.</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn"></a></p>
					   					<div class="desc2"></div>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1>NHÀ HÀNG PMQ</h1>
					   					<p>Với những đầu biết chuyên nghiệp sẽ luôn sẵn sàng phục vụ các bạn.</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn"></a></p>
					   					<div class="desc2"></div>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1></h1>
					   					<p>Sẵn sàng phục vụ là châm ngôn của chung tôi</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn"></a></p>
					   					<div class="desc2"></div>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1></h1>
					   					<p>Cảm ơn các bạn đã ghé thăm</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn"></a></p>
					   					<div class="desc2"></div>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	
			  	</ul>
			  	<div class="mouse">
				   <a href="#" class="mouse-icon">
				   	<div class="mouse-wheel"></div>
				   </a>
				</div>
		  	</div>
        </aside>
        
		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-map4"></i>
							</span>
							<h2>Địa Chỉ</h2>
							<p>1:Lê Duẩn -TP Vinh-Nghệ An</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-clock4"></i>
							</span>
							<h2>Giờ Mở Cửa</h2>
							<p>Thứ Hai-Thứ Sáu</p>
							<span>8am - 9pm</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-mobile2"></i>
							</span>
							<h2>Số Điện Thoại</h2>
							<p>+ 001 234 567</p>
							<p>+ 001 234 567</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-envelope"></i>
							</span>
							<h2>Email</h2>
							<p><a href="#">quanbinh15101108@gamil.com</a><br><a href="#">PhamMinhQuan@email.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div>
            <br>
            <div class="row text-center">
            </div>
				<div>
    <div style="width:600px;margin:20px auto;">
        <?php   
        include("../Ketnoi.php");
        $con=Ketnoi();
        $re=$con->query("select * from tblcongthang");
        $str='<select id="ngay" class="col-sm-5"><option value="1">-----CHỌN THÁNG------</option>';
                $i=0;
                foreach($re as $key=>$value){
                    foreach($value as $k =>$va){
                        if($i > 1){
                            $str .= '<option value="'.$k.'">'.$k.'</option>';}
                        else{
                            $i = $i+1;
                        }
                    }
                    break;
                }
        $str .='</select>';
        echo $str;
        ?>
    </div>
    <div id="bdluong" style="width:600px;margin:20px auto;">Lương</div>
</div>	
<br />
				</div>
		</div>

				</div>
        </div>
        <div>



		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-pb-sm">
							<h2>PMQuân</h2>
							<p>Luôn sẵn sàng phục vụ các bạn.</p>
							<p class="colorlib-social-icons">
								<a href="#"><i class="icon-facebook4"></i></a>
								<a href="#"><i class="icon-twitter3"></i></a>
								<a href="#"><i class="icon-googleplus"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
							</p>
						</div>
						<div class="col-md-3 col-pb-sm">
							<h2> Blog</h2>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/dish-5.jpg);"></a>
								<div class="desc">
									<span>Tháng 5, 2019</span>
									<h3><a href="#">Dạy bạn cách nấu</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/dish-7.jpg);"></a>
								<div class="desc">
									<span>Tháng 6, 2019</span>
									<h3><a href="#">Đầu bếp PM</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/dessert-3.jpg);"></a>
								<div class="desc">
									<span>Tháng 6, 2019</span>
									<h3><a href="#">Wecom to PM</a></h3>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-pb-sm">
							<h2>Instagram</h2>
							<div class="instagram">
								<a href="#" class="insta-img" style="background-image: url(images/dessert-1.jpg);"></a>
								<a href="#" class="insta-img" style="background-image: url(images/dessert-2.jpg);"></a>
								<a href="#" class="insta-img" style="background-image: url(images/dish-9.jpg);"></a>
								<a href="#" class="insta-img" style="background-image: url(images/dish-2.jpg);"></a>
							</div>
						</div>
						<div class="col-md-3 col-pb-sm">
							<h2>Một sô bài báo đã viết về nhàn hàng</h2>
							<p>Đây là nơi ăn uống thụ vị cho mọi lứa tuổi</p>
							<div class="subscribe text-center">
								<div class="form-group">
									<input type="text" class="form-control text-center" placeholder="Enter Email address">
									<input type="submit" value="Subscribe" class="btn btn-primary btn-custom">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<span class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Wecom to | PMQuân <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br></span> 
								<span class="block">Tự hào nhà hàng <a href="http://unsplash.com/" target="_blank"></a> &amp; Số 1<a href="https://www.pexels.com/" target="_blank"></a></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

