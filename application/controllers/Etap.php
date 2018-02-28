<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etap extends CI_Controller {

	public function __construct()
	{
	        parent::__construct();
	}

	public function index()
	{
		$title['title'] = 'Personas';
		$this->load->view('includes/header',$title);
		$this->load->view('includes/nav');
		$this->load->view('sistema/Home');
		$this->load->view('includes/footer');
	}


}
