@extends('layouts.app')
@section('htmlheader_title')
	Home
@endsection


@section('main-content')

<h1>Ficha de Recopilacion de Datos para Información del Inventario de Recursos Turísticos</h1>
<section class="content">
	<div class="row">
			<div class="col-md-12">
			<div class="box box-primary">
            <div class="box-header with-border">
			<div class="box-body">  
			
      {!! Form::model($atractive, ['route' => ['atractive.update', $atractive],'method'=>'PUT'])!!}      
			
			@include('capturista.form')              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" name="limpiar" class="btn btn-danger">Cancelar</button>  
              </div>

              </div>
		</div>
    {!! Form::close() !!}  
	</div>
	</div>
	</div>
		</div>
	</div>
	</div>
	</section>
@endsection