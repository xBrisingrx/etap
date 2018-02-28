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
  <h1>Personas registradas en el sistema</h1>
    <a href="<?php echo base_url('index.php/Personas/new');?>" class="btn btn-success justify-content-end">Nueva persona</a>

  <div class="card g-brd-darkpurple rounded-0 g-mb-30">
    <h3 class="card-header g-bg-darkpurple g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">
      <i class="fa fa-gear g-mr-5"></i>
      Personas registradas
    </h3>

    <div class="table-responsive">
      <table id="tabla_personas" class="table table-hover u-table--v1 mb-0">
      <thead>
        <tr>
          <th>Nro. Legajo</th>
          <th>Apellido</th>
          <th>Nombre</th>
          <th>DNI</th>
          <th>PDF DNI</th>
          <th>Vence DNI</th>
          <th>Fecha vencimiento</th>
          <th>Cuil</th>
          <th>PDF CUIL</th>
          <th>Fecha nacimiento</th>
          <th>PDF Nacimiento</th>
          <th>Nacionalidad</th>
          <th>Domicilio</th>
          <th>Telefono</th>
          <th>Empresa</th>
          <th>Acciones</th>
        </tr>
      </thead>
        <tbody>
          <?php foreach ($personas as $key => $p): ?>
            <tr>
              <td><?php echo $p->n_legajo;?></td>
              <td><?php echo $p->apellido;?></td>
              <td><?php echo $p->nombre;?></td>
              <td><?php echo $p->dni;?></td>
              <td>
                <a href="<?php echo base_url('assets/uploads/').$p->dni_pdf_path;?>" 
                  target="_blank" class="text-center">
                  <i class="fa fa-file-pdf-o fa-2x"></i>
                </a>
              </td>
              <td><?php echo $p->dni_tiene_vencimiento;?></td>
              <td><?php echo $p->fecha_vencimiento_dni;?></td>
              <td><?php echo $p->cuil;?></td>
              <td>
                <a href="<?php echo base_url('assets/uploads/').$p->cuil_pdf_path;?>" 
                  target="_blank" class="text-center">
                  <i class="fa fa-file-pdf-o fa-2x"></i>
                </a>
              </td>
              <td><?php echo $p->fecha_nacimiento;?></td>
              <td>
                <a href="<?php echo base_url('assets/uploads/').$p->fecha_nacimiento_pdf_path;?>" 
                  target="_blank" class="text-center">
                  <i class="fa fa-file-pdf-o fa-2x"></i>
                </a>
              </td>
              <td><?php echo $p->nacionalidad;?></td>
              <td><?php echo $p->domicilio;?></td>
              <td><?php echo $p->telefono;?></td>
              <td><?php echo $p->empresa_id;?></td>
              <td>
                <a href="#modal_editar_persona" 
                   type="button"
                   class="editar_persona btn btn-xs u-btn-outline-blue text-center"
                   data-id="<?php echo $p->id;?>"
                   data-toggle="modal"
                   data-target="#modal_editar_persona" 
                   title="Editar">
                  <i class="fa fa-edit fa-2x"></i>
                </a>
                <a href="<?php echo base_url('Personas/destroy/').$p->id;?>" 
                   class="btn btn-xs u-btn-outline-red text-center" 
                   data-toggle="tooltip" 
                   title="Eliminar">
                  <i class="fa fa-trash-o fa-2x"></i>
                </a>
              </td>
            </tr>
          <?php endforeach ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>             
</section>

<!-- Modal -->
<div class="modal fade" id="modal_editar_persona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <?php echo form_open_multipart('#', array( 'id'=>'form_editar_persona','class'=>'g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30'));?>
        <!-- ID de la persona -->
        <input type="hidden" id="id" name="id" value="">

        <!-- Legajo Input -->
        <div class="form-group row g-mb-10">
          <label class="col-sm-2 col-form-label g-mb-10" for="legajo">Nro. Legajo(*)</label>
          <div class="col-sm-9">
            <input id="legajo" name="legajo" class="form-control u-form-control rounded-0" type="text" placeholder="Ingrese legajo" >
          </div>
        </div>
        <!-- End Legajo Input -->
        <!-- Apellido Input -->
        <div class="form-group row g-mb-10">
          <label class="col-sm-2 col-form-label g-mb-10" for="legajo">Apellido</label>
          <div class="col-sm-9">
            <input id="apellido" name="apellido" class="form-control u-form-control rounded-0" type="text" placeholder="Ingrese apellido" >
          </div>
        </div>
        <!-- End Apellido Input -->
        <!-- Nombre Input -->
        <div class="form-group row g-mb-10">
          <label class="col-sm-2 col-form-label g-mb-10" for="legajo">Nombre</label>
          <div class="col-sm-9">
            <input id="nombre" name="nombre" class="form-control u-form-control rounded-0" type="text" placeholder="Ingrese nombre" >
          </div>
        </div>
        <!-- End Nombre Input -->
        <!-- DNI Input -->
        <div class="form-group row g-mb-10">
          <label class="col-sm-2 col-form-label g-mb-10" for="legajo">DNI</label>
          <div class="col-sm-3">
            <input id="dni" name="dni" class="form-control u-form-control rounded-0" type="text" placeholder="Ingrese DNI" >
          </div>
        </div>
        <div class="form-group row g-mb-10">
          <label class="form-check-inline u-check g-pl-25">
            <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
            <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
              <i class="fa" data-check-icon="&#xf00c"></i>
            </div>
            Tiene vencimiento
          </label>
        </div>
        <div class="form-group row g-mb-10">
          <label for="fecha_vencimiento_dni" class="col-4 col-form-label">Fecha vencimiento</label>
          <div class="col-5">
            <input class="form-control rounded-0 form-control-md" type="date" id="fecha_vencimiento_dni">
          </div>
        </div>
          <div class="form-group mb-0 offset-md-2">
            <label class="u-file-attach-v2 g-color-gray-dark-v5 mb-0">
              <input id="pdf_dni" name="pdf_dni" type="file">
              <i class="icon-cloud-upload g-font-size-16 g-pos-rel g-top-2 g-mr-5"></i>
              <span class="js-value">Anexar PDF del DNI</span>
            </label>
          </div>

        <!-- End DNI Input -->

        <!-- CUIL Input -->
        <div class="form-group row g-mb-10">
          <label class="col-sm-2 col-form-label g-mb-10" for="legajo">CUIL (*)</label>
          <div class="col-sm-3">
            <input id="cuil" name="cuil" class="form-control u-form-control rounded-0" type="text" placeholder="XX-XXXXXXXXX-X" data-mask="99-999999999-9" >
          </div>

          <!-- PDF CUIL -->
            <label class="u-file-attach-v2 g-color-gray-dark-v5 mb-0">
              <input id="pdf_cuil" name="pdf_cuil" type="file">
              <i class="icon-cloud-upload g-font-size-16 g-pos-rel g-top-2 g-mr-5"></i>
              <span class="js-value">Anexar PDF del CUIL</span>
            </label>
        </div>
        <!-- End CUIL Input -->

        <!-- Fecha nacimiento -->
        <div class="form-group row g-mb-10">
          <label class="col-sm-2 col-form-label g-mb-10">Fecha nacimiento (*)</label>
          <div class="col-sm-3">
            <input id="fecha_nacimiento" name="fecha_nacimiento" class="form-control form-control-md" type="date" value="">
          </div>

          <!-- PDF fecha nacimiento -->
            <label class="u-file-attach-v2 g-color-gray-dark-v5 mb-0">
              <input id="pdf_fecha_nacimiento" name="pdf_fecha_nacimiento" type="file">
              <i class="icon-cloud-upload g-font-size-16 g-pos-rel g-top-2 g-mr-5"></i>
              <span class="js-value">Anexar PDF del fecha nacimiento</span>
            </label>
        </div>
        <!-- End Fecha nacimiento -->
        <!-- Nacionalidad Input -->
        <div class="form-group row g-mb-10">
          <label class="col-sm-2 col-form-label g-mb-10" for="legajo">Nacionalidad (*)</label>
          <div class="col-sm-9">
            <input id="nacionalidad" name="nacionalidad" class="form-control u-form-control rounded-0" type="text" placeholder="Ingrese nacionalidad" >
          </div>
        </div>
        <!-- End Nacionalidad Input -->
        <!-- Domicilio Input -->
        <div class="form-group row g-mb-10">
          <label class="col-sm-2 col-form-label g-mb-10" for="legajo">Domicilio (*)</label>
          <div class="col-sm-9">
            <input id="domicilio" name="domicilio" class="form-control u-form-control rounded-0" type="text" placeholder="Ingrese domicilio" >
          </div>
        </div>
        <!-- End Domicilio Input -->
        <!-- Telefono Input -->
        <div class="form-group row g-mb-10">
          <label class="col-sm-2 col-form-label g-mb-10" for="legajo">Teléfono (*)</label>
          <div class="col-sm-9">
            <input id="telefono" name="telefono" class="form-control u-form-control rounded-0" type="text" placeholder="Ingrese teléfono" >
          </div>
        </div>
        <!-- End Telefono Input -->
        <!-- Empresa input -->
        <div class="form-group row g-mb-10">
          <label class="col-sm-2 col-form-label g-mb-10">Pertenece a empresa(*)</label>
          <select id="empresa_id" name="empresa_id" class="form-control form-control-md form-control-lg rounded-0 g-mb-10 col-sm-6">
            <option>Seleccione empresa</option>
            <?php foreach ($empresas as $e): ?>
              <option value="<?php echo $e->id;?>"><?php echo $e->nombre;?></option>
            <?php endforeach ?>
          </select>
        </div>
        <!-- End Empresa input -->

        <button id="submit_editar_persona" type="submit" class="btn btn-primary g-mr-10 g-mb-15">Editar datos</button>
        <button type="button" class="btn btn-danger g-mr-10 g-mb-15" data-dismiss="modal">Close</button>
        </form>
    </div>
  </div>
</div>


<div id="modal-2" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Datos actualizados con exito</h5>
      </div>
      <div class="modal-footer">
        <button id="myInput" type="button" class="btn btn-primary">Cerrar</button>
      </div>
    </div>
  </div>
</div>




<script type="text/javascript">
  var base_url = '<?php echo base_url();?>';
  $(document).ready(function() {
    $('#tabla_personas').DataTable();
  } );

  $('.editar_persona').click(function(){
    var id_persona = $(this).data('id');
    $.ajax({
      type: 'POST',
      url: base_url + '/Personas/edit/' + id_persona,

      success: function(resp){
        var data = $.parseJSON(resp);
        $("#id").val(id_persona);
        $("#legajo").val(data.n_legajo);
        $('#apellido').val(data.apellido);
        $('#nombre').val(data.nombre);
        $('#dni').val(data.dni);
        $('#fecha_vencimiento_dni').val(data.fecha_vencimiento_dni);
        $('#cuil').val(data.cuil);
        $('#fecha_nacimiento').val(data.fecha_nacimiento);
        $('#nacionalidad').val(data.nacionalidad);
        $('#domicilio').val(data.domicilio);
        $('#telefono').val(data.telefono);
      },

      error: function(jqXHR, textStatus, errorThrown){
        alert('Error al querer recuperar datos de la persona');
      }
    });
});


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

  $('#form_editar_persona').on('submit', function(e){
    e.preventDefault();
    $('#submit_editar_persona').text('guardando...');
    $('#submit_editar_persona').attr('disabled',true);
    $.ajax({
      url: base_url + 'Personas/update',
      data: new FormData(this),
      type: 'POST',
      contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
      processData: false,
      success: function(msg){
        if (msg == 'ok'){ //si llega que salió todo bien
            $('#modal_editar_persona').modal('hide');
            $('#modal-2').modal('show');
            
          }else{ //si llega que algo salió mal
            //inserto los errores en el div alert
            alert('Error al actualizar datos'); 
          }
        $('#submit_editar_persona-pers').text('Editar datos'); //change button text
        $('#submit_editar_persona-pers').attr('disabled',false); //set button enable 
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert('error');
        $('#submit_editar_persona-pers').text('Editar datos'); //change button text
        $('#submit_editar_persona-pers').attr('disabled',false); //set button enable 
        alert('text: ' + textStatus + ' jqXHR: ' + jqXHR + ' errorThrown: ' + errorThrown);
      }
    });
  });

  $('#myInput').on('click', function(){
    window.location.href = "<?php echo base_url('Personas');?>";
  });


</script>