@extends('admin.master')
@section('noidung')
		
	

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục Menu cấp 2</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm menu
							
						</div>
						@include('errors.note')
						
						<div class="panel-body">
							<div class="form-group">
								<label>Tên menu:</label>
								<form  method="post">
								@csrf()
    							<input required="" value="{{$menu->tendanhmuc}}" type="text" name="tendanhmuc" class="form-control" placeholder="Tên menu...">
    							<br>
    							<select class="form-control" name="id_danhmuc2" id="">
    								@foreach ($danhmuc as $dm)
    									<option 
    									@php
    										if($dm->id == $menu->id_danhmuc2){
												echo "selected"; 
    										}
    									@endphp
											
    									 value="{{$dm->id}}">{{$dm->tendanhmuc}}</option>
    								@endforeach
    								
    							</select>
    							<br>
    							<input class="form-control btn btn-primary" type="submit" name="submit" value="Cập nhật">
    							<br>
    							<br>
    							<a class="form-control btn btn-danger" href="{{ asset('admin/san-pham') }}">Hủy bỏ</a>
    							</form>
							</div>
						</div>
					</div>
			</div>
			
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop