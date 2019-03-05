@extends('nguoidung.master')
@section('title','Chi tiết sản phẩm')
@section('noidung')

<div class=" ">
		<div class="noidung">
			<div class="tieude"><h1>CHI TIẾT SẢN PHẨM</h1></div>
			<div class="row sanpham">
				
					<div class="col-md-3 khung ">
						<div class="row">
							<img class="banner_sanpham banner " alt="{{$sanpham->seo}}" src="upload/img/{{$sanpham->hinhanhchinh}}">
							
						</div>
					</div>

					<div class="col-md-9 ">
						<div class="row">
							<div class="chitietsanpham">{!!$sanpham->chitietsanpham!!}
							<div class="tieude"><strong>Thông số kỹ thuật</strong></div>
							{!!$sanpham->thongsokythuat!!}
							</div>
							
						</div>
					</div>
			<div>
				
			</div>
	</div>
	

		<div class="chitietsanpham">{!!$sanpham->mota!!}
		<div class="tieude"><strong>Viết bình luận</strong></div>
							{!!$sanpham->cmtfb!!}
							</div>
		</div>
			
		</div>		
</div>


				

			<!-- END MAIN -->
			
@endsection