@extends('nguoidung.master')
@section('noidung')

<div class="main bg">
		<div class="noidung">
			<div class="tieude"><h1>TIN TỨC</h1></div>
			@foreach ($tintuc as $tt)
				<div class="noidung_1">
				<div class="tieude">{!!$tt->noidung!!}</div>
			</div>
			@endforeach
			<div class="phantrang text-center">{!!$tintuc->links()!!}</div>
			
		</div>		
				

				
</div>
			<!-- END MAIN -->
			
@endsection