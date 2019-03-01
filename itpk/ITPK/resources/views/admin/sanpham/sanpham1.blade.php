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
								<label>Tên menu:</label>
								<form action="{{asset('admin/san-pham/menu-1')}}" method="post" enctype="multipart/form-data">
								@csrf()
    							<input required="" type="text" name="tendanhmuc" class="form-control" placeholder="Tên menu...">
    							<br>
    							<div class="form-group" >
										<label>Check hiển thị</label><br>
										Có: <input type="radio" name="checkhienthi" value="1">
										Không: <input type="radio" checked name="checkhienthi" value="0">
								</div>
								<div class="form-group" >
										<label>Nổi bật</label><br>
										Có: <input type="radio" name="noibat" value="1">
										Không: <input type="radio" checked name="noibat" value="0">
								</div>
    							<div class="form-group" >
										<label>Ảnh </label>
										<input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
								</div>
								<div class="form-group" >
										<label>Thuộc menu</label><br>
										<select class="form-control" name="" id="">
											<option value="">1</option>
											<option value="">2</option>
										</select>
								</div>
    							<input class="form-control btn btn-primary" type="submit" name="submit" value="Thêm">
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
					                  <th>Tên menu</th>
					                  <th>Check Hiển thị</th>
					                  <th>Nổi bật</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		{{-- @foreach ($danhmuc as $dm) --}}
				              			<tr>
				              				<td>sdf</td>
											<td>sdf</td>
											<td>sdf</td>
											<td>
					                    		<a href="{{asset('admin/san-pham/menu-1/sua/')}}" class="btn btn-warning"><span class=""></span> Sửa</a>
					                    		<a href="{{asset('admin/san-pham/menu-1/xoa/')}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class=""></span> Xóa</a>
					                  		</td>
					                  	</tr>
				              		{{-- @endforeach --}}
				              	
			                  	
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