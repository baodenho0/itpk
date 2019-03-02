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
					<div class="col-md-4"><small>{{$banner_top->diachi}}</small></div>
					<div class="col-md-5"><input type="text" placeholder="Nhập từ khóa tìm kiếm"></div>
					<div class="col-md-3"><small>{{$banner_top->email}}</small></div>
					</div>
				</div>

				<div ><img class="banner" src="upload/img/{{$banner_top->bannerdautrang}}" alt="banner"></div>
			</div>
			<!-- endheader -->

			<nav id="navbar" class="navbar navbar-default" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div id="navbar-header-menu" class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span>MENU</span>
						</button>
						<!-- <a class="navbar-brand navbar-toggle " href="#">TRANG CHỦ</a> -->
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div  class="collapse navbar-collapse navbar-ex1-collapse  ">
						<ul class="nav navbar-nav ">
							<li ><a href="{{ asset('/') }}">TRANG CHỦ</a></li>
							<li ><a href="{{ asset('/gioi-thieu') }}">GIỚI THIỆU</a></li>
							<li><a href="{{ asset('/san-pham') }}">SẢN PHẨM</a></li>
							<li ><a href="{{ asset('/dich-vu') }}">DỊCH VỤ</a></li>
							<li><a href="{{ asset('tin-tuc') }}">TIN TỨC</a></li>
							<li ><a href="{{ asset('/tuyen-dung') }}">TUYỂN DỤNG</a></li>
							<li><a href="{{ asset('/lien-he') }}">LIÊN HỆ</a></li>
						</ul>
						
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>

			@yield('noidung')

			<div class="footer">
				<div class="row">
				<div class="col-md-4">
					<h3 class="h3-1">VỀ CHÚNG TỐI</h3>
					<p>{{$footer->vechungtoi}}</p>
					<div class="row">
					<div class="col-md-6">{{$footer->hotline}}</div>
					<div class="col-md-6">{{$footer->email}}</div>
					</div>
					<h3 class="h3-1">THEO DÕI CHÚNG TÔI</h3>
					<h3 class="h3-1">HỖ TRỢ TRỰC TUYẾN</h3>
					<div class="row">
					<div class="col-md-6">{{$footer->hotrotructuyen}}</div>
					</div>
				</div>

				<div class="col-md-4">
					<h3 class="h3-1">CÔNG TY TNHH ROTECH VIỆT NAM</h3>
					<p>{{$footer->trongtincty}}</p>
					<h3 class="h3-1">CHÍNH SÁCH</h3>
					<p>{!!$footer->chinhsach!!}</p>
					
				</div>
				<div class="col-md-4">
					<h3 class="h3-1">FANPAGE</h3>
					<p>{!!$footer->fanpage!!}</p>
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
		<script>
		
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
				var mql = window.matchMedia("(min-width: 768px)");
			  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
			  	if(mql.matches){
			    document.getElementById("navbar").style.position = "fixed";
				}
			    // document.getElementById("navbar").style.z-index = "99999";
			    // document.getElementById("navbar-header-menu").style.display = "none";
			  } else {
			    document.getElementById("navbar").style.position = "static";
			    // var element = document.getElementById("navbar")
			    // element.parentNode.removeChild(element);
			  }
			}


		
			
</script>
</body>
</html>