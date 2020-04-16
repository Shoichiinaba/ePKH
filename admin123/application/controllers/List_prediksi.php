<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_prediksi extends AUTH_Controller {
	var $template='template/index';
	public function __construct(){
		parent::__construct();
		$this->load->model('M_latih');
		$this->load->model('M_bantuan');	
	}

	public function index()
	{
		$data['content'] 		= 'admin/list_data_prediksi';
		$data['blm_approve'] 	= $this->M_admin->blm_approve();
		$data['data']			=$this->M_latih->get_data_prediksi();
		$data['userdata'] 		= $this->userdata;
        $this->load->view($this->template, $data);
	}
	
	public function do_upload(){
		$config['upload_path']   = './uploaded_file/'; 
		$config['allowed_types'] = 'doc|docx|xls|xlsx|pdf|zip|rar'; 
		$data['userdata'] 	= $this->userdata;
		$this->load->library('upload', $config);
				
				 if ( ! $this->upload->do_upload('file_nya')) {
					$data['error_upload'] = array('error' => $this->upload->display_errors()); 
					$this->session->set_userdata('status_upload',
					'<div class="alert alert-warning alert-dismissible" role="alert">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.
					$data['error_upload']['error'].'</div>');
				 }
					
				 else { 
					$this->session->set_userdata('status_upload','<div class="alert alert-success alert-dismissible" role="alert">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															File berhasil diupload
															</div>');
															
				} 
	
			redirect(base_url());
		}
		
	public function hapus($filenya){
		$dir   = './uploaded_file/'; 
		if(unlink($dir.$filenya)){
		$this->session->set_userdata('status_hapus','<div class="alert alert-success alert-dismissible" role="alert">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															File berhasil dihapus</div>');

		}	
		redirect(base_url());
	}	

	function delete($params = '') {
        $this->M_bantuan->delete($params);
        $this->session->set_flashdata('sukses',"Berhasil Di Hapus");
        return redirect('List_prediksi');
	}

	function delete_dapat($params = '') {
        $this->M_bantuan->delete($params);
        $this->session->set_flashdata('sukses',"Berhasil Di Hapus");
        return redirect('Dashboard/dapat_bantuan');
	}
	
	function delete_tidak($params = '') {
        $this->M_bantuan->delete($params);
        $this->session->set_flashdata('sukses',"Berhasil Di Hapus");
        return redirect('Dashboard/tdapat_bantuan');
	}

	function adit_pered()
	{
		if($this->input->post()==FALSE){
			$this->session->set_flashdata('error',"Data Gagal Di Edit");
			redirect('List_prediksi');
		}else{
			$no_kk=$this->input->post('no_kk');
			$nama = $this->input->post('nama');
        	$alamat = $this->input->post('alamat');
        	

        $troop_ = array(
         'no_kk' =>  $no_kk,
         'nama' =>  $nama,
         'alamat'  => $alamat,
         

      );
        $this->M_bantuan->ubah($no_kk, $troop_);
		$this->session->set_flashdata('sukses',"Berhasil Di Edit");
		redirect('List_prediksi');
		}
	}
}
