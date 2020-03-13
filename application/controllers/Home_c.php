<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller {
	var $template='template/index';
	var $template1='temp_cari/index';

	public function __construct(){
		parent::__construct();
		$this->load->model('Cari_m');
		$this->load->helper(array('url'));
		
	}

	function index()
	{	
		//$data['bantuan']=$this->Cari_m->get_data();
		$data['content'] = 'home';
        $this->load->view($this->template, $data);

	}

	function search(){
		$key=$this->input->POST('no_kk');
		$data['bantuan']=$this->Cari_m->search_status($key);
		$data['content'] = 'search_view';
		$this->load->view($this->template1,$data);	

	}
}
