@extends('admin.master')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Slide</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách slide</div>
					@include('errors.note')
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{ asset('admin/slide/them') }}" class="btn btn-primary">Thêm slide</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Hình ảnh</th>
											<th>Tiêu đề</th>
											<th>Nội dung</th>
											<th>Mô tả</th>
											<th>Link</th>
											<th  width="20%">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($slide as $sl)
										<tr>
											<td>{{$sl->id}}</td>
											<td>
												<img width="200px" src="upload/img/{{$sl->hinhanh}}" class="thumbnail">
											</td>
											<td>{{$sl->tieude}}</td>
											<td>{{$sl->baiviet}}</td>
											<td>{{$sl->mota}}</td>
											<td>{{$sl->link}}</td>
											<td>
												<a href="{{ asset('admin/slide/sua/'.$sl->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{ asset('admin/slide/xoa/'.$sl->id) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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