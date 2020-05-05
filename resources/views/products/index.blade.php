@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Productos
                	@can('products.create')
                		<a class="btn btn-primary pull-right btn-sm" href="{{ route('products.create') }}">
                			Crear
                		</a>
                	@endcan
                </div>

                <div class="panel-body">
                   <table class="table table-striped table-hover">
                   		<thead>
                   			<tr>
                   				<th class="w-10">ID</th>
                   				<th>Nombre</th>
                   				<th colspan="3">&nbsp;</th>
                   			</tr>
                   		</thead>  
                   		<tbody>
                   			@foreach($products as $ItemProducts)
                   				<tr>
                   					<td>{{ $ItemProducts->id  }}</td>
                   					<td>{{ $ItemProducts->name  }}</td>
                   					<td width="10px">
                   						@can('products.show')
                   							<a class="btn btn-sm btn-default" href="{{ route('products.show', $ItemProducts->id) }}">Ver</a>
                   						@endcan
                   					</td>
                   					<td width="10px">
                   						@can('products.edit')
                   							<a class="btn btn-sm btn-default" href="{{ route('products.edit', $ItemProducts->id) }}">Editar</a>
                   						@endcan
                   					</td>
                   					<td width="10px">
                   						@can('products.destroy')
                   							{!! Form::open(['route' => ['products.destroy', $ItemProducts->id],
                   							'method'=> 'DELETE']) !!}
                   							<button class="btn btn-sm btn-danger">Eliminar</button>
                   							{!! Form::close() !!}
                   						@endcan
                   					</td>
                   				</tr>
                   			@endforeach
                   		</tbody>                 	
                   </table>
                   {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
