<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct(){

		parent::__construct();
		

	}


	public function index(){

		$data['tittle']='Dashboard';
		$this->load->view('template/dash_header',$data);
		$this->load->view('Dashboard/dashboard');
		$this->load->view('template/dash_footer');


	}


	public function tambah(){

		$data['tittle']='Tambah Data';
		$this->load->view('template/dash_header',$data);
		$this->load->view('Dashboard/Tambah');
		$this->load->view('template/dash_footer');



	}



	public function log(){

		$data['tittle']='Tambah Data';
		$this->load->view('template/dash_header',$data);
		$this->load->view('Dashboard/log');
		$this->load->view('template/dash_footer');

	}
	


}

