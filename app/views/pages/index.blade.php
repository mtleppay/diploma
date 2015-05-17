@extends('layouts.main')
@section('content')





    @if(Auth::user() != null && Auth::user()->role != 0 )

	<div class = "container">
		<div class="row">
			<a href = "/students" type="button" class="btn btn-info">Список студентов</a>
		</div>
	</div>

    @endif


@stop