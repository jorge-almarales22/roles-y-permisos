@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Roles
                	@can('roles.create')
                		<a class="btn btn-primary pull-right btn-sm" href="{{ route('roles.create') }}">
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
                   			@foreach($roles as $ItemRole)
                   				<tr>
                   					<td>{{ $ItemRole->id  }}</td>
                   					<td>{{ $ItemRole->name  }}</td>
                   					<td width="10px">
                   						@can('roles.show')
                   							<a class="btn btn-sm btn-default" href="{{ route('roles.show', $ItemRole->id) }}">Ver</a>
                   						@endcan
                   					</td>
                   					<td width="10px">
                   						@can('roles.edit')
                   							<a class="btn btn-sm btn-default" href="{{ route('roles.edit', $ItemRole->id) }}">Editar</a>
                   						@endcan
                   					</td>
                   					<td width="10px">
                   						@can('roles.destroy')
                   							{!! Form::open(['route' => ['roles.destroy', $ItemRole->id],
                   							'method'=> 'DELETE']) !!}
                   							<button class="btn btn-sm btn-danger">Eliminar</button>
                   							{!! Form::close() !!}
                   						@endcan
                   					</td>
                   				</tr>
                   			@endforeach
                   		</tbody>                 	
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
