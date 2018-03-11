    <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success fade in">
              <strong><i class="icon-custom rounded-x icon-color-grey fa fa-thumbs-up"></i></strong> <?php echo $this->session->flashdata('success'); ?>
          </div>
    <?php endif ?>

    <?php if ($this->session->flashdata('error')): ?>
          <div class="alert alert-danger fade in">
              <strong><i class="fa fa-exclamation-circle"></i></strong> <?php echo $this->session->flashdata('error'); ?>
          </div>
    <?php endif ?>

<section class="container-fluid g-py-10">
  <h1>Vehiculos registrados en el sistema</h1>
    <a href="<?php echo base_url('index.php/Vehiculos/new');?>" class="btn btn-success justify-content-end">Nuevo vehiculo</a>

  <div class="card g-brd-darkpurple rounded-0 g-mb-30">
    <h3 class="card-header g-bg-darkpurple g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">
      <i class="fa fa-gear g-mr-5"></i>
      Vehiculos registradas
    </h3>

    <div class="table-responsive">
      <table id="tabla_vehiculos" class="table table-hover u-table--v1 mb-0">
      <thead>
        <tr>
          <th>Interno</th>
          <th>Dominio</th>
          <th>Año</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Tipo</th>
          <th>Nro. chasis</th>
          <th>Nro. motor</th>
          <th>Cant. asientos</th>
          <th>Empresa</th>
          <th>Observaciones</th>
          <th>Acciones</th>
        </tr>
      </thead>
        <tbody>
          <!-- Ajax -->
        </tbody>
      </table>
    </div>
  </div>             
</section>

<!-- Modal -->
<div class="modal fade" id="modal_edit_vehiculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar vehiculo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <!-- Form alta de vehiculo -->
        <form id="form_edit_vehiculo" class="form_edit_vehiculo g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="POST" action="#">
          <!-- Input numero interno -->
          <div class="form-group row g-mb-10">
            <label class="col-sm-2 col-form-label g-mb-10" for="interno">Interno(*)</label>
            <input type="hidden" id="vehiculo_id" name="" value="">
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
                <?php foreach ($modelos as $m): ?>
                  <?php if (condition): ?>
                        
                  <?php endif ?>              
                <?php endforeach ?>
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
            <button type="submit" id="btn_save_vehiculo" class="btn btn-md u-btn-primary g-mr-10"> Grabar cambios </button>
            <button type="button" data-dismiss="modal" class="btn btn-md u-btn-red g-mr-10"> Cerrar </button>
          </div>
        </form>
        <!-- End form alta vehiculo -->
    </div>
  </div>
</div>


<!-- ##################################### Modal destroy vehiculo   ############################################################## -->
<div class="modal fade" id="modal_delete_vehiculo" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">¿ Esta seguro de eliminar este vehiculo ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="vehiculo_delete_id" name="vehiculo_delete_id" value="">
        <p id="vehiculo_dominio_delete"> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn u-btn-red" onclick="destroy()">Eliminar</button>
        <button type="button" class="btn u-btn-indigo" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- ############################################################################################################################# -->

<script type="text/javascript">
  let base_url = '<?php echo base_url()?>'
  let tabla_vehiculos
  let form_edit_vehiculo = $('#form_edit_vehiculo').validate({
                                rules: {
                                  'interno': {number: true}
                                }
                              })

  function print_option_select(select_id, type, id_seleccionado, attr = null, id = null)
  {
    if (type != 'empresa') {
      if (id !== null) {
        url = "<?php echo base_url('Vehiculos/get_attr/');?>"+type+"/"+attr+"/"+id
        } else {
          url = "<?php echo base_url('Vehiculos/get_attr/');?>"+type
      }
    } else {
      url = '<?php echo base_url("Empresas/get");?>'
    }

    $.ajax({
      url: url,
      type: 'GET',
      success: function(resp){
        var attr_vehiculo = $.parseJSON(resp)

          $('#'+select_id+'').find('option').remove().end().append('<option value="" disabled >Seleccione '+type+'</option>')
          $(attr_vehiculo).each(function(i, element){
            if (element.id == id_seleccionado) {
              $('#'+select_id+'').append("<option value="+element.id+" selected>"+element.nombre+"</option>");
            } else {
              $('#'+select_id+'').append("<option value="+element.id+">"+element.nombre+"</option>");
            }
          });
      },
      error: function(jqXHR, textStatus, errorThrown){
        $('#'+select_id+'').find('option').remove().end().append('<option value="" disabled selected >Seleccione '+type+'</option>');
        $('#'+select_id+'').append("<option>No se pudieron obtener los "+type+"</option>");
      }
    });
  }

  function edit_vehiculo(id)
  {
    $.ajax({
      url: base_url + 'Vehiculos/edit/' + id,
      type: 'GET',
      dataType: 'JSON',
      success: function(resp)
      {
        $('#form_edit_vehiculo #vehiculo_id').val(resp.id)
        $('#form_edit_vehiculo #interno').val(resp.interno)
        $('#form_edit_vehiculo #dominio').val(resp.dominio)
        $('#form_edit_vehiculo #anio').val(resp.anio)
        $('#form_edit_vehiculo #chasis').val(resp.n_chasis)
        $('#form_edit_vehiculo #motor').val(resp.n_motor)
        $('#form_edit_vehiculo #asientos').val(resp.cant_asientos)
        $('#form_edit_vehiculo #empresa').val(resp.empresa_id)
        $('#form_edit_vehiculo #observaciones').val(resp.observaciones)
        print_option_select('marca', 'marca', resp.marca_id)
        print_option_select('modelo','modelo', resp.modelo_id, 'marca_vehiculo_id', resp.marca_id)
        print_option_select('tipo', 'tipo', resp.tipo_id)
        print_option_select('empresa', 'empresa', resp.empresa_id)
        $('#modal_edit_vehiculo').modal('show')
      },
      error: function()
      {
        alert('error recuperando datos de vehiculo')
      }
    })
  }

  function agrupar_datos()
  {
    resp = {
      'vehiculo_id': $('#vehiculo_id').val(),
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
    $.ajax({
      url: '<?php echo base_url("Vehiculos/update")?>',
      type: 'POST',
      data: agrupar_datos(),
      success: function(resp)
      {
        if (resp === 'ok') {
          tabla_vehiculos.ajax.reload(null,false)
          $('#modal_edit_vehiculo').modal('hide')
          $('#modal_edit_vehiculo #btn_save_vehiculo').text('Grabar cambios')
          $('#modal_edit_vehiculo #btn_save_vehiculo').prop('disabled', false)
        } else {
          alert('error edit')
        }
      },
      error: function(jqXHR, textStatus, errorThrown)
      {
        alert('errors add:  jqXHR: '+ jqXHR + '  textStatus: '+ textStatus + '  errorThrown: '+errorThrown)
      }
    })
  }

  $('#form_edit_vehiculo').submit(function(e){
    e.preventDefault()
      $('#btn_save_vehiculo').text('Grabando...')
      $('#btn_save_vehiculo').prop('disabled', true)
     if (form_edit_vehiculo.valid()) {
      save()
     }
  })

// Llamo al modal de advertencia para eliminar el perfil
  function modal_delete(id)
  {
    $('#modal_delete_vehiculo #vehiculo_dominio_delete').html('<strong>Dominio: </strong>')
    $.ajax({
      url: "<?php echo base_url('Vehiculos/edit/');?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(resp)
      {
        $('#modal_delete_vehiculo #vehiculo_delete_id').val(resp.id);
        $('#modal_delete_vehiculo #vehiculo_dominio_delete').append(resp.dominio);
        $('#modal_delete_vehiculo').modal('show');
      },
      error: function()
      {
        alert('Error al obtener los datos');
      }
    });
  }
  // Baja logica del vehiculo
  function destroy()
  {
    let vehiculo_id = $('#vehiculo_delete_id').val();
    $.ajax({
      url: "<?php echo base_url('Vehiculos/destroy/vehiculos/');?>" + vehiculo_id,
      type: "POST",
      success: function(msg)
      {
        if (msg === 'ok') {
          tabla_vehiculos.ajax.reload(null,false);
          $('#modal_delete_vehiculo').modal('hide');
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
//   $('.editar_vehiculo').click(function(){
//     var vehiculo_id = $(this).data('id');
//     $.ajax({
//       type: 'POST',
//       url: base_url + '/Vehiculos/edit/' + vehiculo_id,

//       success: function(resp){
//         var data = $.parseJSON(resp);
//         $("#id").val(data.id);
//         $("#legajo").val(data.n_legajo);
//         $('#apellido').val(data.apellido);
//         $('#nombre').val(data.nombre);
//         $('#dni').val(data.dni);
//         $('#fecha_vencimiento_dni').val(data.fecha_vencimiento_dni);
//         $('#cuil').val(data.cuil);
//         $('#fecha_nacimiento').val(data.fecha_nacimiento);
//         $('#nacionalidad').val(data.nacionalidad);
//         $('#domicilio').val(data.domicilio);
//         $('#telefono').val(data.telefono);
//       },

//       error: function(jqXHR, textStatus, errorThrown){
//         alert('Error al querer recuperar datos de la persona');
//       }
//     });
// });


  // Recarga la tabla desde ajax
  // function reload_table()
  // {
  //   // table_pers.ajax.reload(null,false); //reload tabla personas datatable ajax
  // }

  // $('#submit_editar_persona').click(function(){

  //   $('#submit_editar_persona').text('guardando...');
  //   $('#submit_editar_persona').attr('disabled',true);
  //   var form_data = new FormData(this);

  //   $.ajax({
  //     url: base_url + 'Personas/update',
  //     type: 'POST',
  //     data: $('#form_editar_persona').serialize(),
  //     success: function(msg){
  //       if (msg == 'ok'){ //si llega que salió todo bien
  //           $('#modal_editar_persona').modal('hide');

  //           location.reload();
  //         }else{ //si llega que algo salió mal
  //           //inserto los errores en el div alert
  //           alert('Error al actualizar datos'); 
  //         }
  //       $('#submit_editar_persona-pers').text('Editar datos'); //change button text
  //       $('#submit_editar_persona-pers').attr('disabled',false); //set button enable 
  //     },
  //     error: function(jqXHR, textStatus, errorThrown){
  //       alert('error');
  //       $('#submit_editar_persona-pers').text('Editar datos'); //change button text
  //       $('#submit_editar_persona-pers').attr('disabled',false); //set button enable 
  //       alert('text: ' + textStatus + ' jqXHR: ' + jqXHR + ' errorThrown: ' + errorThrown);
  //     }
  //   });
  // });

  // $('#form_editar_persona').on('submit', function(e){
  //   e.preventDefault();
  //   $('#submit_editar_persona').text('guardando...');
  //   $('#submit_editar_persona').attr('disabled',true);
  //   $.ajax({
  //     url: base_url + 'Personas/update',
  //     data: new FormData(this),
  //     type: 'POST',
  //     contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
  //     processData: false,
  //     success: function(msg){
  //       if (msg == 'ok'){ //si llega que salió todo bien
  //           $('#modal_editar_persona').modal('hide');
  //           $('#modal-2').modal('show');
            
  //         }else{ //si llega que algo salió mal
  //           //inserto los errores en el div alert
  //           alert('Error al actualizar datos'); 
  //         }
  //       $('#submit_editar_persona-pers').text('Editar datos'); //change button text
  //       $('#submit_editar_persona-pers').attr('disabled',false); //set button enable 
  //     },
  //     error: function(jqXHR, textStatus, errorThrown){
  //       alert('error');
  //       $('#submit_editar_persona-pers').text('Editar datos'); //change button text
  //       $('#submit_editar_persona-pers').attr('disabled',false); //set button enable 
  //       alert('text: ' + textStatus + ' jqXHR: ' + jqXHR + ' errorThrown: ' + errorThrown);
  //     }
  //   });
  // });



  $(document).ready(function() {
    tabla_vehiculos =  $('#tabla_vehiculos').DataTable({
                            ajax: base_url + 'Vehiculos/list'
                        });
    
  } );


</script>