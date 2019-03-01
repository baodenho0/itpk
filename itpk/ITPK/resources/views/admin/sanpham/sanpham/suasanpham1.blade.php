@extends('admin.master')
@section('noidung')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục Sản phẩm</h1>
				@include('errors.note')
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm sản phẩm
							
						</div>
						
						<div class="panel-body">
							<div class="form-group">
								<form  method="post" enctype="multipart/form-data">
								@csrf()
								<label>Tiêu đề</label>
								<input value="{{$sanpham1->tieude}}" required="" type="text" name="tieude" class="form-control" placeholder="Tiêu đề...">
    							<br>
    							<label>Giá tiền</label>
								<input value="{{$sanpham1->giatien}}" required="" type="number" name="giatien" class="form-control" placeholder="Tiêu đề...">
    							<br>
    							<label>Thông số kỹ thuật</label>
								<textarea  class="ckeditor" required name="thongsokythuat">{{$sanpham1->tieude}}</textarea>
    							<br>
    							<label>Mô tả</label>
								<textarea class="ckeditor"  required name="mota">{{$sanpham1->mota}}</textarea>
    							<br>
    							<label>Chi tiết sản phẩm</label>
								<textarea class="ckeditor" required name="chitietsanpham">{{$sanpham1->tieude}}</textarea>
    							<br>
    							<label>Nhúng cmt FB</label>
								<input value="{{$sanpham1->cmtfb}}" required="" type="text" name="cmtfb" class="form-control" placeholder="Tiêu đề...">
    							<br>
    							<label>Seo</label>
								<input value="{{$sanpham1->seo}}" required="" type="text" name="seo" class="form-control" placeholder="Tiêu đề...">
    							<br>
    							
    							<div class="form-group" >
										<label>Ảnh </label>
										<input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="upload/img/{{$sanpham1->hinhanhchinh}}">
								</div>
								<div class="form-group" >
										<label>Thuộc menu</label><br>
										<select class="form-control" name="menu" id="">
											@foreach ($menu as $mn)
												<option 
												@php
													if($mn->id == $sanpham1->id)
														echo "selected";
												@endphp

												value="{{$mn->id}}">{{$mn->tendanhmuc}}</option>
											@endforeach
										</select>
								</div>
    							<input class="form-control btn btn-primary" type="submit" name="submit" value="Cập nhật">
    							<br>
    							<br>
    							<a class="btn btn-danger form-control" href="{{ asset('admin/san-pham/menu-1/san-pham') }}">Hủy bỏ</a>
    							</form>
							</div>
						</div>
					</div>
			</div>
			
		</div><!--/.row-->
	</div>	<!--/.main-->

	
@stop