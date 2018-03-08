<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('Empresa_model');
	  $this->load->model('Persona_model');
	  date_default_timezone_set('America/Argentina/Buenos_Aires'); 
	}

	public function index()
	{
		$title['title'] = 'Personas';
		$data['personas'] = $this->Persona_model->get();
		$this->load->view('includes/header',$title);
		$this->load->view('includes/nav');
		$this->load->view('sistema/personas/index',$data);
		$this->load->view('includes/footer');
	
	}
	public function new( $error = null )
	{
		$title['title'] = 'Alta de persona';
		$data['empresas'] = $this->Empresa_model->get();
		$data['error'] = $error;
		$this->load->view('includes/header',$title);
		$this->load->view('includes/nav');
		$this->load->view('sistema/personas/new',$data);
		$this->load->view('includes/footer');	
	}

	public function create()
	{
		$this->load->library('upload');
		// Rules
		// $this->form_validation->set_rules('legajo', 'Legajo', 'is_unique[personas.n_legajo]');
		 $this->form_validation->set_rules('nombre', 'Nombre', 'min_length[3]');
		// $this->form_validation->set_rules('apellido', 'Apellido', 'required');
		// $this->form_validation->set_rules('dni', 'DNI', 'is_unique[personas.dni]');
		// $this->form_validation->set_rules('cuit', 'CUIT', 'is_unique[clientes.cuit]');
		// $this->form_validation->set_rules('fecha_nacimiento', 'Fecha de nacimiento', 'required');
		// $this->form_validation->set_rules('nacionalidad', 'Nacionalidad', 'required');
		// $this->form_validation->set_rules('domicilio', 'Domicilio', 'required');
		// $this->form_validation->set_rules('telefono', 'Telefono', 'required');

		// Valores seteados
		// set_value('legajo');
		// set_value('nombre');
		// set_value('apellido');
		// set_value('DNI');
		// set_value('telefono');
		// set_value('domicilio');
		// set_value('cuit');

		// Mensajes personalizados

		if ( $this->form_validation->run() == FALSE ) {
			$errors = validation_errors();
			redirect('Personas/new', $errors);
		} else {

			// Cargo libreria para subir archivos
			// $this->load->library('upload');
			
			// Seteo el nombre de cada archivo a subir
			$nombre_pdf_dni  = $this->input->post('apellido').'_dni_'.$this->input->post('dni').'.pdf';
			$nombre_pdf_cuil = $this->input->post('apellido').'_cuil_'.$this->input->post('cuil').'.pdf';
			$nombre_pdf_fecha_nacimiento = $this->input->post('apellido').'_'.$this->input->post('dni').'_pdf_nacimiento.pdf';

			// Testeo que los 3 pdf se suban
			// PDF DNI
			if (!empty($_FILES['pdf_dni']['name'])) 
			{
		    $config['upload_path']   = '/srv/http/etap/assets/uploads/';
		    $config['allowed_types'] = 'pdf';
		    $config['max_size']      = 10240;
		    $config['file_name'] 	 = $nombre_pdf_dni;

		    $this->load->initialize($config);

		    if ( ! $this->upload->do_upload('pdf_dni') )
		    {
		      // $error_upload = $this->upload->display_errors();
		      // $this->new($error_upload);

		      echo $this->upload->display_errors();
				} else {
					echo 'no errors <br>';
				}
			} else {
				echo 'vacio <br>';
			}

			if (empty($_FILES['pdf_dni']['name'])) {
				echo 'empty file<br>';
			}

			// PDF CUIL
			if (!empty($_FILES['pdf_cuil']['name'])) 
			{
		    $config['upload_path']   = '/srv/http/etap/assets/uploads/';
		    $config['allowed_types'] = 'pdf';
		    $config['max_size']      = 10240;
		    $config['file_name'] 	 = $nombre_pdf_cuil;

		    // $this->upload->initialize($config);
		    $this->load->library('upload', $config);

		    if ( ! $this->upload->do_upload('pdf_cuil') )
		    {
		      $error_upload = array('error' => $this->upload->display_errors());;
		      $this->new($error_upload);
		    }
			}
			// PDF Fecha nacimiento
			if (!empty($_FILES['pdf_fecha_nacimiento']['name'])) 
			{
		    $config['upload_path']   = '/srv/http/etap/assets/uploads/';
		    $config['allowed_types'] = 'pdf';
		    $config['max_size']      = 10240;
		    $config['file_name'] 	 = $nombre_pdf_fecha_nacimiento;

		    $this->load->library('upload', $config);

		    if ( ! $this->upload->do_upload('pdf_fecha_nacimiento') )
		    {
		      $error_upload = array('error' => $this->upload->display_errors());;
		      $this->new($error_upload);
		    }
			}

			$persona = array(
				'n_legajo' => $this->input->post('legajo'),
				'apellido' => $this->input->post('apellido'),
				'nombre'   => $this->input->post('nombre'),
				'dni' => $this->input->post('dni'),
				'dni_tiene_vencimiento' => $this->input->post('dni_tiene_vencimiento'),
				//'fecha_vencimiento_dni' => $this->input->post('fecha_vencimiento_dni'),
				'dni_pdf_path' => $nombre_pdf_dni,
				'cuil' => $this->input->post('cuil'),
				'cuil_pdf_path' => $nombre_pdf_cuil,
				'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
				'fecha_nacimiento_pdf_path' => $nombre_pdf_fecha_nacimiento,
				'nacionalidad' => $this->input->post('nacionalidad'),
				'domicilio' => $this->input->post('domicilio'),
				'telefono' => $this->input->post('telefono'),
				'empresa_id' => $this->input->post('empresa_id'),
				'create_at' => date('Y-m-d H:i:s'),
				'update_at' => date('Y-m-d H:i:s'),
				'activo'   => TRUE
			);

				if ($this->Persona_model->insert_entry($persona)) {
					// $this->session->set_flashdata('success',' ha sido registrada con éxito');
					// redirect('Personas');

					echo 'success';
				} else {
					$this->session->set_flashdata('error', 'errores');
					redirect('Personas');
				}
		}
	}

	public function edit($id)
	{
		$persona = $this->Persona_model->get('id',$id);
		$json = json_encode($persona);
		echo $json;
	}

	public function update()
	{
		$id = $this->input->post('id');
		// Busco los datos de la persona que voy a actualizar para obtener los path de los pdf
		$persona_original = $this->Persona_model->get('id', $id);
		$pdf_dni = $persona_original->dni_pdf_path;
		$pdf_cuil = $persona_original->cuil_pdf_path;
		$pdf_fecha_nacimiento = $persona_original->fecha_nacimiento_pdf_path;

		// Cargo libreria para subir archivos
		$this->load->library('upload');

		// Seteo el nombre de cada archivo a subir
		$nombre_pdf_dni  = $this->input->post('apellido').'_dni_'.$this->input->post('dni');
		$nombre_pdf_cuil = $this->input->post('apellido').'_cuil_'.$this->input->post('cuil');
		$nombre_pdf_fecha_nacimiento = $this->input->post('apellido').'_'.$this->input->post('dni').'_pdf_nacimiento';
			
			// Subo los archivos
		if (!empty($_FILES['pdf_dni']['name'])) {
			$nombre = $this->upload_pdf($nombre_pdf_dni, 'pdf_dni');
			$pdf_dni = $nombre['file_name'];
		}

		if (!empty($_FILES['pdf_cuil']['name'])) {
			$nombre = $this->upload_pdf($nombre_pdf_cuil, 'pdf_cuil');
			$pdf_cuil = $nombre['file_name'];
		}

		if (!empty($_FILES['pdf_fecha_nacimiento']['name'])) {
			$nombre = $this->upload_pdf($nombre_pdf_fecha_nacimiento, 'pdf_fecha_nacimiento');
			$pdf_fecha_nacimiento = $nombre['file_name'];
		}

		$persona = array(
			'n_legajo' =>  $this->input->post('legajo'),
			'apellido' =>  $this->input->post('apellido'),
			'nombre' =>  $this->input->post('nombre'),
			'dni' =>  $this->input->post('dni'),
			'dni_tiene_vencimiento' =>  $this->input->post('dni_tiene_vencimiento'),
			'fecha_vencimiento_dni' =>  $this->input->post('fecha_vencimiento_dni'),
			'cuil' =>  $this->input->post('cuil'),
			'fecha_nacimiento' =>  $this->input->post('fecha_nacimiento'),
			'nacionalidad' =>  $this->input->post('nacionalidad'),
			'telefono' =>  $this->input->post('telefono'),
			'domicilio' =>  $this->input->post('domicilio'),
			'empresa_id' =>  $this->input->post('empresa_id'),
			'dni_pdf_path' => $pdf_dni,
			'cuil_pdf_path' => $pdf_cuil,
			'fecha_nacimiento_pdf_path' => $pdf_fecha_nacimiento,
			'update_at' =>  date('Y-m-d H:i:s')
		);

		if ($this->Persona_model->update_entry($id, $persona)) {
			echo 'ok';
		} else {
			echo 'Error al actualizar a la persona';
		}

	}


	function upload_pdf()
	{
		if (0 < $_FILES['file']['error']) {
			echo 'Error:' . $_FILES['file']['error']. '<br>';
		} else {
			move_uploaded_file($_FILES['file']['tmp_name'], 'assets/upload/'.$_FILES['file']['tmp_name'].'.pdf');
		}
	}

	public function dni_unico() 
	{
		$dni = $this->input->post('dni');
		$persona = $this->db->get_where('personas', array('dni' => $dni))->num_rows();

		if ($persona == 0) {
			echo 'FALSE'; 
		} else {
			echo 'TRUE';
		}
	}



}