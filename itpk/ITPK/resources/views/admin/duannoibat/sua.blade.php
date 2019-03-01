@extends('admin.master')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dự án nổi bật</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm dự án nổi bật</div>
					@include('errors.note')
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							@csrf()
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Bài viết</label>
										<textarea required class="ckeditor" name="noidung">{{$duannoibat->noidung}}</textarea>
									</div>
									<div class="form-group" >
										<label>Nổi bật</label><br>
										Có: <input type="radio" 
										@php
    										if($duannoibat->noibat == 1){
												echo "checked"; 
    										}
    									@endphp
										name="noibat" value="1">
										Không: <input type="radio"  
										@php
    										if($duannoibat->noibat == 0){
												echo "checked"; 
    										}
    									@endphp
										name="noibat" value="0">
									</div>
									<div class="form-group" >
										<label>Tiêu đề</label>
										<input value="{{$duannoibat->tieude}}" required type="text" name="tieude" class="form-control">
									</div>
									<div class="form-group" >
										<label>Mô tả</label>
										<input value="{{$duannoibat->mota}}" required type="text" name="mota" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="upload/img/{{$duannoibat->hinhanh}}">
									</div>
									
									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									<a href="{{ asset('admin/du-an-noi-bat') }}" class="btn btn-danger">Hủy bỏ</a>
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