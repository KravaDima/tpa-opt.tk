@extends('app')

@section('content')
	<div class="col-xs-10 col-sm-8 col-md-6 col-lg-6 col-xs-offset-1 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
		<h1>Create</h1>
		{!! Form::open(['route' => 'leed.store']) !!}
		@include('leed._form')
		{{ csrf_field() }}
	</div>
@endsection