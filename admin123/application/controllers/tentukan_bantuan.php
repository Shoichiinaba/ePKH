<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tentukan_bantuan extends AUTH_Controller {
	private $filename = "import_data";
	var $template='template/index';

	public function __construct(){
		parent::__construct();
		$this->load->model('M_bantuan');
		$this->load->model('M_array');
		$this->load->helper('url');
	}
	
	function index()
	{
		
		$data['content'] 	= 'admin/menu_bantuan';
		$data['blm_approve'] 	= $this->M_admin->blm_approve();
		$data['userdata'] 	= $this->userdata;
        $this->load->view($this->template, $data);	
	}

	function excel()
	{
		
		$data['content'] 	= 'admin/bantuan';
		$data['userdata'] 	= $this->userdata;
		$data['blm_approve'] 	= $this->M_admin->blm_approve();
        $this->load->view($this->template, $data);	
	}

	function form_bantuan()
	{
		$data['content'] 	= 'admin/form_bantuan';
		$data['blm_approve'] 	= $this->M_admin->blm_approve();
		$data['userdata'] 	= $this->userdata;
        $this->load->view($this->template, $data);	
	}

	public function form(){
		$data = array(); // Buat variabel $data sebagai array
		
		if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
			
			$upload = $this->M_bantuan->upload_file($this->filename);
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				// Load plugin PHPExcel nya
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';
				
				$excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
				
				// Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
				// Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
				$data['sheet'] = $sheet; 
			}else{ // Jika proses upload gagal
				$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}

		$this->load->model('M_array');
		$latih = $this->M_array;
		$latih->parameter('status_rumah',
		'pekerjaan',
		'jml_tanggungan',
		'bahan_bakar_m',
		'sumber_air',
		'daya_listrik',
		'setatus');
		$latih->Get();

		$this->load->library('naive_bayes');
		$bayes = $this->naive_bayes;
		$bayes->data = $latih->tampil_data();
		$bayes->data_kategori = $latih->tampil_data_kategori();
		$bayes->set_class('setatus');
		
		
		$data['userdata'] = $this->userdata;
		$data['content']  = 'admin/bantuan';
		$data['blm_approve'] 	= $this->M_admin->blm_approve();
		$data['naive'] = $bayes;
		$this->load->view($this->template, $data);
	}
	

	function simpan(){
    	$no_kk =$_POST['no_kk'];
    	$nama =$_POST['nama'];
    	$alamat =$_POST['alamat'];
    	$status_rumah =$_POST['status_rumah'];
    	$pekerjaan =$_POST['pekerjaan'];
    	$jml_tanggungan =$_POST['jml_tanggungan'];
    	$bahan_bakar_m =$_POST['bahan_bakar_m'];
    	$sumber_air =$_POST['sumber_air'];
    	$daya_listrik =$_POST['daya_listrik'];
    	$prediksi_dapat =$_POST['prediksi_dapat'];
    	$prediksi_tdapat =$_POST['prediksi_tdapat'];
		$keputusan =$_POST['keputusan'];
		$tgl_pengajuan =date('d/m/Y');

    	$data = array();
    	for($i = 0; $i<count($no_kk); $i++){
    		array_push($data, array(
    			'no_kk'=>$no_kk[$i],
				'nama'=>$nama[$i],
				'alamat'=>$alamat[$i],
				'status_rumah'=>$status_rumah[$i],
				'pekerjaan'=>$pekerjaan[$i],
				'jml_tanggungan'=>$jml_tanggungan[$i],
				'bahan_bakar_m'=>$bahan_bakar_m[$i],
				'sumber_air'=>$sumber_air[$i],
				'daya_listrik'=>$daya_listrik[$i],
				'prediksi_dapat'=>$prediksi_dapat[$i],
				'prediksi_tdapat'=>$prediksi_tdapat[$i],
				'keputusan'=>$keputusan[$i],
				'tgl_pengajuan'=>$tgl_pengajuan,
    		));
    	}
    	$this->M_bantuan->insert_multiple($data);
		redirect('List_prediksi');
	
	}
	
	function simpan_predform()
	{
		if($this->input->post()==FALSE){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Simpan");
			redirect('tentukan_bantuan/form_bantuan');
		}else{

			
			$no_kk=$this->input->post('no_kk');
			$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$status_rumah =$this->input->post('status_rumah');
			$pekerjaan =$this->input->post('pekerjaan');
			$jml_tanggungan =$this->input->post('jml_tanggungan');
			$bahan_bakar_m =$this->input->post('bahan_bakar_m');
			$sumber_air =$this->input->post('sumber_air');
			$daya_listrik =$this->input->post('daya_listrik');
			$prediksi_dapat =$this->input->post('prediksi_dapat');
			$prediksi_tdapat =$this->input->post('prediksi_tdapat');
			$keputusan =$this->input->post('keputusan');
			$tgl_pengajuan =date('d/m/Y');

			}
		$this->M_bantuan->simpan_pred($no_kk,$nama,$alamat,$status_rumah,$pekerjaan,$jml_tanggungan,$bahan_bakar_m,$sumber_air,$daya_listrik,$prediksi_dapat,$prediksi_tdapat,$keputusan,$tgl_pengajuan);
		$this->session->set_flashdata('sukses'," Berhasil Diinput");
		redirect('tentukan_bantuan/form_bantuan');	
	}
	
}
