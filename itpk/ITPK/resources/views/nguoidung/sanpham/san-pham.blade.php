@extends('nguoidung.master')
@section('title','Sản phẩm')
@section('noidung')

<div class=" ">
		<div class="noidung">
			<div class="tieude"><h1>SẢN PHẨM</h1></div>
			<div class="row sanpham">
				@foreach ($sanpham1 as $sp1)
					<div class="col-md-3 khung ">
						<div class="row">
							<img class="banner_sanpham banner " alt="{{$sp1->seo}}" src="upload/img/{{$sp1->hinhanhchinh}}">
							<div class="noidung_sanpham khung-slide text-center"><h5>{{$sp1->tieude}}</h5>
									<i>{{number_format($sp1->giatien).' VNĐ'}}</i><br><a href="{{ asset('san-pham-loai-1/'.$sp1->id.'/'.str_slug($sp1->tieude)) }}">Xem chi tiết</a>
							</div>
						</div>
					</div>
				@endforeach

				@foreach ($sanpham2 as $sp2)
					<div class="col-md-3 khung ">
						<div class="row">
							<img class="banner_sanpham banner  " alt="{{$sp2->seo}}" src="upload/img/{{$sp2->hinhanhchinh}}">
							<div class="noidung_sanpham khung-slide text-center"><h5>{{$sp2->tieude}}</h5>
									<i>{{number_format($sp2->giatien).' VNĐ'}}</i><br><a  href="{{ asset('san-pham-loai-2/'.$sp2->id.'/'.str_slug($sp2->tieude)) }}">Xem chi tiết</a>
							</div>
						</div>
					</div>
				@endforeach

				


				
			

			

			</div>


			
		</div>		
</div>


				

			<!-- END MAIN -->
			
@endsection