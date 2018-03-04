<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
		$this->load->model('Vehiculo_model');
	  $this->load->model('Marca_vehiculo_model');
	  $this->load->model('Modelo_vehiculo_model');
	  $this->load->model('Tipo_vehiculo_model');
	  date_default_timezone_set('America/Argentina/Buenos_Aires'); 
	}

	public function index()
	{
		$title['title'] = 'Vehiculos';
		$data['vehiculos'] = $this->Vehiculo_model->get();
		$this->load->view('includes/header',$title);
		$this->load->view('includes/nav');
		$this->load->view('sistema/vehiculos/index',$data);
		$this->load->view('includes/footer');
	}

	public function new()
	{
		$title['title'] = 'Alta de vehiculo';
		$this->load->view('includes/header',$title);
		$this->load->view('includes/nav');
		$this->load->view('sistema/vehiculos/new');
		$this->load->view('includes/footer');	
	}

	public function create()
	{
		
	}

	public function edit()
	{
		
	}

	public function update()
	{
		
	}

	public function destroy()
	{
		
	}


	/* ===================== MARCAS VEHICULOS =============================
	=======================================================================
	======================================================================= */

	public function get_marcas()
	{
		
	}

	public function create_marca()
	{
		
	}

	public function edit_marca()
	{
		
	}

	public function update_marca()
	{
		
	}

	public function destroy_marca()
	{
		
	}

	/* ===================== MODELOS VEHICULOS ============================
	=======================================================================
	======================================================================= */
	public function get_modelos()
	{
		
	}

	public function create_modelo()
	{
		
	}

	public function edit_modelo()
	{
		
	}

	public function update_modelo()
	{
		
	}

	public function destroy_modelo()
	{
		
	}


	/* ===================== TIPOS VEHICULOS ==============================
	=======================================================================
	======================================================================= */
	public function get_tipos()
	{
		
	}

	public function create_tipo()
	{
		
	}

	public function edit_tipo()
	{
		
	}

	public function update_tipo()
	{
		
	}

	public function destroy_tipo()
	{
		
	}

}
