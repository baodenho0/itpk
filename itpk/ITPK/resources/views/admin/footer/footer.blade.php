@extends('admin.master')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Footer</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Cập nhật</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Về chúng tôi</label>
										<input required type="text" name="bannerdautrang" class="form-control">
									</div>
									<div class="form-group" >
										<label>Hotline</label>
										<input required type="text" name="logo" class="form-control">
									</div>
									<div class="form-group" >
										<label>Email</label>
										<input required type="text" name="hotline" class="form-control">
									</div>
									<div class="form-group" >
										<label>MXH</label>
										<input required type="text" name="diachi" class="form-control">
									</div>
									<div class="form-group" >
										<label>Hỗ trợ trực tuyến</label>
										<input required type="text" name="logo" class="form-control">
									</div>
									<div class="form-group" >
										<label>Thông tin công ty</label>
										<input required type="text" name="hotline" class="form-control">
									</div>
									<div class="form-group" >
										<label>Chính sách</label>
										<textarea required name="description"></textarea>
									</div>
									<div class="form-group" >
										<label>Fanpage</label>
										<input required type="text" name="logo" class="form-control">
									</div>
									
									
									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection