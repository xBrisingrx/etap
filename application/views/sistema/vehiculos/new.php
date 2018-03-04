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
		    <option selected="">Choose.....................</option>
		    <option value="1">One</option>
		    <option value="2">Two</option>
		    <option value="3">Three</option>
		  </select>
		  <button class="btn btn-md u-btn-darkgray g-mr-10"> Editar marcas </button>
	  </div>
	  <!-- End Select marca vehiculo -->

	  <!-- Select modelo vehiculo -->
	  <div class="form-group row g-mb-10">
		  <label class="col-sm-2 col-form-label g-mb-10" for="modelo">Modelo(*)</label>
		  <select class="custom-select sm-9" id="modelo">
		    <option selected="">Choose.....................</option>
		    <option value="1">One</option>
		    <option value="2">Two</option>
		    <option value="3">Three</option>
		  </select>
		  <button class="btn btn-md u-btn-darkgray g-mr-10"> Editar modelos </button>
	  </div>
	  <!-- End Select modelo vehiculo -->

	  <!-- Select tipo vehiculo -->
	  <div class="form-group row g-mb-10">
		  <label class="col-sm-2 col-form-label g-mb-10" for="tipo">Tipo(*)</label>
		  <select class="custom-select sm-9" id="tipo">
		    <option selected="">Choose.....................</option>
		    <option value="1">One</option>
		    <option value="2">Two</option>
		    <option value="3">Three</option>
		  </select>
		  <button class="btn btn-md u-btn-darkgray g-mr-10"> Editar tipos </button>
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