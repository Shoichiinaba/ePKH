<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approve extends AUTH_Controller {
	var $template='template/index';

	public function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->helper('url');

		
		
	}
	function index()
	{
		
        $data['data']			=$this->M_admin->get_approve();
		$data['content'] 		= 'admin/approve';
		$data['blm_approve'] 	= $this->M_admin->blm_approve();
        $data['userdata'] 		= $this->userdata;
        $this->load->view($this->template, $data);	
	}

	function verifikasi()
	{
		if($this->input->post()==FALSE){
			$this->session->set_flashdata('error',"approve Anda Gagal");
			redirect('Approve');
		}else{
			$no_kk=$this->input->post('no_kk');
			$status_approve = $this->input->post('status_approve');
        	$tgl_approve =date('d/m/Y');
        	$keterangan = $this->input->post('keterangan');

        $troop_ = array(
         'no_kk' =>  $no_kk,
         'status_approve' => $status_approve,
		 'tgl_approve'=>$tgl_approve,
		 'keterangan' => $keterangan,

      );
        $this->M_admin->verifikasi($no_kk, $troop_);
		$this->session->set_flashdata('sukses',"Permohonan Approved");
		redirect('Approve');
	}
	}


}
