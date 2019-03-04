@extends('nguoidung.master')
@section('title','Liên hệ')
@section('noidung')

<div class="main bg">
		<div class="noidung">
			<div class="tieude"><h1>LIÊN HỆ</h1></div>
			<div class="noidung_1">{!!$lienhe->noidung!!}</div>

				<div class="noidung">
			<div class="tieude"><h1></h1></div>
			<div class="noidung_1">
				@include('errors.note')
				<form method="post" action="{{ asset('lien-he/thong-tin-lien-he') }}">
					@csrf()
					<input required="" name="hoten" class="form-control" type="text" value="" placeholder="Họ tên"><br>
					<input required="" name="email" class="form-control" type="email" value="" placeholder="Email"><br>
					<input required="" name="diachi" class="form-control" type="text" value="" placeholder="Địa chỉ"><br>
					<input required="" name="sdt" class="form-control" type="number" value="" placeholder="Điện thoại"><br>
					{{-- <textarea required="" placeholder="Nội dung" class="form-control"></textarea><br> --}}
					<input class="btn btn-green" type="submit" value="Gửi">
				</form>
			</div>
			
		</div>	

			<div>{!!$lienhe->bando!!}</div>
		</div>	

			
				

				
</div>
			<!-- END MAIN -->
			
@endsection