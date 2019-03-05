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
					<div class="panel-heading">Danh sách tin tức</div>
					@include('errors.note')
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{ asset('admin/tin-tuc/them') }}" class="btn btn-primary">Thêm tin tức</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Nội dung</th>
											<th>Nôi bật</th>
											<th>Mô tả</th>
											<th>Tiêu đề</th>
											<th width="20%">Ảnh</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($tintuc as $tt)
											<tr>
											<td>{{$tt->id}}</td>
											<td>{!!$tt->noidung!!}</td>
											<td>{{$tt->noibat}}</td>
											<td>{{$tt->mota}}</td>
											<td>{{$tt->tieude}}</td>
											<td>
												<img width="200px" src="upload/img/{{$tt->hinhanh}}" class="thumbnail">
											</td>
											<td>
												<a href="{{ asset('admin/tin-tuc/sua/'.$tt->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{ asset('admin/tin-tuc/xoa/'.$tt->id) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										@endforeach
										
										<div>{{$tintuc->links()}}</div>
										
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