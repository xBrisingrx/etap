<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atributos extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('Atributo_model');
	  date_default_timezone_set('America/Argentina/Buenos_Aires'); 
	}

	public function index($tipo)
	{
		$title['title'] = ($tipo == 1) ? 'Atributos de Personal' : 'Atributos de Vehiculos';
		$data['nombre_atributo'] = ($tipo == 1) ? 'Personal' : 'Vechículos';
		$data['tipo_atributo'] = $tipo;
		$data['atributos'] = $this->Atributo_model->get('tipo',$tipo);
		
		$this->load->view('includes/header',$title);
		$this->load->view('includes/nav');
		$this->load->view('sistema/atributos/index',$data);
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
		$atributo = array(
			'tipo' => $this->input->post('tipo'),
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion'),
			'dato_obligatorio' => $this->input->post('dato_obligatorio'),
			'tiene_vencimiento' => $this->input->post('tiene_vencimiento'),
			'tipo_vencimiento' => $this->input->post('tipo_vencimiento'),
			'periodo_vencimiento' => $this->input->post('dato_obligatorio'),
			'permite_pdf' => $this->input->post('permite_pdf'),
			'observaciones' => $this->input->post('observaciones'),
			'metodologia_renovacion' => $this->input->post('metodologia_renovacion'),
			'fecha_inicio_vigencia' => $this->input->post('fecha_inicio_vigencia'),
			'importe' => $this->input->post('importe'),
			'create_at' => date('Y-m-d H:i:s'),
			'update_at' => date('Y-m-d H:i:s'),
			'activo' => true
		);

		if ($this->Atributo_model->insert_entry($atributo)) {
			echo 'ok';
		} else {
			echo 'error';
		}
	}

	public function edit($id)
	{
		$perfil = $this->Atributo_model->get('id',$id);
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
		if ($this->Atributo_model->update_entry($id, $perfil)) {
			echo 'ok';
		} else {
			echo 'Error';
		}
	}

	public function destroy($id)
	{
		if ($this->Atributo_model->destroy($id)) {
			echo 'ok';
		} else {
			echo 'Error';
		}
	}


// Obtengo los datos de mi tabla y los devuelvo en formato json para insertar en datatables
	public function ajax_get($tipo)
	{
		$atributos = $this->Atributo_model->get('tipo',$tipo);
		$data = array();

		foreach ($atributos as $a) {

			$row = array();
			$row[] = $a->nombre;
			$row[] = $a->descripcion;
			$row[] = ($a->dato_obligatorio) ? 'Si' : 'No';
			$row[] = $a->categoria_id;
			$row[] = ($a->tiene_vencimiento) ? 'Si' : 'No';
			$row[] = 'tipo vencimiento';
			$row[] = 'periodo vencimiento';
			$row[] = 'permite mod pro venc';
			$row[] = 'permite anexo';
			$row[] = $a->observaciones;
			$row[] = $a->metodologia_renovacion;
			$row[] = $a->fecha_inicio_vigencia;
			$row[] = $a->importe;
			$row[] = $a->presenta_resumen_mensual;
			$row[] = (!$a->activo) ? $a->update_at : ' ';
			 if ($a->activo) {
				$row[] = '<button class="btn u-btn-primary g-mr-10 g-mb-15" title="Editar" onclick="edit_profile('."'".$a->id."'".')" ><i class="fa fa-edit"></i></button> <button class="btn u-btn-red g-mr-10 g-mb-15" title="Eliminar" onclick="delete_attribute('."'".$a->id."'".')" ><i class="fa fa-trash-o"></i></button>';
			} else {
				$row[] = '<button class="btn u-btn-primary g-mr-10 g-mb-15" title="Editar" onclick="edit_profile('."'".$a->id."'".')" disabled ><i class="fa fa-edit"></i></button> <button class="btn u-btn-aqua g-mr-10 g-mb-15" title="Reactivar" onclick="reactivate_attribute('."'".$a->id."'".')" ><i class="fa fa-retweet"></i></button>';
			};


			$data[] = $row;
		}

	  $output = array("data" => $data);
		echo json_encode($output);
	}

}