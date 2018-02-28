<section class="container-fluid g-py-10">
	<h1>Perfiles registrados en el sistema</h1>
    <div class="row g-py-10">
    	<button class="btn btn-success justify-content-end" onclick="create_profile()"> Nuevo perfil </button>
    </div>

	<!-- Hover Rows -->
	<div class="card g-brd-darkpurple rounded-0 g-mb-30">
	  <h3 class="card-header g-bg-darkpurple g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">
	    <i class="fa fa-gear g-mr-5"></i>
	    Listado de atributos de <?php echo $nombre_atributo ?> registrados
	  </h3>

	  <div class="table-responsive">
	    <table id="tabla_atributos" class="table table-hover u-table--v1 mb-0">
	      <thead>
	        <tr>
	          <th>Nombre atributo</th>
	          <th>Descripción</th>
	          <th>Dato obligatorio</th>
	          <th>Categoría</th>
	          <th>Tiene vencimiento</th>
	          <th>Tipo vencimiento</th>
	          <th>Periodo vencimiento</th>
	          <th>Permite modif. prox. venc.</th>
	          <th>Permite anexo</th>
	          <th>Observaciones generales</th>
	          <th>Metodología de renovacion</th>
	          <th>Fecha inicio vigencia</th>
	          <th>Importe</th>
	          <th>Presenta resumen mensual</th>
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
</section>


<!-- Modal con form para crear/editar atributo -->

<div class="modal fade" id="modal_form_atributo" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_atributos" class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30">
	        <!-- Tipo de perfil -->
	        	<input type="hidden" id="tipo" name="tipo" value="<?php echo $tipo_atributo;?>">

	        <!-- ID perfil -->
	        	<input type="hidden" name="id" value="">

				  <!-- Text Input -->
				  <div class="form-group g-mb-20">
				    <label class="g-mb-10" for="inputGroup1_1">Nombre del atributo(*)</label>
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

				  <!-- Checkbox dato obligatorio  -->
				  <div class="form-group g-mb-20">
				  	<label class="form-check-inline u-check g-pl-25">
					  	Dato obligatorio
					    <input id="dato_obligatorio" name="dato_obligatorio" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" value="">
					    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
					      <i class="fa" data-check-icon=""></i>
					    </div>
					  </label>
				  </div>
				  <!-- End Checkbox dato obligatorio -->

				  <!-- Checkbox dato tiene vencimiento  -->
				  <div class="form-group g-mb-20">
					  <label class="form-check-inline u-check g-pl-25">
					  	Tiene vencimiento
					    <input id="tiene_vencimiento" name="tiene_vencimiento" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" value="">
					    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
					      <i class="fa" data-check-icon=""></i>
					    </div>
					  </label>
				  </div>

				  <!-- End Checkbox dato tiene vencimiento -->

				  <!-- Select tipo vencimiento -->
				  <div id="select_tiene_vencimiento" class="form-group g-mb-20" style="display: none">
				    <label class="mr-sm-3 mb-3 mb-lg-0" for="tipo_vencimiento">Tipo de vencimiento(*)</label>
				    <select class="custom-select mb-3" id="tipo_vencimiento">
				      <option selected="">Seleccione tipo vencimiento</option>
				      <option value="1">Semanal</option>
				      <option value="2">Quincenal</option>
				      <option value="3">Mensual</option>
				      <option value="4">Semestral</option>
				      <option value="5">Anual</option>
				      <option value="6">Otro</option>
				    </select>
				  </div>
				  <!-- End select tipo vencimiento -->

				  <!-- Numb Input periodo vencimiento -->
				  <div id="input_periodo_vencimiento" class="form-group g-mb-20" style="display: none">
				    <label class="g-mb-10" for="periodo_vencimiento">Período vencimiento (días) (*)</label>
				    <input id="periodo_vencimiento" name="periodo_vencimiento" importeclass="form-control form-control-md rounded-0" type="number" required>
				    <small class="form-control-feedback"></small>
				  </div>
				  <!-- End Numb Input periodo vencimiento -->

				  <!-- Checkbox dato permite anexar pdf  -->
				  <div class="form-group g-mb-20">
					  <label class="form-check-inline u-check g-pl-25">
					  	Permite anexar PDF
					    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" value="">
					    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
					      <i class="fa" data-check-icon=""></i>
					    </div>
					  </label>
				  </div>
				  <!-- End Checkbox dato permite anexar pdf -->

				  <!-- Textarea Expandable observaciones grales -->
				  <div class="form-group g-mb-20">
				    <label class="g-mb-10" for="obsevaciones">Observaciones generales</label>
				    <textarea id="obsevaciones" name="obsevaciones" class="form-control form-control-md u-textarea-expandable rounded-0" rows="3" placeholder="Ingrese descripción del perfil" required></textarea>
				  </div>
				  <!-- End Textarea Expandable observaciones grales -->

				  <!-- Textarea Expandable metodologia renovacion -->
				  <div class="form-group g-mb-20">
				    <label class="g-mb-10" for="metodologia_renovacion">Metodología de renovación</label>
				    <textarea id="metodologia_renovacion" name="metodologia_renovacion" class="form-control form-control-md u-textarea-expandable rounded-0" rows="3" placeholder="Ingrese descripción del perfil" required></textarea>
				  </div>
				  <!-- End Textarea Expandable metodologia renovacion -->

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

				  <!-- Numb Input importe -->
				  <div class="form-group g-mb-20">
				    <label class="g-mb-10" for="importe">Importe $(*)</label>
				    <input id="importe" name="importe" importeclass="form-control form-control-md rounded-0" type="number" required>
				    <small class="form-control-feedback"></small>
				  </div>
				  <!-- End Numb Input importe -->


				<button id="btnSave" type="submit" class="btn btn-primary" ></button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Fin modal form -->

<!-- Modal para eliminar atributo -->
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin modal eliminar atributo -->


<script type="text/javascript">
	var save_method;
	var table_atributos;

	$('#tiene_vencimiento').on('click', function(){
		if ($(this).is(':checked')) {
			$('#select_tiene_vencimiento').show();
		} else {
			$('#select_tiene_vencimiento').hide();
		}
	});

	$('#tipo_vencimiento').on('change', function(){
		if ($(this).val() == '6') {
			$('#input_periodo_vencimiento').show();
		} else {
			$('#input_periodo_vencimiento').hide();
		}
	});


	$.validator.addMethod("alfanumOespacio", function(value, element) {
	        return /^[ a-záéíóúüñ]*$/i.test(value);
	    }, "Ingrese sólo letras.");

	var form_atributos = $('#form_atributos').validate({
															rules: {
																'nombre': { alfanumOespacio: true,
																 						minlength: 3 },
																'descripcion': { minlength: 10 }
															}
														});

	function create_profile()
	{
		save_method = 'create';
		$('#form_atributos')[0].reset();
		$('#modal_form_atributo .modal-title').text('Alta de atributo');
		$('#modal_form_atributo #btnSave').text('Grabar atributo');
		$('.form-control').removeClass('error');
		$('.error').empty();
		$('#modal_form_atributo').modal('show');
	}	

// 	function edit_profile(id)
// 	{
// 		save_method = 'update';
// 		$('#form_perfiles')[0].reset();

// 		$.ajax({
// 			url: "<?php echo base_url('Perfiles/edit/');?>" + id,
// 			type: "GET",
// 			dataType: "JSON",
// 			success: function(data)
// 				{
// 					$('[name=id]').val(data.id);
// 					$('[name=nombre]').val(data.nombre);
// 					$('[name=descripcion]').val(data.descripcion);
// 					$('[name=fecha_inicio_vigencia]').val(data.fecha_inicio_vigencia);

// 					$('.form-control').removeClass('error');
// 					$('.error').empty();					

// 					$('#modal_form_perfil .modal-title').text('Modificar perfil');
// 					$('#modal_form_perfil #btnSave').text('Actualizar perfil');
// 					$('#modal_form_perfil').modal('show');
// 				},
// 			error: function(jqXHR, textStatus, errorThrown)
// 				{
// 					alert('Error obteniendo datos');
// 				}
// 		});

// 	}

	function save()
	{
		var url;
		$('#btnSave').text('guardando...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 

     url = "<?php echo base_url();?>Atributos/" + save_method;
    // ajax adding data to database
    $.ajax({
    	url: url,
    	type: "POST",
    	data: $('#form_atributos').serializeArray(),
    	success: function(msg)
    	{
    		if (msg === 'ok') {
    			table_atributos.ajax.reload(null,false);
    			$('#modal_form_atributo').modal('hide');
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

	$('#form_atributos').submit(function(e){
		e.preventDefault();	
		if (form_atributos.valid()) { save(); }
	});

// // Llamo al modal de advertencia para eliminar el perfil
// 	function delete_profile(id)
// 	{
// 		$.ajax({
// 			url: "<?php echo base_url('Perfiles/edit/');?>" + id,
// 			type: "GET",
// 			dataType: "JSON",
// 			success: function(resp)
// 			{
// 				$('#modal_delete_profile #id_profile_delete').val(resp.id);
// 				$('#modal_delete_profile #name_profile_delete').append(resp.nombre);
// 				$('#modal_delete_profile #description_profile_delete').append(resp.descripcion);
// 				$('#modal_delete_profile').modal('show');
// 			},
// 			error: function()
// 			{
// 				alert('Error al obtener los datos');
// 			}
// 		});
// 	}
// 	// Elimino el perfil
// 	function destroy_profile()
// 	{
// 		var id_profile = $('#id_profile_delete').val();
// 		$.ajax({
// 			url: "<?php echo base_url('Perfiles/destroy/');?>" + id_profile,
// 			type: "POST",
// 			success: function(msg)
// 			{
// 				if (msg === 'ok') {
// 					table_perfiles.ajax.reload(null,false);
// 					$('#modal_delete_profile').modal('hide');
// 				} else {
// 					alert('Error al intentar eliminar el perfil');
// 				}
// 			},
// 			error: function(jqXHR, textStatus, errorThrown)
// 			{
// 				alert('Fallo el eliminar');
// 			}
// 		});
// 	}


  $(document).on('ready', function () {
		$('#tabla_atributos').DataTable( {
													lengthChange: false,   
													ajax : '<?php echo base_url('Atributos/ajax_get_atributos/').$tipo_atributo;?>'
													// columns: [
													// 	{ "data": "nombre"  },
													// 	{ "data": "descripcion" },
													// 	{ "data": "fecha_inicio_vigencia" },
													// 	{ "data": "fecha_baja" },
													// 	{ "data": "acciones" }
													// ]
												});
  });
</script>
