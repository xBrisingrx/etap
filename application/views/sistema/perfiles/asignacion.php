<section>
<div class="container-fluid">
	<h1> Asignación de pergiles de <?php echo $nombre_tipo_perfil ?> </h1>

	<button id="btn_add_profile_assign" class="btn u-btn-primary" type="button" > <i class="fa fa-plus"></i> Add </button>
		<!-- tabla asignacion de perfiles -->
		  <div class="table-responsive" >
		    <table id="profile_assign_table" class="table table-hover u-table--v1 mb-0">
		      <thead>
		        <tr>
		          <?php for ($i=0; $i < count($columnas_tabla); $i++) { ?>
		        		<th><?php echo $columnas_tabla[$i]; ?></th>  	
		      		<?php  } ?>
		        </tr>
		      </thead>
		      <tbody>
		      	<!-- Completo con ajax -->
		      </tbody>
		    </table>
		  </div>
	<!-- End tabla asignacion de perfiles -->
		<br><br>
</div>
</section>


<div class="modal fade" id="modal_add_profile_assign" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form id="form_profile_assign" class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30">
      		<!-- input que uso cuando edito -->
      		<input type="hidden" id="profile_assign_id" value="">
				  <!-- Select perfil -->
				  <div class="form-group g-mb-20">
				    <label class="mr-sm-3 mb-3 mb-lg-0" for="asign_id">Persona (*)</label>
				    <select class="custom-select mb-3" id="asign_id" required>
				      <option value="0" selected disabled> Seleccione  </option>
				      <?php if ($tipo_perfil == 1): ?>
				      	<?php foreach ($asigno as $a): ?>
				      		<option value="<?php echo $a->id;?>"><?php echo $a->apellido." ".$a->nombre;?></option>
				      	<?php endforeach ?>
				      <?php else: ?>
				      	<?php foreach ($asigno as $a): ?>
				      	<option value="<?php echo $a->id;?>">Interno: <?php echo $a->interno." Dominio: ".$a->dominio ;?></option>
				      <?php endforeach ?>
				      <?php endif ?>
				    </select>
				  </div>
				  <!-- End select perfil -->

				  <!-- Select tipo vencimiento -->
				  <div class="form-group g-mb-20">
				    <label class="mr-sm-3 mb-3 mb-lg-0" for="profile_id">Perfil a asignar (*)</label>
				    <select class="custom-select mb-3" id="profile_id" required>
				      <option value="0" selected disabled > Seleccione perfil </option>
				      <?php foreach ($perfiles as $p): ?>
				      	<option value="<?php echo $p->id;?>"><?php echo $p->nombre;?></option>
				      <?php endforeach ?>
				    </select>
				  </div>
				  <!-- End select tipo vencimiento -->

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
					<button id="btnSaveAssign" type="button" class="btn btn-primary" onclick="save()">Asignar perfil</button>
        	<button type="button" class="btn u-btn-red" data-dismiss="modal">Cerrar</button>
      	</form>
      </div>
    </div>
  </div>
</div>

<!-- Modal para eliminar asignacion -->
<div class="modal fade" id="modal_delete_assign" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">¿ Esta seguro de eliminar esta asignación ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<input type="hidden" id="profile_assign_id" name="profile_assign_id" value="">
       	<p id="name_assign_delete"></p>
       	<br>
       	<p id="name_profile_delete"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-md u-btn-red g-mr-10" onclick="destroy()">Eliminar</button>
        <button type="button" data-dismiss="modal" class="btn btn-md u-btn-indigo g-mr-10"> Cerrar </button>
      </div>
    </div>
  </div>
</div>
<!-- Fin modal eliminar asignacion -->

<script>
	let profile_assign_table
	let save_method
	let asign_type = '<?php echo $tipo_perfil;?>'

	$('#btn_add_profile_assign').on('click', function(){
		save_method = 'create'
		$('#modal_add_profile_assign #btnSaveAssign').text('Asignar perfil');
		$('#modal_add_profile_assign').modal('show')
	})

	function edit(id, type)
	{
		save_method = 'update'
		$('#modal_add_profile_assign #btnSaveAssign').text('Actualizar');
		$('#modal_add_profile_assign').modal('show')
		$.ajax({
			url: "<?php echo base_url('Perfiles/get_assign_profile/');?>" + id + "/" + type,
			type: "GET",
			dataType: "JSON",
			success: function(resp)
				{
					$('#profile_assign_id').val(resp[0].id)
					$('#asign_id option[value="0"]').attr('selected', false)
					$('#asign_id option[value="'+ resp[0].persona_id +'"]').attr('selected', 'selected')
					$('#profile_id option[value="0"]').attr('selected', false)
					$('#profile_id option[value="'+ resp[0].perfil_id +'"]').attr('selected', 'selected')
					$('#fecha_inicio_vigencia').val(resp[0].fecha_inicio_vigencia)
					// $('#modal_add_profile_assign #btnSaveAssign').text('Asignar perfil')
				},
			error: function()
				{	
					alert('Error al obtener los datos')
				}	
		})
	}

	// save assign profile
	function save()
	{
		$('#btnSaveAssign').attr('disabled', true)
		let asign_id = $('#form_profile_assign #asign_id').val()
		let profile_id = $('#form_profile_assign #profile_id').val()
		let start_date_validity = $('#form_profile_assign #fecha_inicio_vigencia').val()
		if (save_method === 'create') {
			method_url = '<?php echo base_url("Perfiles/new_assign_profile")?>'
		} else if (save_method === 'update') {
			id = $('#profile_assign_id').val()
			console.log('id a editar: ' + id)
			method_url = '<?php echo base_url("Perfiles/edit_assign_profile/")?>' + id
		}

		$.ajax({
			url: method_url,
			type: "POST",
			data: {
				asign_id: asign_id, 
				profile_id: profile_id, 
				fecha_inicio_vigencia: start_date_validity, 
				asign_type: asign_type },
			success: function(resp)
				{
					console.log('success: '+resp)
					if (resp === 'ok') {
						$('#form_profile_assign')[0].reset();
						$('#modal_add_profile_assign .modal-title').text('Alta de perfil');
						$('.form-control').removeClass('error');
						$('.error').empty();
						profile_assign_table.ajax.reload(null,false);
						$('#modal_add_profile_assign').modal('hide')
					} else {
						alert('error al guardar datos '+ resp);
					}
					$('#btnSaveAssign').attr('disabled', false)
				},
			error: function(jqXHR, textStatus, errorThrown)
				{
					alert('Error al guardar datos metodo: ' + save_method)
	    		$('#btnSaveAssign').attr('disabled', false)
				}
		})
	}

	function modal_destroy(id, type)
	{
		$.ajax({
			url: '<?php echo base_url("Perfiles/get_assign_profile/")?>' + id + '/' + type, 
			type: "GET",
			dataType: "JSON",
			success: function(resp)
			{
				if (type === 1) {
					$('#modal_delete_assign #name_assign_delete').html('<strong>Persona: </strong>'+ resp.apellido_persona + ' ' + resp.nombre_persona )
				} else {
					$('#modal_delete_assign #name_assign_delete').html('<strong>Interno: </strong>'+ resp.interno + ' <strong>Dominio: </strong>' + resp.dominio )
				}
				$('#modal_delete_assign #name_profile_delete').html('<strong>Perfil: </strong>' + resp.nombre_perfil)
				$('#modal_delete_assign #profile_assign_id').val(resp.id)
				$('#modal_delete_assign').modal('show')
			},
			error: function()
			{
				alert('error ajax')
			}
		})
	}

	function destroy()
	{
		let id = $('#modal_delete_assign #profile_assign_id').val()
		let type_assign = '<?php echo $tipo_perfil ?>'
		$.ajax({
			url: '<?php echo base_url("Perfiles/destroy_assign_profile/");?>' + id + '/' + type_assign,
			type: 'POST',
			success: function(resp)
			{
				if (resp === 'ok') {
					$('#modal_delete_assign').modal('hide')
					profile_assign_table.ajax.reload(null,false);
				} else {
					alert('Error al eliminar la asignación.')
				}
			},
			error: function()
			{

			}
		})		
	}

	$(document).on('ready', function () {
		// $('#profile_assign_table').DataTables()
		profile_assign_table = $('#profile_assign_table').DataTable( {
																										 lengthChange: false,  
																							       ajax : "<?php echo base_url('Perfiles/list_perfiles_asignados/').$tipo_perfil;?>"
																										});
	});
</script>
