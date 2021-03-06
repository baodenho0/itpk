@extends('admin.master')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tuyển dụng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Cập nhật tuyển dụng</div>
					@include('errors.note')
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							@csrf()
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Nội dung</label>
										<textarea required class="ckeditor" name="tuyendung">{{$tuyendung->noidung}}</textarea>
									</div>
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label><br>
										Có: <input type="radio" 
										@php
    										if($tuyendung->noibat == 1){
												echo "checked"; 
    										}
    									@endphp
										name="noibat" value="1">
										Không: <input type="radio" 
										@php
    										if($tuyendung->noibat == 0){
												echo "checked"; 
    										}
    									@endphp
										name="noibat" value="0">
									</div>
									<div class="form-group" >
										<label>Mô tả</label>
										<input value="{{$tuyendung->mota}}" required type="text" name="mota" class="form-control">
									</div>
									<div class="form-group" >
										<label>Tiêu đề</label>
										<input value="{{$tuyendung->tieude}}" required type="text" name="tieude" class="form-control">
									</div>
									<div class="form-group" >
										<label>Hình ảnh</label>
										<input accept="image/*" id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="upload/img/{{$tuyendung->hinhanh}}">
									</div>
									
									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									<a href="{{ asset('admin/tuyen-dung') }}" class="btn btn-danger">Hủy bỏ</a>
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