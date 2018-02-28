<section class="container g-py-10">
	<h1>Alta de persona</h1>
	<?php echo $errors['error'];?>
	<?php echo form_open_multipart('Personas/create', array( 'id'=>'form_persona','class'=>'g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30'));?>
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

      <label class="form-check-inline u-check g-pl-25">
        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
        <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
          <i class="fa" data-check-icon="&#xf00c"></i>
        </div>
        Tiene vencimiento
      </label>

      <label for="fecha_vencimiento_dni" class="col-2 col-form-label">Fecha vencimiento</label>
      <div class="col-3">
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
	    <input id="fecha_nacimiento" name="fecha_nacimiento" class="form-control form-control-md " type="date" >
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

	<button type="submit" class="btn btn-primary g-mr-10 g-mb-15">Grabar persona</button>
	<a href="<?php echo base_url('Personas');?>" class="btn btn-danger g-mr-10 g-mb-15">Cancelar</a>
	</form>
</section>

<script type="text/javascript">
 $(document).ready(function(){
    $('#form_persona').validate({

      rules: {
        'nombre': { lettersonly: true, minlength: 3 },
        'apellido': { lettersonly: true,  minlength: 3},
        'nacionalidad': { lettersonly: true, minlength: 3 },
        'fecha_vencimiento_dni': {
          // Si esta check el vencimiento dni es requerido ingresar la fecha
          required: function (element){
            return $('#check_vencimiento_dni').is(':checked');
          }
        },
        'dni': {
              number: true, 
              minlength: 7, 
              maxlength: 9,
              remote: {
              	url: 'dni_unico',
              	type: 'post',
              	data: $('#dni').val()
              }
            },
        'cuil': {number: true, minlength: 10, maxlength: 12},
        'telefono': {number: true, minlength: 5},
        'pdf_dni': {
        	extension: "pdf"
        },
        'pdf_cuil': {
        	extension: "pdf"
        },
        'pdf_fecha_nacimiento': {
        	extension: "pdf"
        }
      },
      messages: {
        'dni': {
          remote: 'El DNI pertenece a otra persona'
        },
        'cuil': {
          remote: 'El CUIL pertenece a otra persona'
        },
        'pdf_dni': {
        	extension: 'Este documento no es un PDF'
        },
        'pdf_cuil': {
        	extension: 'Este documento no es un PDF'
        },
        'pdf_fecha_nacimiento': {
        	extension: 'Este documento no es un PDF'
        }
      }
    });
});
</script>
