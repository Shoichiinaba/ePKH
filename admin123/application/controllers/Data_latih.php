<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_latih extends AUTH_Controller {
	var $template='template/index';

	public function __construct(){
		parent::__construct();
		$this->load->model('M_latih');
		$this->load->helper('url');

		
		
	}
	function index()
	{	
		$data['list']				=$this->M_latih->get_latih();
		$data['jml_latih'] 			= $this->M_latih->get_jml_latih();
		$data['jml_dapat'] 			= $this->M_latih->get_dapat();
		$data['jml_tdapat'] 		= $this->M_latih->get_tdapat();
		$data['blm_approve'] 	= $this->M_admin->blm_approve();
		$data['content'] 			='admin/data_latih';
		$data['userdata'] 			= $this->userdata;
        $this->load->view($this->template, $data);	
	}

	function tambah_data()
	{
		if($this->input->post()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Simpan");
			redirect('Data_latih');
		}else{
				$nama=$this->input->post('nama');
				$alamat=$this->input->post('alamat');
				$status_rumah=$this->input->post('status_rumah');
				$pekerjaan=$this->input->post('pekerjaan');
				$jml_tanggungan=$this->input->post('jml_tanggungan');
				$bahan_bakar_m=$this->input->post('bahan_bakar_m');
				$sumber_air=$this->input->post('sumber_air');
				$daya_listrik=$this->input->post('daya_listrik');
				$setatus=$this->input->post('setatus');
			
			}
		$this->M_latih->tambah($nama,$alamat,$status_rumah,$pekerjaan,$jml_tanggungan,$bahan_bakar_m,$sumber_air,$daya_listrik,$setatus);
		$this->session->set_flashdata('sukses'," Berhasil Diinput");
		redirect('Data_latih');	
	}

    function delete($params = '') {
        $this->M_latih->delete($params);
        $this->session->set_flashdata('sukses',"Berhasil Di Hapus");
        return redirect('Data_latih');
    }


	function adit_latih()
	{
		if($this->input->post()==FALSE){
			$this->session->set_flashdata('error',"Data Gagal Di Edit");
			redirect('Data_latih');
		}else{
			$id 					= $this->input->post('id');
			$nama                	= $this->input->post('nama');
        	$alamat 				= $this->input->post('alamat');
        	$status_rumah 			= $this->input->post('status_rumah');
			$pekerjaan 				= $this->input->post('pekerjaan');
			$jml_tanggungan 		= $this->input->post('jml_tanggungan');
			$bahan_bakar_m 			= $this->input->post('bahan_bakar_m');
			$sumber_air 			= $this->input->post('sumber_air');
			$daya_listrik 			= $this->input->post('daya_listrik');
			$setatus 				= $this->input->post('setatus');

        $troop_ = array(
         'id' 					    =>  $id,
         'nama' 					=>  $nama,
         'alamat'  					=>  $alamat,
         'status_rumah'				=>	$status_rumah,
		 'pekerjaan'				=>	$pekerjaan,
		 'jml_tanggungan'			=>	$jml_tanggungan,
		 'bahan_bakar_m'			=>	$bahan_bakar_m,
		 'sumber_air'				=>	$sumber_air,
		 'daya_listrik'				=>	$daya_listrik,
		 'setatus'					=>	$setatus,

      );
        $this->M_latih->edit($id, $troop_);
		$this->session->set_flashdata('sukses',"Berhasil Di Edit");
		redirect('Data_latih');
	}
	}

}
