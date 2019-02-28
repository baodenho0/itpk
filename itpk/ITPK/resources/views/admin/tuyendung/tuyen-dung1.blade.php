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
					<div class="panel-heading">Danh sách tuyển dụng</div>
					@include('errors.note')
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{ asset('admin/tuyen-dung/them') }}" class="btn btn-primary">Thêm tuyển dụng</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Nội dung</th>
											<th>Nổi bật </th>
											<th>Mô tả</th>
											<th>Tiêu đề</th>
											<th width="20%">Hình ảnh</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($tuyendung as $td)
											<tr>
											<td>{{$td->id}}</td>
											<td>{!!$td->noidung!!}</td>
											<td>{{$td->noibat}}</td>
											<td>{{$td->mota}}</td>
											<td>{{$td->tieude}}</td>
											<td>
												<img width="200px" src="upload/img/{{$td->hinhanh}}" class="thumbnail">
											</td>
											
											<td>
												<a href="{{ asset('admin/tuyen-dung/sua/'.$td->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{ asset('admin/tuyen-dung/xoa/'.$td->id) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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