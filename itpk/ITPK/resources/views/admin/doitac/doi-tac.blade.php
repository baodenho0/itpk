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
					<div class="panel-heading">Danh sách đối tác</div>
					@include('errors.note')
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{ asset('admin/doi-tac/them') }}" class="btn btn-primary">Thêm đối tác</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>

										<tr class="bg-primary">
											<th>ID</th>
											<th width="20%">Ảnh</th>
											<th >Seo</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($doitac as $dt)
											<tr>
											<td>{{$dt->id}}</td>
											
											<td>
												<img width="200px" src="upload/img/{{$dt->hinhanh}}" class="thumbnail">
											</td>
											<td>{{$dt->seo}}</td>
											<td>
												<a href="{{ asset('admin/doi-tac/sua/'.$dt->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{ asset('admin/doi-tac/xoa/'.$dt->id) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										@endforeach
										
										
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection