<section class="container g-py-10">
	<h1> Alta de vehiculo </h1>

	<!-- Form alta de vehiculo -->
	<form id="form_alta_vehiculo" class="form_new_vehiculo g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="POST" action="#">
	  <!-- Input numero interno -->
	  <div class="form-group row g-mb-10">
	    <label class="col-sm-2 col-form-label g-mb-10" for="interno">Interno(*)</label>

	    <div class="col-sm-9">
	      <input id="interno" class="form-control u-form-control rounded-0" placeholder="Ingrese número de interno" type="text" required>
	    </div>
	  </div>
	  <!-- End Input numero interno -->

	  <!-- Input numero dominio -->
	  <div class="form-group row g-mb-10">
	    <label class="col-sm-2 col-form-label g-mb-10" for="dominio">Dominio(*)</label>

	    <div class="col-sm-9">
	      <input id="dominio" class="form-control u-form-control rounded-0" placeholder="Ingrese dominio" type="text" required>
	    </div>
	  </div>
	  <!-- End Input numero dominio -->

	  <!-- Input numero año -->
	  <div class="form-group row g-mb-10">
	    <label class="col-sm-2 col-form-label g-mb-10" for="anio">Año(*)</label>

	    <div class="col-sm-9">
	      <input id="anio" class="form-control u-form-control rounded-0" placeholder="Ingrese año" type="text" required>
	    </div>
	  </div>
	  <!-- End Input numero año -->

	  <!-- Select marca vehiculo -->
	  <div class="form-group row g-mb-10">
		  <label class="col-sm-2 col-form-label g-mb-10" for="marca">Marca(*)</label>
		  <select class="custom-select sm-9" id="marca" required>
		  	<option value="" disabled selected >Seleccione marca</option>
		  	<!-- populate with ajax -->
		  </select>
		  <a href="javascript:void(0)" class="btn btn-md u-btn-darkgray g-mr-10" onclick="modal_crud_attr('marca')"> Editar marcas </a>
	  </div>
	  <!-- End Select marca vehiculo -->

	  <!-- Select modelo vehiculo -->
	  <div class="form-group row g-mb-10">
		  <label class="col-sm-2 col-form-label g-mb-10" for="modelo">Modelo(*)</label>
		  <select class="custom-select sm-9" id="modelo" required>
		  	<option value="" disabled selected >Seleccione modelo</option>
		   <!-- populate with ajax -->
		  </select>
		  <a href="javascript:void(0)" class="btn btn-md u-btn-darkgray g-mr-10" onclick="modal_crud_attr('modelo')"> Editar modelos </a>
	  </div>
	  <!-- End Select modelo vehiculo -->

	  <!-- Select tipo vehiculo -->
	  <div class="form-group row g-mb-10">
		  <label class="col-sm-2 col-form-label g-mb-10" for="tipo">Tipo(*)</label>
		  <select class="custom-select sm-9" id="tipo" required>
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
	      <input id="chasis" class="form-control u-form-control rounded-0" placeholder="Ingrese número de chasis" type="text" required>
	    </div>
	  </div>
	  <!-- End Input numero chasis -->

	  <!-- Input numero motor -->
	  <div class="form-group row g-mb-10">
	    <label class="col-sm-2 col-form-label g-mb-10" for="motor">Nro. motor(*)</label>

	    <div class="col-sm-9">
	      <input id="motor" class="form-control u-form-control rounded-0" placeholder="Ingrese número de motor" type="text" required>
	    </div>
	  </div>
	  <!-- End Input numero motor -->

	  <!-- Input numero asientos -->
	  <div class="form-group row g-mb-10">
	    <label class="col-sm-2 col-form-label g-mb-10" for="asientos">Cant asientos(*)</label>

	    <div class="col-sm-9">
	      <input id="asientos" class="form-control u-form-control rounded-0" placeholder="Ingrese cantidad de asientos" type="text" required>
	    </div>
	  </div>
	  <!-- End Input numero asientos -->

	  <!-- Select empresa -->
	  <div class="form-group row g-mb-10">
		  <label class="col-sm-2 col-form-label g-mb-10" for="empresa">Pertenece a empresa(*)</label>
		  <select class="custom-select sm-9" id="empresa" required>
		    <option selected=""> Seleccione empresa </option>
		    <?php foreach ($empresas as $e): ?>
		    	<option value="<?php echo $e->id;?>"><?php echo $e->nombre;?></option>
		    <?php endforeach ?>
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
  		<button type="submit" id="btn_save_vehiculo" class="btn btn-md u-btn-primary g-mr-10"> Grabar vehiculo </button>
  		<button class="btn btn-md u-btn-indigo g-mr-10"> Grabar y cargar otro </button>
  		<a href="<?php echo base_url('Vehiculos');?>" class="btn btn-md u-btn-red g-mr-10"> Cancelar </a>
  	</div>
	</form>
	<!-- End form alta vehiculo -->
</section>



<!-- Modales -->
<!--  -->
<!--  -->
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
      	<form id="form_attr_vehiculo" class="form_attr_vehiculo">
      		<!-- Tipo de attr para discriminar entre marca/modelo/tip -->
      		<input type="hidden" id="tipo_attr" name="tipo_attr" value="">

      		<label id="label_name_attr"></label>
      		<input type="text" id="name_attr" name="name_attr" required>
      		<button type="submit" id="btn_save_name_attr" href="" class="btnSave btn u-btn-primary""> </button>
      		<br>
      		<div id="alert-msg-pers" class="alert-msg-vehiculos"></div>
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
      	<form id="form_modelo_vehiculo" class="form_attr_vehiculo">
      		<!-- Tipo de attr para discriminar entre marca/modelo/tip -->
      		<input type="hidden" id="tipo_attr" name="tipo_attr" value="">

      		<!-- ID marca para cuando creamos/editamos un modelo --> 
      		<!-- Select marca -->
				  <div class="form-group row g-mb-10">
					  <label class="col-sm-2 col-form-label g-mb-10" for="marca_attr_id">Marca (*)</label>
					  <select class="custom-select sm-9" id="marca_attr_id" required>
					    <option selected=""> Seleccione marca </option>
					    <!-- ajax -->
					  </select>
				  </div>
	 				 <!-- End Select marca -->

      		<label id="label_name_attr">Nombre modelo: </label>
      		<input type="text" id="name_attr_modelo" name="name_attr_modelo" required>
      		<a href="javascript:void(0)" id="btn_save_modelo" href="" class="btnSave btn u-btn-primary" onclick="add_attr_vehiculo()"></a>
      		<br>
      		<div id="alert-msg-pers" class="alert-msg-vehiculos"></div>
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


<!-- Modal baja de atributo del vehiculo -->
<div class="modal fade" id="modal_delete_attr_vehiculo" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<input type="hidden" id="id_attr_vehiculo" name="id_attr_vehiculo" value="">
      	<input type="hidden" id="tipo_attr_vehiculo" name="tipo_attr_vehiculo" value="">
       	<p id="name_attr"><strong>Nombre: </strong> </p>
       	<br>
       	<div id="text-caution-delete-marca" class=""><small class="text-danger">¡ATENCION! Al eliminar la marca todos los modelos de esta marca igual seran eliminados.</small></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn u-btn-red" onclick="destroy_attr_vehiculo()">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin modal baja de atributo del vehiculo -->


<script>
	var tabla_attr_vehiculos
	var tabla_modelos_vehiculos
	var url
	var save_method

	$.validator.addMethod("alfanumOespacio", function(value, element) {
	        return /^[ a-záéíóúüñ]*$/i.test(value);
	    }, "Ingrese sólo letras.");

	var form_attr_vehiculo = $('.form_attr_vehiculo').validate({
															rules: {
																'nombre_attr': { required: true	}
															}
														});
	var form_vehiculo = $('#form_alta_vehiculo').validate({
												rules: {
													'interno': {number: true}
												}
	})


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
				console.log(attr_vehiculo)

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

	$('.form_new_vehiculo').submit(function(e){
		e.preventDefault()
		console.log('submit')
		if (form_vehiculo.valid()) {
			console.log('save')
			save()
		}
	})



	$('#form_attr_vehiculo').submit(function(e){
		e.preventDefault();	
		if (form_attr_vehiculo.valid()) { 
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
			save_attr_vehiculo(type, name_attr, marca_id)
		}
	});

	function add_attr_vehiculo()
	{
		if (form_attr_vehiculo.valid()) { 
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
			save_attr_vehiculo(type, name_attr, marca_id)
		}
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
						$('.btnSave').prop( "disabled", false )
						$('.btnSave').text( 'Grabar '+table )
						$('#form_attr_vehiculo')[0].reset()
						$('.alert-msg-vehiculos').html('')
						print_attributes(table, table)
						tabla_attr_vehiculos.ajax.reload(null,false)
					} else {
						$('#btn_save_modelo').text('Grabar modelo')
						$('#btn_save_modelo').prop( "disabled", false )
						$('#form_modelo_vehiculo')[0].reset()
						$('.alert-msg-vehiculos').html('')
						print_attributes(table, table)
						tabla_modelos_vehiculos.ajax.reload(null,false)
					}
				} else {
					$('.btnSave').prop( "disabled", false )
					$('.btnSave').text( 'Grabar '+table )
					$('.alert-msg-vehiculos').html('<div class="alert alert-danger">' + resp + '</div>')
				}
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert('jqXHR: '+ jqXHR + '  textStatus: '+ textStatus + '  errorThrown: '+errorThrown)
			}
		})
	}

	function modal_delete_attr_vehiculo(type, id)
	{
		let url
		if (type = 'marca') {
			$('#text-caution-delete-marca').show()
			url = '<?php echo base_url("Vehiculos/get_attr/marca/id/");?>'+id
			console.log(url)
		} else {
			$('#text-caution-delete-marca').hide()
			url = '<?php echo base_url("Vehiculos/get_attr/");?>'+type+'/id'+id
			console.log(url)
		}

		$.ajax({
			url: url,
			type: 'GET',
			dataType: "JSON",
			success: function(resp)
			{
				$('#modal_delete_attr_vehiculo #name_attr').append(resp[0].nombre)
				$('#modal_delete_attr_vehiculo #tipo_attr_vehiculo').val(type)
				$('#modal_delete_attr_vehiculo #id_attr_vehiculo').val(resp[0].id)

				$('#modal_delete_attr_vehiculo').modal('show')
			},
			error: function()
			{
				alert('Error al recuperar datos')
			}
		})
	}

	function destroy_attr_vehiculo()
	{
		let type = $('#modal_delete_attr_vehiculo #tipo_attr_vehiculo').val()
		let id = $('#modal_delete_attr_vehiculo #id_attr_vehiculo').val()
		let url

		if (type == 'marca') {
			url = '<?php echo base_url("Vehiculos/destroy_marca/");?>'+id
		} else {
			url = '<?php echo base_url("Vehiculos/destroy/");?>'+id
			console.log(url)
		}

		$.ajax({
			url: url,
			type: "POST",
			success: function(msg)
			{
				if (msg === 'ok') {
					tabla_attr_vehiculos.ajax.reload(null,false);
					print_attributes(type, type)
					$('#modal_delete_attr_vehiculo').modal('hide');
				} else {
					alert('Error al intentar eliminar');
				}
			},
			error: function(jqXHR, textStatus, errorThrown)
			{
				alert('Fallo el eliminar');
			}
		});
	}

	$('#marca').on('change', function(){
		var marca_id = $('#marca').val()
		print_attributes('modelo','modelo', 'marca_vehiculo_id',marca_id)
	})

	print_attributes('marca','marca')
	print_attributes('tipo','tipo')


	function modal_crud_attr(nombre_attr){
		url = "<?php echo base_url('Vehiculos/list_attr/');?>"+nombre_attr
		$('.btnSave').prop( "disabled", false )
		$('.alert-msg-vehiculos').html('')
		$('.form-control').removeClass('error');
		$('.error').empty();
		if (nombre_attr == 'modelo') {
			$('#form_modelo_vehiculo')[0].reset()
			tabla_modelos_vehiculos.ajax.url(url).load()
			print_attributes('marca_attr_id','marca')
			$('#tipo_attr').val(nombre_attr)
			$('#btn_save_modelo').text('Grabar '+nombre_attr)
			$('#modal_crud_attr_modelos_vehiculos').modal('show')
		} else {
			$('#form_attr_vehiculo')[0].reset()
			tabla_attr_vehiculos.ajax.url(url).load()
			$('#tipo_attr').val(nombre_attr)
			$('#label_name_attr').text('Nombre '+nombre_attr)
			$('#btn_save_name_attr').text('Grabar '+nombre_attr)
			$('#modal_crud_attr_vehiculos').modal('show')
		}
	}

	function agrupar_datos()
	{
		resp = {
			'interno' : $('#interno').val(),
			'dominio' : $('#dominio').val(),
			'anio' : $('#anio').val(),
			'marca_id' : $('#marca').val(),
			'modelo_id' : $('#modelo').val(),
			'tipo_id' : $('#tipo').val(),
			'chasis' : $('#chasis').val(),
			'motor' : $('#motor').val(),
			'asientos' : $('#asientos').val(),
			'empresa_id' : $('#empresa').val(),
			'observaciones' : $('#observaciones').val(),
		}

		return resp
	}

	function save()
	{
		// console.log($('.form_new_vehiculo').serialize())
		$.ajax({
			url: '<?php echo base_url("Vehiculos/create")?>',
			type: 'POST',
			data: agrupar_datos(),
			success: function(resp)
			{
				console.log('success add')
				if (resp === 'ok') {
					alert('todo bien')
				} else {
					alert('error add')
				}
			},
			error: function(jqXHR, textStatus, errorThrown)
			{
				alert('errors add:  jqXHR: '+ jqXHR + '  textStatus: '+ textStatus + '  errorThrown: '+errorThrown)
			}
		})
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