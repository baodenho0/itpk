@extends('admin.master')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Đối tác</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Cập nhật Đối tác</div>
					@include('errors.note')
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							@csrf()
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									
									<div class="form-group" >
										<label>Logo đối tác</label>
										<input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="upload/img/{{$doitac->hinhanh}}">
									</div>
									<div class="form-group" >
										<label>Seo</label>
										<input value="{{$doitac->seo}}" required=""  type="text" name="seo" class="form-control ">
					                    
									</div>

									
									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									<a href="{{ asset('admin/doi-tac') }}" class="btn btn-danger">Hủy bỏ</a>
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