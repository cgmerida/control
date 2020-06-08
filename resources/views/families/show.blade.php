@extends('admin.master')

@section('css')
    @include('families.partials.maps-style')
@endsection

@section('page-header')
	Familia <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($family, [
            'id' => 'main-form'
		])
	!!}

		@include('families.partials.form')
        
	{!! Form::close() !!}

		
	@include('admin.partials.back')

    @can('families.edit')
    <li class="list-inline-item">
        <a href="{{ route('families.edit', $family->id) }}" 
        class="btn btn-secondary">
            <span class="ti-pencil"></span> Editar
        </a>
    </li>
    @endcan
	
@stop

@section('js')
	@include('admin.partials.disable')
	@include('families.partials.maps')
@endsection