@extends('layouts.app')
@section('content')

<div class="container">
	<h6>Exporta CheckLisT EXCEL</h6>
	<form action="{{ url('import') }}" method="POST" name="importform"
	  enctype="multipart/form-data">
		@csrf

		<div class="form-group">
			<a class="btn btn-info" href="{{ url('export') }}">Exportar Arquivo</a>
		</div>
	</form>
</div>
<br>





@endsection
