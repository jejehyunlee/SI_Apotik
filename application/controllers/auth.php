<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_admin');
		$this->load->library('session');

	}

	public function index()
	{

		// $this->form_validation->set_rules('username','Username','trim|required');
		// $this->form_validation->set_rules('pass','Pass','trim|required');
		// if($this->form_validation->run()== false)
		// { 
		$data['tittle']='LOGIN';
		$this->load->view('template/Auth_header',$data);
		$this->load->view('Auth/login');
		$this->load->view('template/Auth_footer');
		


	}

	public function cekmasuk(){


		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$where = array(
			'USERNAME' => $username,
			'PASSWORD' => md5($password)
		);
		$cek = $this->m_admin->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'Username' => $username,
				'status' => "login"
			);


			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			$this->session->set_flashdata('flash','SALAH');
			redirect(base_url());
		}
	}
	



} 









	// 	$User = $this->input->post('username');
	// 	$Pas = $this->input->post('pass');

	// 	$MasukUser = $this->db->get_where('admin',['USERNAME' => $User])->row_array();
	// 	$MasukPas = $this->db->get_where('admin',['PASSWORD' => $Pas])->row_array();

	// 	if ($MasukUser) {

	// 		http_redirect('User');


	// 	} else {

	// 		echo "Usernam salah";
	// 		http_redirect('auth');

	// 	}

