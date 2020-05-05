@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios
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
                   			@foreach($users as $user)
                   				<tr>
                   					<td>{{ $user->id  }}</td>
                   					<td>{{ $user->name  }}</td>
                   					<td width="10px">
                   						@can('users.show')
                   							<a class="btn btn-sm btn-default" href="{{ route('users.show', $user->id) }}">Ver</a>
                   						@endcan
                   					</td>
                   					<td width="10px">
                   						@can('users.edit')
                   							<a class="btn btn-sm btn-default" href="{{ route('users.edit', $user->id) }}">Editar</a>
                   						@endcan
                   					</td>
                   					<td width="10px">
                   						@can('users.destroy')
                   							{!! Form::open(['route' => ['users.destroy', $user->id],
                   							'method'=> 'DELETE']) !!}
                   							<button class="btn btn-sm btn-danger">Eliminar</button>
                   							{!! Form::close() !!}
                   						@endcan
                   					</td>
                   				</tr>
                   			@endforeach
                   		</tbody>                 	
                   </table>
                   {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
