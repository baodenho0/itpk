@extends('nguoidung.master')
@section('noidung')

<div class="main bg">

		<div class="noidung">
			<div class="tieude"><h1>TUYỂN DỤNG</h1></div>
			
			@foreach ($tuyendung as $td)
			<div><strong>{{$td->tieude}}</strong></div>
			<div class="noidung_1">{!!$td->noidung!!}</div>
			@endforeach
			<br>
		</div>		
				

				
</div>
			<!-- END MAIN -->
			
@endsection