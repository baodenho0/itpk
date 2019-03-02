@extends('nguoidung.master')
@section('title','Trang chủ')
@section('noidung')

<div class="main bg">
				<div><img class='banner'src="upload/img/{{$banner->hinhanh}}" alt=""></div>
				<!-- slide -->
				<div class="main-1">
					<div id="carousel-id" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							@php
								$i = 0;
							@endphp
							@foreach ($slide as $sl)
								<div class="item 
								@php
									if($i==0){
									echo "active";
									}
									$i++;
								@endphp

								">
								<div class="row">
								<div class="col-xs-4"><a href="{{$sl->link}}"><div class="row"><img class="banner z_index" alt="{{$sl->tieude}}" src="upload/img/{{$sl->hinhanh}}"><p class="z_index_p">{{$sl->tieude}}</p></div></a></div>
								<div class="col-xs-4"><a href="{{$sl->link}}"><div class="row"><img class="banner z_index" alt="{{$sl->tieude}}" src="upload/img/{{$sl->hinhanh}}"><p class="z_index_p">{{$sl->tieude}}</p></div></a></div>
								<div class="col-xs-4"><a href="{{$sl->link}}"><div class="row"><img class="banner z_index" alt="{{$sl->tieude}}" src="upload/img/{{$sl->hinhanh}}"><p class="z_index_p">{{$sl->tieude}}</p></div></a></div>
								</div>
							</div>
							@endforeach
							
							<!-- <div class="item">
								<img class="banner" alt="Second slide" src="img/slide-1.png">
							</div>
							<div class="item">
								<img class="banner" alt="Third slide" src="img/slide-1.png">
							</div> -->
						</div>
					<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
				<!-- endslide MAIN-->
				</div>
				<div class="marg"><h4 class="button-mid">SẢN PHẨM MỚI</h4></div>
				<div class="main-2">
					<div class="tieude"><h5>
						@php
							$ii=0;
						@endphp
						@foreach ($danhmuc as $dm)
						@php
							if($ii==0){
								echo $dm->tendanhmuc;
							}
							$ii++;
						@endphp
						@endforeach
					</h5></div><br>
					
							<div id="carousel-id-1" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
										<div class="item active">
											<div class="row">
											<div class="col-xs-3 khung"><div class="row">
												<img class="banner" alt="First slide" src="img/slide-21.png">
												<div class="khung-slide text-center"><h5>MÁY LỌC NƯỚC RO TAYRTA NK-0888(8 CẤP LỌC)</h5>
													<i>Mã sản phẩm: NK-3001</i><br><a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-3 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-21.png">
												<div class="khung-slide text-center"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
												<i>Mã sản phẩm: NK-3000</i><br><a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-3 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-21.png">
												<div class="khung-slide text-center"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
													<i>Mã sản phẩm: NK-3000</i><br><a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-3 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-21.png">
												<div class="khung-slide text-center"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
													<i>Mã sản phẩm: NK-3000</i><br><a href="">Xem chi tiết</a></div>
											</div></div>
											</div>
										</div>
										
								</div>
								<a class="left carousel-control" href="#carousel-id-1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-id-1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
				</div>
				<!-- </div> ///////-->


					<!-- endmain 2 -->

				<div class="main-2">
					<div class="tieude"><h5>
						@php
							$iii=0;
						@endphp
						@foreach ($danhmuc as $dm)
						@php
							if($iii==1){
								echo $dm->tendanhmuc;
							}
							$iii++;
						@endphp
						@endforeach

					</h5></div><br>
					<div id="carousel-id-2" class="carousel slide" data-ride="carousel">
									
								<div class="carousel-inner">
										<div class="item ">
											<div class="row">
											<div class="col-xs-3 khung"><div class="row">
												<img class="banner" alt="First slide" src="img/slide-21.png">
												<div class="khung-slide text-center"><h5>MÁY LỌC NƯỚC RO TAYRTA NK-0888(8 CẤP LỌC)</h5>
													<i>Mã sản phẩm: NK-3000</i><br><a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-3 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-21.png">
												<div class="khung-slide text-center"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
												<i>Mã sản phẩm: NK-3000</i><br><a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-3 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-22.png">
												<div class="khung-slide text-center"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
													<i>Mã sản phẩm: NK-3000</i><br><a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-3 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-21.png">
												<div class="khung-slide text-center"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
													<i>Mã sản phẩm: NK-3000</i><br><a href="">Xem chi tiết</a></div>
											</div></div>
											</div>
										</div>

										<div class="item active">
											<div class="row">
											<div class="col-xs-3 khung"><div class="row">
												<img class="banner" alt="First slide" src="img/slide-21.png">
												<div class="khung-slide text-center"><h5>MÁY LỌC NƯỚC RO TAYRTA NK-0888(8 CẤP LỌC)</h5>
													<i>Mã sản phẩm: NK-3000</i><br><a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-3 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-21.png">
												<div class="khung-slide text-center"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
												<i>Mã sản phẩm: NK-3000</i><br><a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-3 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-22.png">
												<div class="khung-slide text-center"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
													<i>Mã sản phẩm: NK-3000</i><br><a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-3 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-21.png">
												<div class="khung-slide text-center"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
													<i>Mã sản phẩm: NK-3000</i><br><a href="">Xem chi tiết</a></div>
											</div></div>
											</div>
										</div>
								</div>
								<a class="left carousel-control" href="#carousel-id-2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-id-2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
				<!-- endmain3 -->
					<div class="marg"><h4 class="button-mid">DỰ ÁN NỔI BẬT</h4></div>

				<div class="main-2">
				
					<div id="carousel-id-3" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
										<div class="item ">
											<div class="row">
											<div class="col-xs-4 khung"><div class="row">
												<img class="banner" alt="First slide" src="img/slide-31.png">
												<div class="khung-slide"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
													<i>Mã sản phẩm: NK-3000</i>&emsp;<a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-4 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-31.png">
												<div class="khung-slide"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
												<i>Mã sản phẩm: NK-3000</i>&emsp;<a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-4 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-31.png">
												<div class="khung-slide"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
													<i>Mã sản phẩm: NK-3000</i>&emsp;<a href="">Xem chi tiết</a></div>
											</div></div>
											</div>
										</div>

										<div class="item active">
											<div class="row">
											<div class="col-xs-4 khung"><div class="row">
												<img class="banner" alt="First slide" src="img/slide-31.png">
												<div class="khung-slide"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
													<i>Mã sản phẩm: NK-3000</i>&emsp;<a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-4 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-31.png">
												<div class="khung-slide"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
												<i>Mã sản phẩm: NK-3000</i>&emsp;<a href="">Xem chi tiết</a></div>
											</div></div>
											<div class="col-xs-4 khung"><div class="row">
												<img class="banner " alt="First slide" src="img/slide-31.png">
												<div class="khung-slide"><h5>DÂY CHUYỀN LỌC NƯỚC TINH KHIẾT CTY VISO CẦN THƠ</h5>
													<i>Mã sản phẩm: NK-3000</i>&emsp;<a href="">Xem chi tiết</a></div>
											</div></div>
											</div>
										</div>
								</div>
								<a class="left carousel-control" href="#carousel-id-3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-id-3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
				<!-- endmain4 -->

				<div class="main-2">
					<div class="row">
					<div class="col-md-3"><div class="marg"><h5 class="button-mid">CHÍNH SÁCH BẢO HÀNH</h5></div></div>
					<div class="col-md-3"><div class="marg"><h5 class="button-mid">TƯ VẤN LẮP ĐẶT</h5></div></div>
					<div class="col-md-3"><div class="marg"><h5 class="button-mid">DỊCH VỤ CỦA ROTECH VN</h5></div></div>
					<div class="col-md-3"><div class="marg"><h5 class="button-mid">LỖI LỌC CHÍNH HÀNG</h5></div></div>
					</div>
					
				</div>
				<!-- END MAIN 5 -->
				<div class="main-2">
					<div class="row">
					<div class="col-md-8"><div class="marg"><h5 class="button-mid">TIN TỨC</h5></div>
						<div class="col-md-5">
							<img class="banner" src="img/3.png" alt="">
							<h3 class="h3"><strong>TẠI SAO NÊN THAY LÕI MÁY LỌC NƯỚC ĐỊNH KỲ</strong></h3>
							<p>...TẠI SAO NÊN THAY LÕI MÁY LỌC NƯỚC ĐỊNH KỲ...</p>
						</div>
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-5">
									<div class="row">
									<img class="banner" src="img/4.png" alt="">
									</div>
								</div>
								<div class="col-md-7">
									<h3 class="h3"><strong>MÁY LỌC NƯỚC RO TỐT NHẤT PHẢI CÓ NHỮNG ĐẶC ĐIỂM SAU</strong></h3>
									<p>Trên thị trường có vô số sản phẩm máy lọc nước.</p>
								</div>
							</div>
						</div>

						<div class="col-md-7 ">
							<div class="row">
								<div class="col-md-5 ">
									<div class="row">
									<img class="banner" src="img/4.png" alt="">
									</div>
								</div>
								<div class="col-md-7">
									<h3 class="h3"><strong>MÁY LỌC NƯỚC RO TỐT NHẤT PHẢI CÓ NHỮNG ĐẶC ĐIỂM SAU</strong></h3>
									<p>Trên thị trường có vô số sản phẩm máy lọc nước.</p>
								</div>
							</div>
						</div>

						<div class="col-md-7 ">
							<div class="row">
								<div class="col-md-5">
									<div class="row">
									<img class="banner" src="img/4.png" alt="">
									</div>
								</div>
								<div class="col-md-7">
									<h3 class="h3"><strong>MÁY LỌC NƯỚC RO TỐT NHẤT PHẢI CÓ NHỮNG ĐẶC ĐIỂM SAU</strong></h3>
									<p>Trên thị trường có vô số sản phẩm máy lọc nước.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row">
						<div class="marg"><h5 class="button-mid">VIDEO</h5></div>
						<img class="banner" src="img/video.png" alt="">
						<br>
						<br>
						<p>... lorem</p>
						</div>
					</div>
					</div>
				</div>
				<!-- END MAIN 6 -->

				<div class="main-2">
					<div class="row">
					<div class="marg"><h4 class="button-mid">ĐỐI TÁC</h4></div>
					<img class="banner" src="img/logo.png" alt="">
					</div>
				</div>

				

				
	</div>
			<!-- END MAIN -->

@endsection