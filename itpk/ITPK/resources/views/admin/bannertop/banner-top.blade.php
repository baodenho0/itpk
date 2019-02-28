@extends('admin.master')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Banner Top</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Cập nhật</div>
					<div class="panel-body">
						<form method="POST" enctype="multipart/form-data">
							@csrf()
							@include('errors.note')
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Banner đầu trang</label>
										<input value="{{$bannertop->bannerdautrang}}" required type="text" name="bannerdautrang" class="form-control">
									</div>
									<div class="form-group" >
										<label>Logo</label>
										<input value="{{$bannertop->logo}}" required type="text" name="logo" class="form-control">
									</div>
									<div class="form-group" >
										<label>Hotline</label>
										<input value="{{$bannertop->hotline}}" required type="number" name="hotline" class="form-control">
									</div>
									<div class="form-group" >
										<label>Địa chỉ</label>
										<input value="{{$bannertop->diachi}}" required type="text" name="diachi" class="form-control">
									</div>
									<div class="form-group" >
										<label>Email</label>
										<input value="{{$bannertop->email}}" required type="email" name="email" class="form-control">
									</div>
									<div class="form-group" >
										<label>Background</label>
										<input accept="image/*"  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img  id="avatar" class="thumbnail" width="300px" src="upload/img/{{$bannertop->background}}" >
									</div>
									<div class="form-group" >
										<label>Slogan</label>
										<input value="{{$bannertop->slogan}}" required type="text" name="slogan" class="form-control">
									</div>
									
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