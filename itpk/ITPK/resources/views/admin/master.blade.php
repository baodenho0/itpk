<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard </title>
<base href="{{ asset('layout') }}/">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ asset('admin/trang-chu') }}">Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li ><a href="{{ asset('admin/trang-chu') }}"> Trang chủ</a></li>
			<li><a href="{{ asset('admin/banner-top') }}">Banner Top</a></li>
			<li><a href="{{ asset('admin/gioi-thieu') }}">Giới thiệu</a></li>
			<li><a href="{{ asset('admin/san-pham') }}">Sản phẩm</a></li>
			<li><a href="{{ asset('admin/dich-vu') }}">Dịch vụ</a></li>
			<li><a href="{{ asset('admin/tin-tuc') }}">Tin tức</a></li>
			<li><a href="{{ asset('admin/tuyen-dung') }}">Tuyển dụng</a></li>
			<li><a href="{{ asset('admin/lien-he') }}">Liên hệ</a></li>
			<li><a href="{{ asset('admin/form-lien-he') }}">Form liên hệ</a></li>
			<li><a href="{{ asset('admin/slide') }}">Slide</a></li>
			<!-- <li role="presentation" class="divider"></li> -->
			<li><a href="{{ asset('admin/banner') }}">Banner</a></li>
			<li><a href="{{ asset('admin/du-an-noi-bat') }}">Dự án nổi bật</a></li>
			<li><a href="{{ asset('admin/video') }}">Video</a></li>
			<li><a href="{{ asset('admin/doitac') }}">Đối tác</a></li>
			<li><a href="{{ asset('admin/footer') }}">Footer</a></li>

		</ul>
		
	</div><!--/.sidebar-->
		
	@yield('noidung')
		  

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})

		function changeImg(input){
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		        var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#img').click();
		    });
		});
	</script>
	@yield('script')
</body>

</html>
