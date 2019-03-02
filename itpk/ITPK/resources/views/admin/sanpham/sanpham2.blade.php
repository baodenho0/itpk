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
								<input required="" type="text" name="tieude" class="form-control" placeholder="Tiêu đề...">
    							<br>
    							<label>Giá tiền</label>
								<input required="" type="number" name="giatien" class="form-control" placeholder="Tiêu đề...">
    							<br>
    							<label>Thông số kỹ thuật</label>
								<textarea  class="ckeditor" required name="thongsokythuat"></textarea>
    							<br>
    							<label>Mô tả</label>
								<textarea class="ckeditor"  required name="mota"></textarea>
    							<br>
    							<label>Chi tiết sản phẩm</label>
								<textarea class="ckeditor" required name="chitietsanpham"></textarea>
    							<br>
    							<label>Nhúng cmt FB</label>
								<input required="" type="text" name="cmtfb" class="form-control" placeholder="Tiêu đề...">
    							<br>
    							<label>Seo</label>
								<input required="" type="text" name="seo" class="form-control" placeholder="Tiêu đề...">
    							<br>
    							
    							<div class="form-group" >
										<label>Ảnh </label>
										<input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
								</div>
								<div class="form-group" >
										<label>Thuộc menu</label><br>
										<select class="form-control" name="menu" id="">
											@foreach ($menu as $mn)
												<option value="{{$mn->id}}">{{$mn->tendanhmuc}}</option>
											@endforeach
										</select>
								</div>
    							<input class="form-control btn btn-primary" type="submit" name="submit" value="Thêm">
    							<br>
    							<br>
    							<a class="btn btn-danger form-control" href="{{ asset('admin/san-pham') }}">Hủy bỏ</a>
    							</form>
							</div>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách sản phẩm</div>
					
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Hình ảnh chính</th>
					                  <th>Tiêu đề</th>
					                  <th>Giá tiền</th>
					                  <th>Thuộc menu</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		@foreach ($sanpham2 as $sp2)
				              			<tr>
				              				<td><img width="40%" src="upload/img/{{$sp2->hinhanhchinh}}" class="thumbnail" alt=""></td>
											<td>{{$sp2->tieude}}</td>
											<td>{{$sp2->giatien}}</td>
											<td>{{$sp2->danhmuc2->tendanhmuc}}</td>
											<td>
					                    		<a href="{{asset('admin/san-pham/menu-2/san-pham/sua/'.$sp2->id)}}" class="btn btn-warning"><span class=""></span> Sửa</a>
					                    		<a href="{{asset('admin/san-pham/menu-2/san-pham/xoa/'.$sp2->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class=""></span> Xóa</a>

					                  		</td>
					                  	</tr>
				              		@endforeach
				              	
			                  	
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

	
@stop