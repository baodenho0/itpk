@extends('nguoidung.master')
@section('title','Tin tức')
@section('noidung')

<div class="main bg">
		<div class="noidung">
			<div class="tieude"><h1>TIN TỨC</h1></div>
			@if (count($tintuc))
				@foreach ($tintuc as $tt)
				<div class="noidung_1">
					<div class="tieude">{!!$tt->noidung!!}</div>
				</div>
			@endforeach
			@else
				<div>Không tìm thấy tin tức</div>
			@endif
			
			
		</div>		
				

				
</div>
			<!-- END MAIN -->
			
@endsection