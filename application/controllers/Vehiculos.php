<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
		$this->load->model('Vehiculo_model');
		$this->load->model('Empresa_model');
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
		$data['empresas'] = $this->Empresa_model->get('activo', true);
		$this->load->view('includes/header',$title);
		$this->load->view('includes/nav');
		$this->load->view('sistema/vehiculos/new', $data);
		$this->load->view('includes/footer');	
	}

	public function create()
	{
		$vehiculo = array(
					'interno' => $this->input->post('interno'),
					'dominio' => $this->input->post('dominio'),
					'anio' => $this->input->post('anio'),
					'marca_id' => $this->input->post('marca_id'),
					'modelo_id' => $this->input->post('modelo_id'),
					'tipo_id' => $this->input->post('tipo_id'),
					'n_chasis' => $this->input->post('chasis'),
					'n_motor' => $this->input->post('motor'),
					'cant_asientos' => $this->input->post('asientos'),
					'empresa_id' => $this->input->post('empresa_id'),
					'observaciones' => $this->input->post('observaciones'),
					'update_at' => date('Y-m-d H:i:s'),
					'create_at' => date('Y-m-d H:i:s'),
					'user_create_id' => $this->session->userdata('id'),
					'user_last_update_id' => $this->session->userdata('id'),
					'activo' => true
		);

		if ($this->Vehiculo_model->insert_entry('vehiculos', $vehiculo)) {
			echo 'ok';
		} else {
			echo 'error';
		}
	}

	public function edit($id)
	{
		$vehiculo = $this->Vehiculo_model->get('id',$id);
		$json = json_encode($vehiculo);
		echo $json;
	}

	public function update()
	{
		$vehiculo_id = $this->input->post('vehiculo_id');

		$vehiculo = array(
					'interno' => $this->input->post('interno'),
					'dominio' => $this->input->post('dominio'),
					'anio' => $this->input->post('anio'),
					'marca_id' => $this->input->post('marca_id'),
					'modelo_id' => $this->input->post('modelo_id'),
					'tipo_id' => $this->input->post('tipo_id'),
					'n_chasis' => $this->input->post('chasis'),
					'n_motor' => $this->input->post('motor'),
					'cant_asientos' => $this->input->post('asientos'),
					'empresa_id' => $this->input->post('empresa_id'),
					'observaciones' => $this->input->post('observaciones'),
					'update_at' => date('Y-m-d H:i:s'),
					'user_last_update_id' => $this->session->userdata('id'),
		);

		if ($this->Vehiculo_model->update_entry('vehiculos', $vehiculo_id, $vehiculo)) {
			echo 'ok';
		} else {
			echo 'Error al actualizar data';
		}
	}

	public function destroy($table, $id)
	{
		if ($this->Vehiculo_model->detroy($table, $id)) {
			echo 'ok';
		} else {
			echo 'Ocurrio un error al eliminar el registro';
		}
	}

	public function list()
	{
		$vehiculos = $this->Vehiculo_model->get();
		$data = array();

		foreach ($vehiculos as $v) {
			$row = array();
			$row[] = $v->interno;
			$row[] = $v->dominio;
			$row[] = $v->anio;
			$row[] = $v->marca;
			$row[] = $v->modelo;
			$row[] = $v->tipo;
			$row[] = $v->n_chasis;
			$row[] = $v->n_motor;
			$row[] = $v->cant_asientos;
			$row[] = $v->empresa;
			$row[] = $v->observaciones;
			$row[] = '<button class="btn u-btn-primary g-mr-10 g-mb-15" title="Editar" onclick="edit_vehiculo('."'".$v->id."'".')" >
								<i class="fa fa-edit"></i></button> 
								<button class="btn u-btn-red g-mr-10 g-mb-15" title="Eliminar" 
								onclick="delete_vehiculo('."'".$v->id."'".')" ><i class="fa fa-trash-o"></i></button>';

			$data[] = $row;
		}
		$output = array("data" => $data);
		echo json_encode($output);
	}

	/* ===================== Operaciones de attr ==========================
	=======================================================================
	======================================================================= */
	public function _validate_attr($table)
	{ if ($table != 'modelos_vehiculos') {
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|is_unique['.$table.'.nombre]|trim');
	} else {
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|callback_modelo_vehiculo_unico|trim');
		$this->form_validation->set_rules('marca_id', 'Marca', 'required|callback_modelo_vehiculo_unico|trim');
	}
		

		$this->form_validation->set_message('is_unique', 'Este nombre ya esta en uso');
		$this->form_validation->set_message('required', 'Campo %s es obligatorio');
	}

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
			$row[] = '<button class="btn u-btn-primary g-mr-10 g-mb-15" title="Editar" onclick="edit_attr_vehiculo('."'".$q->id."'".')" ><i class="fa fa-edit"></i></button> <button class="btn u-btn-red g-mr-10 g-mb-15" title="Eliminar" onclick="modal_delete_attr_vehiculo
			('."'".$table."','".$q->id."'".')" ><i class="fa fa-trash-o"></i></button>';
			$data[] = $row;
		}
		$output = array("data" => $data);
		echo json_encode($output);
	}

	public function create_attr_vehiculo($table)
	{
		$this->_validate_attr($table.'s_vehiculos');

		 if ($this->form_validation->run() == FALSE) { // Validamos. Si algo salio mal..
            echo validation_errors(); //devolvemos los errores
        } else {
					if ($table == 'modelo') {
						$data = array(
										'nombre' => $this->input->post('nombre'),
										'marca_vehiculo_id' => $this->input->post('marca_id'),
										'create_at' => date('Y-m-d H:i:s'),
										'update_at' => date('Y-m-d H:i:s'),
										'user_create_id' => $this->session->userdata('id'),
										'activo' => true
						);
					} else {
						$data = array(
										'nombre' => $this->input->post('nombre'),
										'create_at' => date('Y-m-d H:i:s'),
										'update_at' => date('Y-m-d H:i:s'),
										'user_create_id' => $this->session->userdata('id'),
										'activo' => true
						);
					}
					if ($this->Vehiculo_model->insert_entry($table.'s_vehiculos', $data)) {
						echo 'ok';
					} else {
						echo 'Errores al registrar attr vehiculo';
					}
        }
	}

	public function destroy_marca($id)
	{
		if ($this->Vehiculo_model->destroy_marca($id)) {
			echo 'ok';
		} else {
			echo 'Error';
		}
	}

	public function modelo_vehiculo_unico()
	{
		// Verifico que el valor de un campo sea unico
		$name = $this->input->post('nombre');
		$marca_id =  $this->input->post('marca_id');
		// Si el modelo ingresado no se encuentra en la BD
		if ($this->Vehiculo_model->modelo_vehiculo_unico($marca_id, $name)) {
			return true;
		} else {
			$this->form_validation->set_message('modelo_vehiculo_unico', 'Este %s pertenece a otro vehiculo');
			return false;
		}
	}

}
