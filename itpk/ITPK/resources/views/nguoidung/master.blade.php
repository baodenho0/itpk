<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	<!-- Bootstrap CSS -->
	<base href="{{ asset('layout') }}/">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- // -->
	<div class="container ">
		<div class="row">
			<div class="header">
				<div class="diachi">
					<div class="row">
					<div class="col-md-4"><small>Địa chỉ số 21, đường d10, p.tây thạnh, q.tân phú, tp.hcm</small></div>
					<div class="col-md-5"><input type="text" placeholder="Nhập từ khóa tìm kiếm"></div>
					<div class="col-md-3"><small>email roteeachvietnam.gmail.com</small></div>
					</div>
				</div>

				<div ><img class="banner" src="img/banner.png" alt=""></div>
			</div>
			<!-- endheader -->

			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span>MENU</span>
						</button>
						<!-- <a class="navbar-brand navbar-toggle " href="#">TRANG CHỦ</a> -->
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse ">
						<ul class="nav navbar-nav ">
							<li ><a href="#">TRANG CHỦ</a></li>
							<li ><a href="#">GIỚI THIỆU</a></li>
							<li><a href="#">SẢN PHẨM</a></li>
							<li ><a href="#">DỊCH VỤ</a></li>
							<li><a href="#">TIN TỨC</a></li>
							<li ><a href="#">TUYỂN DỤNG</a></li>
							<li><a href="#">LIÊN HỆ</a></li>
						</ul>
						
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>

			@yield('noidung')

			<div class="footer">
				<div class="row">
				<div class="col-md-4">
					<h3 class="h3-1">VỀ CHÚNG TỐI</h3>
					<p>ROTECH VIỆT NAM là một công ty chuyên nghiên cứu và cung cấp các sản phẩm về chăm sóc sức khỏe của thế kỷ 21 với tầm nhìn làm cho Việt Nam trở thành một quốc gia lành mạnh,</p>
					<div class="row">
					<div class="col-md-6">Hoteline: 0933 14 2323</div>
					<div class="col-md-6">Hoteline: 0933 14 2323</div>
					</div>
					<h3 class="h3-1">THEO DÕI CHÚNG TÔI</h3>
					<h3 class="h3-1">HỖ TRỢ TRỰC TUYẾN</h3>
					<div class="row">
					<div class="col-md-6">Kinh doanh: 0933 14 2323</div>
					<div class="col-md-6">Kỹ thuật: 0933 14 2323</div>
					</div>
				</div>

				<div class="col-md-4">
					<h3 class="h3-1">CÔNG TY TNHH ROTECH VIỆT NAM</h3>
					<p>Địa chỉ:</p>
					<p>Điện thoại:</p>
					<p>Website:</p>
					<h3 class="h3-1">CHÍNH SÁCH</h3>
					<p>Chính sách mua hàng</p>
					<p>Chính sách đổi trả hàng</p>
					<p>Hướng dẫn thanh toán online</p>
					<p>Hướng dẫn bảo hành sản phẩm</p>
					<img class="banner"src="img/7.png" alt="">
					<small>All rights Copyright 2018 ROTECH Desigh by BM Web</small>
				</div>
				<div class="col-md-4">
					<h3 class="h3-1">FANPAGE</h3>
					<img class="banner" src="img/8.png" alt="">
				</div>
				</div>
			</div>
			<!-- END FOOTER -->



				

				


	</div>
	</div>
				<!-- contenner -->

				<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js" ></script>

</body>
</html>