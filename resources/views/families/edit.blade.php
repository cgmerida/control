@extends('admin.master')

@section('css')
    @include('families.partials.maps-style')
@endsection

@section('page-header')
	Familia <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($family, [
			'route' => ['families.update', $family],
			'method' => 'put',
		])
	!!}

		@include('families.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop


@section('js')
	@include('families.partials.maps')
@endsection