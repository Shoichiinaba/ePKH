<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends AUTH_Controller {
	var $template='template/index';

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_admin');

		
		
	}
	function index()
	{
		$data['list']=$this->M_admin->get_data_admin();
		$data['blm_approve'] 	= $this->M_admin->blm_approve();
		$data['content'] = 'admin/list_admin';
		$data['userdata'] 	= $this->userdata;
		$this->load->view($this->template, $data);	
          
	}

}
