@extends('admin.master')

@section('css')
    @include('families.partials.maps-style')
@endsection

@section('page-header')
	Familia <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => 'families.store'
		])
	!!}

		@include('families.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop


@section('js')
	@include('families.partials.maps')
@endsection