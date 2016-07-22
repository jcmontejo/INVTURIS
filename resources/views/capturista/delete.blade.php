{!! Form::open(['route' => ['atractive.destroy' , $atractive->id],'method' => 'DELETE']) !!}
		{!! Form::submit('Eliminar',['class' => 'btn btn-danger'])!!}

{!! Form::close()!!}