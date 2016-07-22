@extends('layouts.app')

@section('main-content')
<div class="container">
	
	<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><strong>Historial de Carta de Inserciones</strong></h3>
				<div class="box-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								  <th>Nombre</th>
						          <th>Región</th>
						          <th>Provincia</th>
						          <th>Distrito</th>	
						          <th>Categoria</th>			                	
						          <th>Tipo</th>
						          <th>Subtipo</th>
						          <th>Descripción</th>
						          <th>Particularidades</th>
						          <th>Estado Actual</th>
						          <th>Observaciones</th>
						          <th>Tipo de Visitante</th>
						          <th>Acceso Terrestre</th>
						          <th>Acceso Aereo</th>
						          <th>Acceso Maritimo</th>
						          <th>Acceso Fluvial</th>
						          <th>Acción</th>
								  							
							</tr>
						</thead>
						<tbody>
						@foreach($atractive as $atractive)
							@can('owner', $atractive)
								<tr>
									<td>{{ $atractive->name }}</td>
						            <td>{{ $atractive->region }}</td>
						            <td>{{ $atractive->province}}</td>
						            <td>{{ $atractive->district}}</td>
						            <td>{{ $atractive->category}}</td>
						            <td>{{ $atractive->type}}</td>
						            <td>{{ $atractive->sub_type}}</td>
						            <td>{{ $atractive->description}}</td>
						            <td>{{ $atractive->particularities}}</td>
						            <td>{{ $atractive->actual_state}}</td>
						            <td>{{ $atractive->observations}}</td>
						            <td>{{ $atractive->type_visit}}</td>	
						            <td>{{ $atractive->land}}</td>
						            <td>{{ $atractive->aereal}}</td>
						            <td>{{ $atractive->maritime}}</td>	 
						            <td>{{ $atractive->river}}</td>         
						            <td>
						            <div class="btn-group-vertical">
						            	{{ link_to_route('atractive.edit', $title ='Editar',$parameter=$atractive, $attributes= ['class'=> 'btn btn-primary'])}}<br>
						            @include('capturista.delete')
						            
									
						            </div>
						            </td>
									
								</tr>
							@endcan
						@endforeach
						</tbody>
				</table>
				</div>
			</div>
		</div>		
		
				
	</div>
			
</div>

@endsection