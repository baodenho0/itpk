@extends('admin.master')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Banner</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Cập nhật</div>
					@include('errors.note')
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							@csrf()
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tiêu đề </label>
										<input value="{{$banner->tieude}}" required type="text" name="tieude" class="form-control">
									</div>
									<div class="form-group" >
										<label>Link</label>
										<input value="{{$banner->link}}" required type="text" name="link" class="form-control">
									</div>
									<div class="form-group" >
										<label>Seo </label>
										<input value="{{$banner->seo}}" required type="text" name="seo" class="form-control">
									</div>
									
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input  accept="image/*" id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="upload/img/{{$banner->hinhanh}}">
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