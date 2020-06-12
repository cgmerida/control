@extends('admin.master')

@section('css')
@include('admin.partials.datatables')
@endsection

@section('page-header')
Busqueda de Familias <small>{{ trans("app.manage") }}</small>
@endsection

@section('content')

<div class="bgc-white bd bdrs-3 p-20 mB-20">
    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DPI</th>
                <th>Recibio Despensa</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DPI</th>
                <th>Recibio Despensa</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
</div>

@endsection

@section('js')
<script>
    $('#dataTable').DataTable({
            ajax: '/api/families',
            columns: [
                {data: 'primer_nombre'},
                {data: 'primer_apellido'},
                {data: 'dpi'},
                {data: 'despensa'},
                {data: 'actions'}
            ]
        });
</script>
@endsection