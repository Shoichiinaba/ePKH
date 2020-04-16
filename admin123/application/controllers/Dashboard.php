<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends AUTH_Controller {
	var $template='template/index';

	public function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->helper('url');

		
		
	}
	function index()
	{
		$data['jml_pengajuan'] 	= $this->M_admin->get_jml_pengajuan();
		$data['jml_dapat'] 		= $this->M_admin->hasil_dapat();
		$data['jml_tdapat'] 	= $this->M_admin->hasil_tdapat();
		$data['jml_approve'] 	= $this->M_admin->hasil_approve();
		$data['blm_approve'] 	= $this->M_admin->blm_approve();
		$data['data']			=$this->M_admin->get_dapat();
		$data['data2']			=$this->M_admin->get_tdapat();
		$data['content'] 		= 'admin/home';
		$data['userdata'] 		= $this->userdata;
        $this->load->view($this->template, $data);	
	}
	function dapat_bantuan()
	{
		$data['data']			=$this->M_admin->get_dapat();
		$data['blm_approve'] 	= $this->M_admin->blm_approve();
		$data['content'] 		= 'admin/dapat_bantuan';
		$data['userdata'] 		= $this->userdata;
        $this->load->view($this->template, $data);	
	}

	function tdapat_bantuan()
	{
		$data['data']			=$this->M_admin->get_tdapat();
		$data['blm_approve'] 	= $this->M_admin->blm_approve();
		$data['content'] 		= 'admin/tdapat_bantuan';
		$data['userdata'] 		= $this->userdata;
        $this->load->view($this->template, $data);	
	}

}
