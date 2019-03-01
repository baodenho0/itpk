@extends('admin.master')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dự án nổi bật</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách dự án nổi bật</div>
					@include('errors.note')
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{ asset('admin/du-an-noi-bat/them') }}" class="btn btn-primary">Thêm dự án nổi bật</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th >Nội dung</th>
											<th>Nổi bật</th>
											<th width="30%">Hinh ảnh</th>
											<th>Tiêu đề</th>
											<th>Mô tả</th>
											<th  width="20%">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($duannoibat as $sl)
										<tr>
											<td>{{$sl->id}}</td>
											<td>{!!$sl->noidung!!}</td>
											<td>{{$sl->noibat}}</td>
											<td>
												<img width="200px" src="upload/img/{{$sl->hinhanh}}" class="thumbnail">
											</td>
											<td>{{$sl->tieude}}</td>
											<td>{{$sl->mota}}</td>
											<td>
												<a href="{{ asset('admin/du-an-noi-bat/sua/'.$sl->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{ asset('admin/du-an-noi-bat/xoa/'.$sl->id) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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