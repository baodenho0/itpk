@extends('admin.master')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tin tức</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm Tin tức</div>
					@include('errors.note')
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							@csrf()
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Nội dung</label>
										<textarea  class="ckeditor" required name="noidung"></textarea>
									</div>
									<div class="form-group" >
										<label>Nổi bật</label><br>
										Có: <input type="radio" name="noibat" value="1">
										Không: <input type="radio" checked name="noibat" value="0">
									</div>
									<div class="form-group" >
										<label>Mô tả </label>
										<input required type="text" name="mota" class="form-control">
									</div>
									<div class="form-group" >
										<label>Tiêu đề</label>
										<input required type="text" name="tieude" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh</label>
										<input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
									</div>
									
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{ asset('admin/tin-tuc') }}" class="btn btn-danger">Hủy bỏ</a>
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