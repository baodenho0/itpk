@extends('admin.master')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Liên hệ</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Cập nhật</div>
					@include('errors.note')
					<div class="panel-body">
						<form method="post" >
							@csrf()
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									
									<div class="form-group" >
										<label>Thông tin liên hệ</label>
										<textarea class="ckeditor" required name="lienhe">{{$lienhe->noidung}}</textarea>
									</div>

									<div class="form-group" >
										<label>Bản đồ</label>
										<input value="{{$lienhe->bando}}" required type="text" class="form-control" name="bando">
									</div>
									{!!$lienhe->bando!!}
									<br>
									<br>
									
									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									
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