@extends('admin.master')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Form liên hệ</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách liên hệ</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
							
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Họ tên</th>
											<th>Địa chỉ </th>
											<th>SĐT</th>
											<th>Email</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>iPhone 7 Plus 32GB quốc tế Mate Black</td>
											<td>21.990.000 VND</td>
											<td>iPhone</td>
											<td>iPhone</td>
										</tr>

										<tr>
											<td>1</td>
											<td>iPhone 7 Plus 32GB quốc tế Mate Black</td>
											<td>21.990.000 VND</td>
											<td>iPhone</td>
											<td>iPhone</td>
											
										</tr>
										
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