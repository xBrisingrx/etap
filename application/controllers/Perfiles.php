<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfiles extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('Perfil_model');
	  $this->load->model('Perfiles_Atributos_model');
	  date_default_timezone_set('America/Argentina/Buenos_Aires'); 
	}

	public function index($tipo)
	{
		$title['title'] = ($tipo == 1) ? 'Perfiles de Personal' : 'Perfiles de vehiculos';
		$data['nombre_perfil'] = ($tipo == 1) ? 'Personal' : 'Vechículos';
		$data['tipo_perfil'] = $tipo;
		$data['perfiles'] = $this->Perfil_model->get('tipo',$tipo);
		$data['perfiles_atributos'] = $this->Perfiles_Atributos_model->get();
		$this->load->view('includes/header',$title);
		$this->load->view('includes/nav');
		$this->load->view('sistema/perfiles/index',$data);
		$this->load->view('includes/footer');
	
	}
	
	public function new( $error = null )
	{
		$title['title'] = 'Alta de perfil';
		$data['empresas'] = $this->Empresa_model->get();
		$data['error'] = $error;
		$this->load->view('includes/header',$title);
		$this->load->view('includes/nav');
		$this->load->view('sistema/personas/new',$data);
		$this->load->view('includes/footer');	
	}

	public function create()
	{
		$perfil = array(
			'tipo' => $this->input->post('tipo'),
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion'),
			'fecha_inicio_vigencia' => $this->input->post('fecha_inicio_vigencia'),
			'create_at' => date('Y-m-d H:i:s'),
			'update_at' => date('Y-m-d H:i:s'),
			'activo' => true
		);

		if ($this->Perfil_model->insert_entry($perfil)) {
			echo 'ok';
		} else {
			echo 'error';
		}
	}

	public function edit($id)
	{
		$perfil = $this->Perfil_model->get('id',$id);
		echo json_encode($perfil);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$perfil = array(
			'tipo' => $this->input->post('tipo'),
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion'),
			'fecha_inicio_vigencia' => $this->input->post('fecha_inicio_vigencia'),
			'update_at' => date('Y-m-d H:i:s')
		);
		if ($this->Perfil_model->update_entry($id, $perfil)) {
			echo 'ok';
		} else {
			echo 'Error';
		}
	}

	public function destroy($id)
	{
		if ($this->Perfil_model->destroy($id)) {
			echo 'ok';
		} else {
			echo 'Error';
		}
	}

	public function assign_attribute()
	{

		$profile_attribute = array(
			'tipo' => $this->input->post('tipo'),
			'perfil_id' => $this->input->post('profile_id'),
			'atributo_id' => $this->input->post('attribute_id'),
			'fecha_inicio_vigencia' => $this->input->post('fecha_inicio_vigencia'),
			'create_at' => date('Y-m-d H:i:s'),
			'update_at' => date('Y-m-d H:i:s'),
			'activo' => TRUE
		);

		if ($this->Perfiles_Atributos_model->insert_entry($profile_attribute)) {
			echo 'ok';
		} else {
			echo 'error';
		}
	}

	public function edit_assign_attribute($id)
	{
		$profile_attribute = $this->Perfiles_Atributos_model->get('id', $id);
		echo json_encode($profile_attribute);
	}

	public function update_assign_attribute()
	{
		$id = $this->input->post('id');
		$profile_attribute = array(
			'perfil_id' => $this->input->post('profile_id'),
			'atributo_id' => $this->input->post('attribute_id'),
			'fecha_inicio_vigencia' => $this->input->post('fecha_inicio_vigencia'),
			'update_at' => date('Y-m-d H:i:s')
		);
		if ($this->Perfiles_Atributos_model->update_entry($id, $profile_attribute)) {
			echo 'ok';
		} else {
			echo 'Errores al salvar cambios';
		}
	}

	public function destroy_assign_attribute($id)
	{
		if ($this->Perfiles_Atributos_model->destroy($id)) {
			echo 'ok';
		} else {
			echo 'Error';
		}
	}



// Obtengo los datos de mi tabla y los devuelvo en formato json para insertar en datatables
	public function ajax_list_perfiles($tipo)
	{
		$perfiles = $this->Perfil_model->get('tipo',$tipo);
		$data = array();

		foreach ($perfiles as $p) {

			if ($p->activo) {
				$botones = '<button class="btn u-btn-primary g-mr-10 g-mb-15" title="Editar" onclick="edit_profile('."'".$p->id."'".')" ><i class="fa fa-edit"></i></button> <button class="btn u-btn-red g-mr-10 g-mb-15" title="Eliminar" onclick="delete_profile('."'".$p->id."'".')" ><i class="fa fa-trash-o"></i></button>';
			} else {
				$botones = '<button class="btn u-btn-primary g-mr-10 g-mb-15" title="Editar" onclick="edit_profile('."'".$p->id."'".')" disabled ><i class="fa fa-edit"></i></button> <button class="btn u-btn-aqua g-mr-10 g-mb-15" title="Reactivar" onclick="reactivate_profile('."'".$p->id."'".')" ><i class="fa fa-retweet"></i></button>';
			}

			$row = array(
				'nombre' => $p->nombre,
				'descripcion' => $p->descripcion,
				'fecha_inicio_vigencia' => date('d-m-Y', strtotime($p->fecha_inicio_vigencia)),
				'fecha_baja' => (!$p->activo) ? date('d-m-Y', strtotime($p->update_at)) : '',
				'acciones' => $botones
			);

			$data[] = $row;
		}

	  $output = array("data" => $data);
		echo json_encode($output);
	}

	public function ajax_list_perfiles_atributos($tipo)
	{
		$perfiles_atributos = $this->Perfiles_Atributos_model->get('tipo',$tipo);
		$data = array();

		foreach ($perfiles_atributos as $p) {
			$row = array();
			$row[] = $p->nombre_perfil;
			$row[] = $p->nombre_atributo;
			$row[] = date('d-m-Y', strtotime($p->fecha_inicio_vigencia));
			$row[] = ($p->activo) ? ' ' : date('d-m-Y', strtotime($p->update_at));
			$row[] = '<button class="btn u-btn-primary g-mr-10 g-mb-15" title="Editar" onclick="modal_edit_attribute('."'".$p->id."'".')" ><i class="fa fa-edit"></i></button> <button class="btn u-btn-red g-mr-10 g-mb-15" title="Eliminar" onclick="delete_attribute_profile('."'".$p->id."'".')" ><i class="fa fa-trash-o"></i></button>';
			$data[] = $row;
		}
		$output = array("data" => $data);
		echo json_encode($output);
	}

	public function ajax_get_profiles($tipo)
	{
		$profiles = $this->Perfil_model->get('tipo',$tipo);
		echo ( json_encode($profiles) );
	}

}