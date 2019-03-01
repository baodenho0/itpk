@extends('admin.master')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Footer</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Cập nhật</div>
					@include('errors.note')
					<div class="panel-body">
						<form method="post" >
							@csrf()
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Về chúng tôi</label>
										<input value="{{$footer->vechungtoi}}" required type="text" name="vechungtoi" class="form-control">
									</div>
									<div class="form-group" >
										<label>Hotline</label>
										<input value="{{$footer->hotline}}" required type="text" name="hotline" class="form-control">
									</div>
									<div class="form-group" >
										<label>Email</label>
										<input value="{{$footer->email}}" required type="email" name="email" class="form-control">
									</div>
									<div class="form-group" >
										<label>MXH</label>
										<input value="{{$footer->mxh}}" required type="text" name="mxh" class="form-control">
									</div>
									<div class="form-group" >
										<label>Hỗ trợ trực tuyến</label>
										<input value="{{$footer->hotrotructuyen}}" required type="text" name="hotrotructuyen" class="form-control">
									</div>
									<div class="form-group" >
										<label>Thông tin công ty</label>
										<input value="{{$footer->trongtincty}}" required type="text" name="thongtincty" class="form-control">
									</div>
									<div class="form-group" >
										<label>Chính sách</label>
										<textarea class="ckeditor" name="chinhsach">{{$footer->chinhsach}}</textarea>
									</div>
									<div class="form-group" >
										<label>Fanpage</label>
										<input value="{{$footer->fanpage}}" required type="text" name="fanpage" class="form-control">
									</div>
									{!!$footer->fanpage!!}
									<br>
									<br>
									
									
									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
								</div>
							</div>
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection