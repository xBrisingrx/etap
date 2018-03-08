<section class="container g-py-10">
	<h1> Alta de vehiculo </h1>

	<!-- Form alta de vehiculo -->
	<form id="form_alta_vehiculo" class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="POST" action="<?php echo base_url('Vehiculos/create');?>">
	  <!-- Input numero interno -->
	  <div class="form-group row g-mb-10">
	    <label class="col-sm-2 col-form-label g-mb-10" for="interno">Interno(*)</label>

	    <div class="col-sm-9">
	      <input id="interno" class="form-control u-form-control rounded-0" placeholder="Ingrese número de interno" type="text">
	    </div>
	  </div>
	  <!-- End Input numero interno -->

	  <!-- Input numero dominio -->
	  <div class="form-group row g-mb-10">
	    <label class="col-sm-2 col-form-label g-mb-10" for="dominio">Dominio(*)</label>

	    <div class="col-sm-9">
	      <input id="dominio" class="form-control u-form-control rounded-0" placeholder="Ingrese dominio" type="text">
	    </div>
	  </div>
	  <!-- End Input numero dominio -->

	  <!-- Input numero año -->
	  <div class="form-group row g-mb-10">
	    <label class="col-sm-2 col-form-label g-mb-10" for="anio">Año(*)</label>

	    <div class="col-sm-9">
	      <input id="anio" class="form-control u-form-control rounded-0" placeholder="Ingrese año" type="text">
	    </div>
	  </div>
	  <!-- End Input numero año -->

	  <!-- Select marca vehiculo -->
	  <div class="form-group row g-mb-10">
		  <label class="col-sm-2 col-form-label g-mb-10" for="marca">Marca(*)</label>
		  <select class="custom-select sm-9" id="marca">
		  	<option value="" disabled selected >Seleccione marca</option>
		  	<!-- populate with ajax -->
		  </select>
		  <a href="javascript:void(0)" class="btn btn-md u-btn-darkgray g-mr-10" onclick="modal_crud_attr('marca')"> Editar marcas </a>
	  </div>
	  <!-- End Select marca vehiculo -->

	  <!-- Select modelo vehiculo -->
	  <div class="form-group row g-mb-10">
		  <label class="col-sm-2 col-form-label g-mb-10" for="modelo">Modelo(*)</label>
		  <select class="custom-select sm-9" id="modelo">
		  	<option value="" disabled selected >Seleccione modelo</option>
		   <!-- populate with ajax -->
		  </select>
		  <a href="javascript:void(0)" class="btn btn-md u-btn-darkgray g-mr-10" onclick="modal_crud_attr('modelo')"> Editar modelos </a>
	  </div>
	  <!-- End Select modelo vehiculo -->

	  <!-- Select tipo vehiculo -->
	  <div class="form-group row g-mb-10">
		  <label class="col-sm-2 col-form-label g-mb-10" for="tipo">Tipo(*)</label>
		  <select class="custom-select sm-9" id="tipo">
		  	<option value="" disabled selected >Seleccione tipo</option>
		    <!-- populate with ajax -->
		  </select>
		  <a href="javascript:void(0)" class="btn btn-md u-btn-darkgray g-mr-10" onclick="modal_crud_attr('tipo')"> Editar tipos </a>
	  </div>
	  <!-- End Select tipo vehiculo -->

	  <!-- Input numero chasis -->
	  <div class="form-group row g-mb-10">
	    <label class="col-sm-2 col-form-label g-mb-10" for="chasis">Nro. chasis(*)</label>

	    <div class="col-sm-9">
	      <input id="chasis" class="form-control u-form-control rounded-0" placeholder="Ingrese número de chasis" type="text">
	    </div>
	  </div>
	  <!-- End Input numero chasis -->

	  <!-- Input numero motor -->
	  <div class="form-group row g-mb-10">
	    <label class="col-sm-2 col-form-label g-mb-10" for="motor">Nro. motor(*)</label>

	    <div class="col-sm-9">
	      <input id="motor" class="form-control u-form-control rounded-0" placeholder="Ingrese número de motor" type="text">
	    </div>
	  </div>
	  <!-- End Input numero motor -->

	  <!-- Input numero asientos -->
	  <div class="form-group row g-mb-10">
	    <label class="col-sm-2 col-form-label g-mb-10" for="asientos">Cant chasis(*)</label>

	    <div class="col-sm-9">
	      <input id="asientos" class="form-control u-form-control rounded-0" placeholder="Ingrese cantidad de asientos" type="text">
	    </div>
	  </div>
	  <!-- End Input numero asientos -->

	  <!-- Select empresa -->
	  <div class="form-group row g-mb-10">
		  <label class="col-sm-2 col-form-label g-mb-10" for="empresa">Pertenece a empresa(*)</label>
		  <select class="custom-select sm-9" id="empresa">
		    <option selected=""> Seleccione empresa </option>
		    <option value="1">One</option>
		    <option value="2">Two</option>
		    <option value="3">Three</option>
		  </select>
	  </div>
	  <!-- End Select empresa -->

	  <!-- Textarea observaciones -->
	  <div class="form-group row g-mb-10">
	    <label class="col-sm-2 col-form-label g-mb-10" for="observaciones">Observaciones</label>
	    <div class="col-sm-9">
	    	<textarea id="observaciones" class="form-control form-control-md u-textarea-expandable rounded-0" rows="3" placeholder="Observaciones"></textarea>
	    </div>
	  </div>
  <!-- End Textarea observaciones -->
  	
  	<div class="row g-mb-10">
  		<button type="submit" class="btn btn-md u-btn-primary g-mr-10"> Grabar vehiculo </button>
  		<button type="submit" class="btn btn-md u-btn-indigo g-mr-10"> Grabar y cargar otro </button>
  		<button type="submit" class="btn btn-md u-btn-red g-mr-10"> Cancelar </button>
  	</div>
	</form>
	<!-- End form alta vehiculo -->
</section>


<div class="modal fade" id="modal_crud_attr_vehiculos" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form>
      		<!-- Tipo de attr para discriminar entre marca/modelo/tip -->
      		<input type="hidden" id="tipo_attr" name="tipo_attr" value="">

      		<label id="label_name_attr"></label>
      		<input type="text" id="name_attr" name="name_attr">
      		<a href="javascript:void(0)" id="btn_save_name_attr" href="" class=" btn u-btn-primary" onclick="add_attr_vehiculo()"> </a>
      	</form>
      	<br>
      	<div class="table-responsive">
      		<table id="tabla_attr_vehiculos">
      			<thead>
      				<tr>
      					<th>Nombre</th>
      					<th>acciones</th>
      				</tr>
      			</thead>
      			<tbody>
      				<!-- populate with ajax -->
      			</tbody>
      		</table>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn u-btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal CRUD Modelos vehiculos -->
<div class="modal fade" id="modal_crud_attr_modelos_vehiculos" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form>
      		<!-- Tipo de attr para discriminar entre marca/modelo/tip -->
      		<input type="hidden" id="tipo_attr" name="tipo_attr" value="">

      		<!-- ID marca para cuando creamos/editamos un modelo --> 
      		<!-- Select marca -->
				  <div class="form-group row g-mb-10">
					  <label class="col-sm-2 col-form-label g-mb-10" for="marca_attr_id">Marca (*)</label>
					  <select class="custom-select sm-9" id="marca_attr_id">
					    <option selected=""> Seleccione marca </option>
					    <!-- ajax -->
					  </select>
				  </div>
	 				 <!-- End Select marca -->

      		<label id="label_name_attr">Nombre modelo: </label>
      		<input type="text" id="name_attr_modelo" name="name_attr_modelo">
      		<a href="javascript:void(0)" id="btn_save_modelo" href="" class=" btn u-btn-primary" onclick="add_attr_vehiculo()"></a>
      	</form>
      	<br>
      		<table id="tabla_attr_modelo_vehiculos">
      			<thead>
      				<tr>
      					<th>Marca</th>
      					<th>Nombre</th>
      					<th>acciones</th>
      				</tr>
      			</thead>
      			<tbody>
      				<!-- populate with ajax -->
      			</tbody>
      		</table>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn u-btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<script>
	var tabla_attr_vehiculos
	var tabla_modelos_vehiculos
	var url
	var save_method

	// Genero el option select , el type es el atributo que vamos a elegir, el cual puede ser marca, modelo o tipo vehiculo
	// attr es attribute de la tabla 
	function print_attributes(select_id, type, attr = null, id = null)
	{
		if (id !== null) {
			url = "<?php echo base_url('Vehiculos/get_attr/');?>"+type+"/"+attr+"/"+id
		} else {
			url = "<?php echo base_url('Vehiculos/get_attr/');?>"+type
		}

		$.ajax({
			url: url,
			type: 'GET',
			success: function(resp){
				var attr_vehiculo = $.parseJSON(resp)
					$('#'+select_id+'').find('option').remove().end().append('<option value="" disabled selected >Seleccione '+type+'</option>')
					$(attr_vehiculo).each(function(i, element){
						$('#'+select_id+'').append("<option value="+element.id+">"+element.nombre+"</option>");
					});
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('#'+select_id+'').find('option').remove().end().append('<option value="" disabled selected >Seleccione '+type+'</option>');
				$('#'+select_id+'').append("<option>No se pudieron obtener los "+type+"</option>");
			}
		});
	}

	function add_attr_vehiculo()
	{
		save_method = 'create_attr_vehiculo'
		var type = $('#tipo_attr').val()
		var name_attr
		var marca_id
		if (type != 'modelo') {
			name_attr = $('#name_attr').val()
			$('#btn_save_name_attr').prop( "disabled", true )
			$('#btn_save_name_attr').text('Grabando...')
		} else {
			name_attr = $('#name_attr_modelo').val()
			marca_id = $('#marca_attr_id option:selected').val()
			$('#btn_save_modelo').prop( "disabled", true )
			$('#btn_save_modelo').text('Grabando...')
		}

		alert('name: '+name_attr+' tipo: '+type+' marca: '+marca_id)
		
		save_attr_vehiculo(type, name_attr, marca_id)
	}

	function edit_attr_vehiculo(name)
	{

	}

	function save_attr_vehiculo(table, name_attr, marca_id)
	{
		if (table != 'modelo') {
			marca_id = 'a'
		}

		$.ajax({
			url: "<?php echo base_url('Vehiculos/');?>"+save_method+'/'+table,
			type: 'POST',
			cache: false,
			data: { 
				nombre: name_attr, 
				marca_id: marca_id 
			},
			success: function(resp){
				if (resp === 'ok') {
					if (table != 'modelo') {
						$('#btn_save_name_attr').text('Grabar '+table)
						tabla_attr_vehiculos.ajax.reload(null,false)
					} else {
						$('#btn_save_modelo').text('Grabar modelo')
						tabla_modelos_vehiculos.ajax.reload(null,false)
					}
				} else {
					alert('error')
				}
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert('jqXHR: '+ jqXHR + '  textStatus: '+ textStatus + '  errorThrown: '+errorThrown)
			}
		})
	}

	function delete_attr_vehiculo(id)
	{

	}

	$('#marca').on('change', function(){
		var marca_id = $('#marca').val()
		print_attributes('modelo','modelo', 'marca_vehiculo_id',marca_id)
	})

	print_attributes('marca','marca')
	print_attributes('tipo','tipo')


	function modal_crud_attr(nombre_attr){
		url = "<?php echo base_url('Vehiculos/list_attr/');?>"+nombre_attr

		if (nombre_attr == 'modelo') {
			tabla_modelos_vehiculos.ajax.url(url).load()
			print_attributes('marca_attr_id','marca')
			$('#tipo_attr').val(nombre_attr)
			$('#btn_save_modelo').text('Grabar '+nombre_attr)
			$('#modal_crud_attr_modelos_vehiculos').modal('show')
		} else {
			tabla_attr_vehiculos.ajax.url(url).load()
			$('#tipo_attr').val(nombre_attr)
			$('#label_name_attr').text('Nombre '+nombre_attr)
			$('#btn_save_name_attr').text('Grabar '+nombre_attr)
			$('#modal_crud_attr_vehiculos').modal('show')
		}
	}



	$(document).ready(function(){
		tabla_attr_vehiculos = $('#tabla_attr_vehiculos').DataTable( {
																lengthChange: false,
																ajax : "<?php echo base_url('Vehiculos/list_attr/marca');?>",
															});

		tabla_modelos_vehiculos = $('#tabla_attr_modelo_vehiculos').DataTable( {
																lengthChange: false,
																ajax : "<?php echo base_url('Vehiculos/list_attr/modelo');?>"
															});
	})
</script>