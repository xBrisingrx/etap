<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('Usuarios_model'); 
	}

	public function index()
	{
		$valor = $this->session->userdata('nombre_usuario');
		if(!empty($valor)){
			redirect(base_url());
		}else{
			$title['title'] = 'Login';
			$data['token'] = $this->token(); 
			$this->load->view('includes/header',$title);
			$this->load->view('includes/nav');
			$this->load->view('sistema/login/login', $data);
			$this->load->view('includes/footer');
		}
	}

	public function login()
	{
		// Verifico que el token se haya generado en el sistema
		if ($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')) 
		{
			// Verificamos que ingrese los datos
			$this->form_validation->set_rules('username', 'Nombre de usuario', 'required');
			$this->form_validation->set_rules('password', 'Contraseña', 'required');
			if ($this->form_validation->run() == FALSE) {
				// Si no ingresa usuario o contraseña
				$this->index();
			} else {
				// Ingreso el usuario y la contraseña
				$usuario = array(
									 'nombre_usuario' => $this->input->post('username'),
									 'password' => $this->input->post('password')
				);

				if ($this->Usuarios_model->datosCorrectos($usuario)) {
					// El usuario existe y los datos son correctos
					$datosSesion = $this->Usuarios_model->get($usuario);
					$this->session->set_userdata($datosSesion);
					$this->session->set_flashdata('success', 'Bienvenido al sistema');
					redirect(base_url());
				} else {
					// El usuario no existe o los datos no son correctos
					$this->session->set_flashdata('error', 'Usuario y/ó contraseña incorrecto');
					redirect('Login');
				}			
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}

	public function token()
	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}

	function key()
	{
		// Genero una cadena aleatoria para usar como llave de encriptacion
		$key = bin2hex($this->encryption->create_key(16));
		echo $key;
	}
}
