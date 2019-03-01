@extends('admin.master')
@section('noidung')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục Menu cấp 1</h1>
				@include('errors.note')
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm menu
							
						</div>
						
						<div class="panel-body">
							<div class="form-group">
								<label>Tên menu:</label>
								<form  method="post" enctype="multipart/form-data">
								@csrf()
    							<input value="{{$menu->tendanhmuc}}" required="" type="text" name="tendanhmuc" class="form-control" placeholder="Tên menu...">
    							<br>
    							<div class="form-group" >
										<label>Check hiển thị</label><br>
										Có: <input type="radio" 
										@php
    										if($menu->checkhienthi == 1){
												echo "checked"; 
    										}
    									@endphp
										name="checkhienthi" value="1">
										Không: <input type="radio" 
										@php
    										if($menu->checkhienthi == 0){
												echo "checked"; 
    										}
    									@endphp
										name="checkhienthi" value="0">
								</div>
								<div class="form-group" >
										<label>Nổi bật</label><br>
										Có: <input type="radio"
										@php
    										if($menu->noibat == 1){
												echo "checked"; 
    										}
    									@endphp
										name="noibat" value="1">
										Không: <input type="radio" 
										@php
    										if($menu->noibat == 0){
												echo "checked"; 
    										}
    									@endphp
										 name="noibat" value="0">
								</div>
    							<div class="form-group" >
										<label>Ảnh </label>
										<input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="upload/img/{{$menu->hinhanh}}">
									</div>
    							<input class="form-control btn btn-primary" type="submit" name="submit" value="Cập nhật">
    							<br>
    							<br>
    							<a class="form-control btn btn-danger" href="{{ asset('admin/san-pham') }}">Hủy bỏ</a>
    							</form>
							</div>
						</div>
					</div>
			</div>
			
@stop