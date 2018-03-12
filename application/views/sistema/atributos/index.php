<section class="container-fluid g-py-10">
	<h1>Atributos registrados en el sistema</h1>
    <div class="row g-py-10">
    	<button class="btn btn-success justify-content-end" onclick="create_attribute()"> Nuevo atributo </button>
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
	        	<input type="hidden" name="atributo_id" id="atributo_id" value="">

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

				  <!-- Select categoria -->
				  <div class="form-group g-mb-20">
				    <label class="mr-sm-3 mb-3 mb-lg-0" for="categoria">Categoria(*)</label>
				    <select class="custom-select mb-3" id="categoria">
				      <option value="0">Seleccione categoria</option>
				      <option value="1">General</option>
				      <option value="2">Liquidación de haberes</option>
				      <option value="3">Otros</option>
				      <option value="4">Seguros</option>
				      <option value="5">Sindicatos</option>
				    </select>
				  </div>
				  <!-- End select categoria -->

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
				  <div id="select_tipo_vencimiento" class="form-group g-mb-20" style="display: none">
				    <label class="mr-sm-3 mb-3 mb-lg-0" for="tipo_vencimiento">Tipo de vencimiento(*)</label>
				    <select class="custom-select mb-3" id="tipo_vencimiento">
				      <option value="0">Seleccione tipo vencimiento</option>
				      <option value="7">Semanal</option>
				      <option value="15">Quincenal</option>
				      <option value="30">Mensual</option>
				      <option value="180">Semestral</option>
				      <option value="365">Anual</option>
				      <option value="1">Otro</option>
				    </select>
				  </div>
				  <!-- End select tipo vencimiento -->

				  <!-- Numb Input periodo vencimiento -->
				  <div id="input_periodo_vencimiento" class="form-group g-mb-20" style="display: none">
				    <label class="g-mb-10" for="periodo_vencimiento">Período vencimiento (días) (*)</label>
				    <input id="periodo_vencimiento" name="periodo_vencimiento" class="form-control form-control-md rounded-0" type="number" required>
				    <small class="form-control-feedback"></small>
				  </div>
				  <!-- End Numb Input periodo vencimiento -->

				  <!-- Checkbox permite modificar proximo vencimiento  -->
				  <div id="check_permite_edit_prox_venc" class="form-group g-mb-20" style="display: none">
					  <label class="form-check-inline u-check g-pl-25">
					  	Permite modificar proximo vencimiento
					    <input id="permite_edit_prox_vencimiento" name="permite_edit_prox_vencimiento" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" value="">
					    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
					      <i class="fa" data-check-icon=""></i>
					    </div>
					  </label>
				  </div>
				  <!-- End Checkbox permite modificar proximo vencimiento -->

				  <!-- Checkbox dato permite anexar pdf  -->
				  <div class="form-group g-mb-20">
					  <label class="form-check-inline u-check g-pl-25">
					  	Permite anexar PDF
					    <input id="permite_pdf" name="permite_pdf" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" value="">
					    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
					      <i class="fa" data-check-icon=""></i>
					    </div>
					  </label>
				  </div>
				  <!-- End Checkbox dato permite anexar pdf -->

				  <!-- Textarea Expandable observaciones grales -->
				  <div class="form-group g-mb-20">
				    <label class="g-mb-10" for="observaciones">Observaciones generales</label>
				    <textarea id="observaciones" name="observaciones" class="form-control form-control-md u-textarea-expandable rounded-0" rows="3" placeholder="Ingrese descripción del perfil" required></textarea>
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

				  <!-- Checkbox dato permite anexar pdf  -->
				  <div class="form-group g-mb-20">
					  <label class="form-check-inline u-check g-pl-25">
					  	Presenta en resumen mensual
					    <input id="presenta_resumen_mensual" name="presenta_resumen_mensual" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" value="">
					    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
					      <i class="fa" data-check-icon=""></i>
					    </div>
					  </label>
				  </div>
				  <!-- End Checkbox dato permite anexar pdf -->


				<button id="btnSave" type="submit" class="btn btn-primary" ></button>
        <button type="button" data-dismiss="modal" class="btn btn-md u-btn-red g-mr-10"> Cerrar </button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Fin modal form -->

<!-- Modal para eliminar atributo -->
<div class="modal fade" id="modal_delete_attribute" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">¿ Esta seguro de eliminar este perfil ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<input type="hidden" id="id_attribute_delete" name="id_attribute_delete" value="">
       	<p id="name_attribute_delete"><strong>Nombre: </strong> </p>
       	<br>
       	<p id="description_attribute_delete"><strong>Detalle: </strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-md u-btn-red g-mr-10" onclick="destroy_attribute()">Eliminar</button>
        <button type="button" data-dismiss="modal" class="btn btn-md u-btn-indigo g-mr-10"> Cerrar </button>
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
			$('#select_tipo_vencimiento').show();
			$('#check_permite_edit_prox_venc').show();
		} else {
			$('#select_tipo_vencimiento').hide();
			$('#check_permite_edit_prox_venc').hide();
		}
	});

	$('#tipo_vencimiento').on('change', function(){
		if ($(this).val() == '1') {
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

	function create_attribute()
	{
		save_method = 'create';
		$('#form_atributos')[0].reset()
		$('#select_tipo_vencimiento').hide()
		$('#input_periodo_vencimiento').hide()
		$('#check_permite_edit_prox_venc').hide()
		$('#modal_form_atributo .modal-title').text('Alta de atributo');
		$('#modal_form_atributo #btnSave').text('Grabar atributo');
		$('.form-control').removeClass('error');
		$('.error').empty();
		$('#modal_form_atributo').modal('show');
	}	

	function edit_attribute(id)
	{
		save_method = 'update';
		$('#form_atributos')[0].reset()
		$('#select_tipo_vencimiento').hide()
		$('#input_periodo_vencimiento').hide()
		$('#check_permite_edit_prox_venc').hide()
		$('.form-control').removeClass('error')
		$('.error').empty()	

		$.ajax({
			url: "<?php echo base_url('Atributos/edit/');?>" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
				{
					console.log(data.dato_obligatorio)

					$('[name=id]').val(data.id)
					$('[name=nombre]').val(data.nombre)
					$('[name=descripcion]').val(data.descripcion)
					$('[id=dato_obligatorio]').prop('checked', data.dato_obligatorio == 1)
					$('#categoria option').prop('selected', false)
					$('#categoria option').filter(function(){
						return this.text == data.categoria
					}).attr('selected', true)
					$('#tiene_vencimiento').prop('checked', data.tiene_vencimiento == 1)
					if (data.tiene_vencimiento == 1) {
						$('#select_tipo_vencimiento').show()
							$('#tipo_vencimiento option').prop('selected', false)
							$('#tipo_vencimiento option').filter(function(){
								return this.text == data.tipo_vencimiento
							}).attr('selected', true)
							$('#permite_edit_prox_vencimiento').prop('checked', data.permite_modificar_proximo_vencimiento == 1)
					}
					if (data.tipo_vencimiento == 'Otro') {
						$('#input_periodo_vencimiento').show()
						$('#periodo_vencimiento').val(data.periodo_vencimiento)
					}
					$('#permite_pdf').prop('checked', data.permite_pdf == 1)
					$('#observaciones').text(data.observaciones)
					$('#metodologia_renovacion').text(data.metodologia_renovacion)
					$('[name=fecha_inicio_vigencia]').val(data.fecha_inicio_vigencia)
					$('#importe').val(data.importe)
					$('#presenta_resumen_mensual').prop('checked', data.presenta_resumen_mensual == 1)

					$('#modal_form_atributo .modal-title').text('Modificar perfil');
					$('#modal_form_atributo #btnSave').text('Actualizar perfil');
					$('#modal_form_atributo').modal('show');
				},
			error: function(jqXHR, textStatus, errorThrown)
				{
					alert('Error obteniendo datos');
				}
		});

	}

	function extraerDatos(miForm)
	{
		let componentes = $(miForm).find(':input[type=checkbox],input,textarea,option');
		let rta = [];
		$.each(componentes, function(index,componente){
			if ($(componente).prop("type")  == "checkbox") {
				rta.push($(componente).is(':checked'));
			}  else if ($(componente).prop('type') == "") {
				rta.push('selected');
			} else {
				rta.push($(componente).val());
			}
		});
		return rta;
	}

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
    	data: agrupar_datos(),
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
		console.log(agrupar_datos())

	});

// Llamo al modal de advertencia para eliminar el perfil
	function delete_attribute(id)
	{
		$.ajax({
			url: "<?php echo base_url('Atributos/edit/');?>" + id,
			type: "GET",
			dataType: "JSON",
			success: function(resp)
			{
				$('#modal_delete_attribute #id_attribute_delete').val(resp.id)
				$('#modal_delete_attribute #name_attribute_delete').append(resp.nombre)
				$('#modal_delete_attribute #description_attribute_delete').append(resp.descripcion)
				$('#modal_delete_attribute').modal('show')
			},
			error: function()
			{
				alert('Error al obtener los datos');
			}
		});
	}
	// Elimino el perfil
	function destroy_attribute()
	{
		var id_attribute = $('#id_attribute_delete').val();
		$.ajax({
			url: "<?php echo base_url('Atributos/destroy/');?>" + id_attribute,
			type: "POST",
			success: function(msg)
			{
				if (msg === 'ok') {
					table_atributos.ajax.reload(null,false);
					$('#modal_delete_attribute').modal('hide');
				} else {
					alert('Error al intentar eliminar el atributo');
				}
			},
			error: function(jqXHR, textStatus, errorThrown)
			{
				alert('Fallo el eliminar atributo');
			}
		});
	}

	function agrupar_datos()
	{
		datos = {
			'id': $('#form_atributos #atributo_id').val(),
			'tipo': $('#form_atributos #tipo').val(),
			'nombre': $('#form_atributos #nombre').val(),
			'descripcion': $('#form_atributos #descripcion').val(),
			'categoria': $('#form_atributos #categoria option:selected').text(),
			'dato_obligatorio': $('#form_atributos #dato_obligatorio').is(':checked'),
			'tiene_vencimiento': $('#form_atributos #tiene_vencimiento').is(':checked'),
			'tipo_vencimiento': $('#form_atributos #tipo_vencimiento option:selected').text(),
			'periodo_vencimiento': $('#form_atributos #periodo_vencimiento').val(),
			'permite_pdf': $('#form_atributos #permite_pdf').is(':checked'),
			'observaciones': $('#form_atributos #observaciones').val(),
			'metodologia_renovacion': $('#form_atributos #metodologia_renovacion').val(),
			'fecha_inicio_vigencia': $('#form_atributos #fecha_inicio_vigencia').val(),
			'importe': $('#form_atributos #importe').val(),
			'permite_edit_prox_vencimiento': $('#form_atributos #permite_edit_prox_vencimiento').is(':checked'),
			'presenta_resumen_mensual': $('#form_atributos #presenta_resumen_mensual').is(':checked'),
		}

		return datos
	}


  $(document).on('ready', function () {
	table_atributos =	$('#tabla_atributos').DataTable( {
													lengthChange: false,   
													ajax : '<?php echo base_url('Atributos/ajax_list_attributes/').$tipo_atributo;?>'
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
