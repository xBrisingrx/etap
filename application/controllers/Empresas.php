<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {

	public function __construct()
	{
	        parent::__construct();
	        $this->load->model('Empresa_model');
	}

	public function index()
	{

	}

	public function get()
	{
		$empresas = $this->Empresa_model->get();
		echo json_encode($empresas);
	}


}
