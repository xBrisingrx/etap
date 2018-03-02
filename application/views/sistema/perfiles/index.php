<section class="container-fluid g-py-10">
	<h1>Perfiles registrados en el sistema</h1>
    <div class="row g-py-10">
    	<button class="btn btn-success justify-content-end" onclick="create_profile()"> Nuevo perfil </button>
    </div>

	<!-- Hover Rows -->
	<div class="card g-brd-darkpurple rounded-0 g-mb-30">
	  <h3 class="card-header g-bg-darkpurple g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">
	    <i class="fa fa-gear g-mr-5"></i>
	    Listado de perfiles registrados
	  </h3>

	  <div class="table-responsive">
	    <table id="tabla_perfiles" class="table table-hover u-table--v1 mb-0">
	      <thead>
	        <tr>
	          <th>Nombre del perfil de <?php echo $nombre_perfil; ?></th>
	          <th>Descripción</th>
	          <th>Fecha inicio vigencia</th>
	          <th>Fecha baja</th>
	          <th>Acciones</th>
	        </tr>
	      </thead>

	      <tbody>
	      	<!-- Completo con ajax -->
	        </tr>
	      </tbody>
	    </table>
	  </div>
	</div>
	<!-- End Hover Rows -->
	<br><br>

	<div class="row">
		<button onclick="assign_attribute()">Asignar atributo</button>
	</div>

	<!-- Hover Rows -->
	<div class="card g-brd-darkpurple rounded-0 g-mb-30">
	  <h3 class="card-header g-bg-darkpurple g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">
	    <i class="fa fa-gear g-mr-5"></i>
	    Asignacion de atributos al perfil de <?php echo $nombre_perfil; ?>
	  </h3>
	  <div class="table-responsive">
	    <table id="tabla_perfiles_atributos" class="table table-hover u-table--v1 mb-0 display compact">
	      <thead>
	        <tr>
	          <th>Perfil</th>
	          <th>Atributo</th>
	          <th>Fecha inicio vigencia</th>
	          <th>Fecha baja</th>
	          <th>Acciones</th>
	        </tr>
	      </thead>

	      <tbody>
	      	<?php foreach ($perfiles_atributos as $p): ?>
	      		<tr>
	      			<td><?php echo $p->nombre;?></td>
	      			<td><?php echo $p->descripcion;?></td>
	      			<td><?php echo $p->fecha_inicio_vigencia;?></td>
	      			<td>fecha baja</td>
	      			<td>Acciones</td>
	      		</tr>
	      	<?php endforeach ?>
	      </tbody>
	    </table>
	  </div>
	</div>
	<!-- End Hover Rows -->



</section>



<div class="modal fade" id="modal_form_perfil" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_perfiles" class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30">
	        <!-- Tipo de perfil -->
	        	<input type="hidden" id="tipo" name="tipo" value="<?php echo $tipo_perfil;?>">

	        <!-- ID perfil -->
	        	<input type="hidden" name="id" value="">

				  <!-- Text Input -->
				  <div class="form-group g-mb-20">
				    <label class="g-mb-10" for="inputGroup1_1">Nombre del perfil de <?php echo $nombre_perfil;?>(*)</label>
				    <input id="nombre" name="nombre" class="form-control form-control-md rounded-0" placeholder="Ingrese nombre de perfil" type="text" required>
				    <small class="form-control-feedback"></small>
				  </div>
				  <!-- End Text Input -->

				  <!-- Textarea Expandable -->
				  <div class="form-group g-mb-20">
				    <label class="g-mb-10" for="inputGroup2_2">Descripción(*)</label>
				    <textarea id="descripcion" name="descripcion" class="form-control form-control-md u-textarea-expandable rounded-0" rows="3" placeholder="Ingrese descripción del perfil" required></textarea>
				  </div>
				  <!-- End Textarea Expandable -->

				  <!-- Select Single Date -->
				  <div class="form-group g-mb-30">
				    <label class="g-mb-10">Fecha inicio vigencia(*)</label>
				    <div class="input-group g-brd-primary--focus">
				      <input id="fecha_inicio_vigencia" name="fecha_inicio_vigencia" class="form-control form-control-md  rounded-0" type="date" required>
				      <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-dark-v5 rounded-0">
				        <i class="icon-calendar"></i>
				      </div>
				    </div>
				  </div>
				  <!-- End Select Single Date -->
				<button id="btnSave" type="submit" class="btn btn-primary"></button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="modal_add_attribute" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form id="form_asignar_atributo" class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30">
				  <!-- Select perfil -->
				  <div class="form-group g-mb-20">
				    <label class="mr-sm-3 mb-3 mb-lg-0" for="profile_id">Perfil (*)</label>
				    <select class="custom-select mb-3" id="profile_id">
				      <!-- Populate with ajax -->
				    </select>
				  </div>
				  <!-- End select perfil -->

				  <!-- Select tipo vencimiento -->
				  <div class="form-group g-mb-20">
				    <label class="mr-sm-3 mb-3 mb-lg-0" for="ttribute_id">Atributo (*)</label>
				    <select class="custom-select mb-3" id="attribute_id">
				      
				    </select>
				  </div>
				  <!-- End select tipo vencimiento -->

				  <!-- Select Single Date -->
				  <div class="form-group g-mb-30">
				    <label class="g-mb-10">Fecha inicio vigencia(*)</label>
				    <div class="input-group g-brd-primary--focus">
				      <input id="fecha_inicio_vigencia_atributo_perfil" name="fecha_inicio_vigencia_atributo_perfil" class="form-control form-control-md  rounded-0" type="date" required>
				      <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-dark-v5 rounded-0">
				        <i class="icon-calendar"></i>
				      </div>
				    </div>
				  </div>
				  <!-- End Select Single Date -->
      	</form>
      </div>
      <div class="modal-footer">
        <button id="btnSaveAssign" type="button" class="btn btn-primary" onclick="">Asignar atributo</button>
        <button type="button" class="btn btn-red" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="modal_delete_profile" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">¿ Esta seguro de eliminar este perfil ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<input type="hidden" id="id_profile_delete" name="id_profile_delete" value="">
       	<p id="name_profile_delete"><strong>Nombre: </strong> </p>
       	<br>
       	<p id="description_profile_delete"><strong>Detalle: </strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-red" onclick="destroy_profile()">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
	var save_method;
	var table_perfiles;

	$.validator.addMethod("alfanumOespacio", function(value, element) {
	        return /^[ a-záéíóúüñ]*$/i.test(value);
	    }, "Ingrese sólo letras.");

	var form_perfiles = $('#form_perfiles').validate({
															rules: {
																'nombre': { alfanumOespacio: true,
																 						minlength: 3 },
																'descripcion': { minlength: 10 }
															}
														});

	function create_profile()
	{
		save_method = 'create';
		$('#form_perfiles')[0].reset();
		$('#modal_form_perfil .modal-title').text('Alta de perfil');
		$('#modal_form_perfil #btnSave').text('Grabar perfil');
		$('.form-control').removeClass('error');
		$('.error').empty();
		$('#modal_form_perfil').modal('show');
	}	

	function edit_profile(id)
	{
		save_method = 'update';
		$('#form_perfiles')[0].reset();

		$.ajax({
			url: "<?php echo base_url('Perfiles/edit/');?>" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
				{
					$('[name=id]').val(data.id);
					$('[name=nombre]').val(data.nombre);
					$('[name=descripcion]').val(data.descripcion);
					$('[name=fecha_inicio_vigencia]').val(data.fecha_inicio_vigencia);

					$('.form-control').removeClass('error');
					$('.error').empty();					

					$('#modal_form_perfil .modal-title').text('Modificar perfil');
					$('#modal_form_perfil #btnSave').text('Actualizar perfil');
					$('#modal_form_perfil').modal('show');
				},
			error: function(jqXHR, textStatus, errorThrown)
				{
					alert('Error obteniendo datos');
				}
		});

	}

	function save()
	{
		var url;
		$('#btnSave').text('guardando...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 

     url = "<?php echo base_url();?>Perfiles/" + save_method;
    // ajax adding data to database
    $.ajax({
    	url: url,
    	type: "POST",
    	data: $('#form_perfiles').serializeArray(),
    	success: function(msg)
    	{
    		if (msg === 'ok') {
    			$('#modal_form_perfil').modal('hide');
    			table_perfiles.ajax.reload(null,false);
    		} else {
    			alert('error al guardar datos '+ msg);
    		}
    		$('#btnSave').attr('disabled', false);
    	},
    	error: function(jqXHR, textStatus, errorThrown){
    		alert('Error al guardar datos metodo: ' + save_method);
    		$('#btnSave').attr('disabled', false);
    	}

    });
	}

	$('#form_perfiles').submit(function(e){
		e.preventDefault();	
		if (form_perfiles.valid()) { save(); }
		
	});

// Llamo al modal de advertencia para eliminar el perfil
	function delete_profile(id)
	{
		$.ajax({
			url: "<?php echo base_url('Perfiles/edit/');?>" + id,
			type: "GET",
			dataType: "JSON",
			success: function(resp)
			{
				$('#modal_delete_profile #id_profile_delete').val(resp.id);
				$('#modal_delete_profile #name_profile_delete').append(resp.nombre);
				$('#modal_delete_profile #description_profile_delete').append(resp.descripcion);
				$('#modal_delete_profile').modal('show');
			},
			error: function()
			{
				alert('Error al obtener los datos');
			}
		});
	}
	// Elimino el perfil
	function destroy_profile()
	{
		var id_profile = $('#id_profile_delete').val();
		$.ajax({
			url: "<?php echo base_url('Perfiles/destroy/');?>" + id_profile,
			type: "POST",
			success: function(msg)
			{
				if (msg === 'ok') {
					table_perfiles.ajax.reload(null,false);
					$('#modal_delete_profile').modal('hide');
				} else {
					alert('Error al intentar eliminar el perfil');
				}
			},
			error: function(jqXHR, textStatus, errorThrown)
			{
				alert('Fallo el eliminar');
			}
		});
	}


// Funciones para operaciones de asignacion de atributos al perfil

	// Obtengo los perfiles para imprimirlos en el select de asignar atributo al perfil
	function print_profiles()
	{	
		$.ajax({
			url: '<?php echo base_url("Perfiles/ajax_get_profiles/").$tipo_perfil?>',
			type: 'GET',
			success: function(resp){
				var profiles = $.parseJSON(resp)
				$('#profile_id').find('option').remove().end().append('<option value="" disabled selected >Seleccione perfil</option>')
				$(profiles).each(function(i, element){
					$('#profile_id').append("<option value="+element.id+">"+element.nombre+"</option>");
				});
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('#profile_id').find('option').remove().end().append('<option value="" disabled selected >Seleccione perfil</option>');
				$('#profile_id').append("<option value=''>No se pudieron obtener los perfiles</option>");
			}
		});
	}

	// Obtengo los atributos para el modal asignar perfil atributo
	function print_attributes()
	{
		$.ajax({
			url: '<?php echo base_url("Atributos/ajax_get_attributes/").$tipo_perfil; ?>',
			type: 'GET',
			success: function(resp){
				var attributes = $.parseJSON(resp)
				$('#attribute_id').find('option').remove().end().append('<option value="" disabled selected >Seleccione atributo</option>')
				$(attributes).each(function(i, element){
					$('#attribute_id').append("<option value="+element.id+">"+element.nombre+"</option>");
				});
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('#profile_id').find('option').remove().end().append('<option value="" disabled selected >Seleccione atributo</option>');
				$('#profile_id').append("<option value=''>No se pudieron obtener los atributos</option>");
			}
		});
	}

	function modal_assign_attribute()
	{
		save_method = 'assign_attribute';
		$('#form_asignar_atributo')[0].reset();
		$('#modal_add_attribute .modal-title').text('Asignación de atributo al perfil de  <?php echo $nombre_perfil; ?>');
		$('#modal_add_attribute #btnSave').text('Asignar atributo');
		$('.form-control').removeClass('error');
		$('.error').empty();
		print_profiles();
		print_attributes();
		$('#modal_add_attribute').modal('show');
	}

	function assign_attribute()
	{
		var profile_id = $('#profile_id').val()
		var attribute_id = $('#attribute_id').val()
		

	}



  $(document).on('ready', function () {
		table_perfiles = $('#tabla_perfiles').DataTable( {
													lengthChange: false,   
													ajax : "<?php echo base_url('Perfiles/ajax_list_perfiles/').$tipo_perfil;?>",
													columns: [
														{ "data": "nombre"  },
														{ "data": "descripcion" },
														{ "data": "fecha_inicio_vigencia" },
														{ "data": "fecha_baja" },
														{ "data": "acciones" }
													]
												});
  });
</script>
