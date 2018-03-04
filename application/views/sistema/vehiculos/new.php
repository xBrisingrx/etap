<section class="container g-py-10">
	<h1> Alta de vehiculo </h1>

	<!-- Form alta de vehiculo -->
	<form id="form_alta_vehiculo" class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="POST" action="<?php echo base_url('Vehiculos/create');?>">
	<!-- Legajo Input -->
	<div class="form-group row g-mb-10">
	  <label class="col-sm-2 col-form-label g-mb-10" for="legajo">Nro. Legajo(*)</label>
	  <div class="col-sm-9">
	    <input id="legajo" name="legajo" class="form-control u-form-control rounded-0" type="text" placeholder="Ingrese legajo" >
	  </div>
	</div>
	<!-- End Legajo Input -->

  <!-- Input numero interno -->
  <div class="form-group row g-mb-10">
    <label class="col-sm-2 col-form-label g-mb-10" for="hf-email">Interno(*)</label>

    <div class="col-sm-9">
      <input id="interno" class="form-control u-form-control rounded-0" placeholder="Ingrese número de interno" type="text">
    </div>
  </div>
  <!-- End Input numero interno -->

	</form>
	<!-- End form alta vehiculo -->
</section>