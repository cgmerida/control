<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'primer_nombre', 'Primer Nombre') !!}

			{!! Form::myInput('text', 'segundo_nombre', 'Segundo Nombre') !!}

			{!! Form::myInput('text', 'primer_apellido', 'Primer Apellido') !!}

			{!! Form::myInput('text', 'segundo_apellido', 'Segundo Apellido') !!}

			{!! Form::myInput('number', 'integrantes', 'Integrantes de la casa') !!}
	
			{!! Form::mySelect('estado_civil', 'Estado Civil', ['Casado/a' => 'Casado/a', 'Divorciado/a' => 'Divorciado/a', 'Soltero/a' => 'Soltero/a', 'Separado/a' => 'Separado/a', 'Viudo/a' => 'Viudo/a']) !!}
	
			{!! Form::myInput('number', 'dpi', 'DPI') !!}

			{!! Form::myInput('number', 'zona', 'Zona') !!}

			{!! Form::myInput('text', 'colonia', 'Colonia') !!}
	
			{!! Form::myInput('text', 'direccion', 'Direcciòn') !!}

			{!! Form::myInput('number', 'telefono', 'Telefono') !!}

			{!! Form::myInput('string', 'contador_agua', 'No. Contador de Agua') !!}

			{!! Form::myInput('string', 'contador_luz', 'No. Contador de Luz') !!}

			{!! Form::myInput('hidden', 'lat') !!}

			{!! Form::myInput('hidden', 'lon') !!}

			<hr>

			<button class="btn btn-info mb-3" id="btn-map" onclick="buscarPosicion()" type="button">
				Guardar Ubicación Actual
			</button>
			
			<div id="map"></div>
			
		</div>  
	</div>
</div>