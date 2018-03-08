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

	/* ===================== Operaciones de attr ==========================
	=======================================================================
	======================================================================= */
	public function get_attr($table, $attr = null,$value = null)
	{
		if ( $value != null ) {
			$data = $this->Vehiculo_model->get_attr($table.'s_vehiculos', $attr, $value);
		} else {
			$data = $this->Vehiculo_model->get_attr($table.'s_vehiculos');
		}
		echo json_encode($data);
	}

	public function list_attr($table)
	{
		$query = $this->Vehiculo_model->get_attr($table.'s_vehiculos');
		$data = array();

		foreach ($query as $q) {
			$row = array();
			$row[] = $q->nombre;
			if ($table == 'modelo') {
				$row[] = $q->nombre_marca;
			}
			$row[] = '<button class="btn u-btn-primary g-mr-10 g-mb-15" title="Editar" onclick="edit_attr_vehiculo('."'".$q->id."'".')" ><i class="fa fa-edit"></i></button> <button class="btn u-btn-red g-mr-10 g-mb-15" title="Eliminar" onclick="delete_attr_vehiculo('."'".$q->id."'".')" ><i class="fa fa-trash-o"></i></button>';
			$data[] = $row;
		}
		$output = array("data" => $data);
		echo json_encode($output);
	}

	public function create_attr_vehiculo($table)
	{
		if ($table == 'modelo') {
			$data = array(
							'nombre' => $this->input->post('nombre'),
							'marca_vehiculo_id' => $this->input->post('marca_id')
			);
		} else {
			$data = array(
							'nombre' => $this->input->post('nombre')
			);
		}
		if ($this->Vehiculo_model->insert_entry($table.'s_vehiculos', $data)) {
			echo 'ok';
		} else {
			echo 'Errores al registrar attr vehiculo';
		}
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
