<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bantuan extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }

	function hitung($hasil_prediksi = 'Dapat Bantuan',$tgl_renovasi = '')
	{
		$this->db->select('hasil_testing.*');
		$this->db->where('hasil_prediksi', $hasil_prediksi);
		$this->db->where('tgl_renovasi', $tgl_renovasi);
		$query = $this->db->get('hasil_testing');
		return $query->result();

	  // return $this->db->get('hasil_testing')->result();
	}

	public function upload_file($filename){
		$this->load->library('upload'); // Load librari upload
		
		$config['upload_path'] = './excel/';
		$config['allowed_types'] = 'xlsx';
		$config['max_size']	= '2048';
		$config['overwrite'] = true;
		$config['file_name'] = $filename;
	
	
		$this->upload->initialize($config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function insert_multiple($data)
	{
		return $this->db->insert_batch('hasil_prediksi', $data);
	}

	function cetak()
	{
        $query = $this->db->get('hasil_prediksi');
        return $query->result();
	}

	function cetak_dapat($keputusan = 'DAPAT')
		{
			$data = $this->db->query("SELECT * FROM hasil_prediksi WHERE keputusan = '$keputusan'");
			return $data->result();
		}

	function cetak_tdapat($keputusan = 'TIDAK DAPAT')
		{
			$data = $this->db->query("SELECT * FROM hasil_prediksi WHERE keputusan = '$keputusan'");
			return $data->result();
		}

	function delete($params ='')
	{
        $sql = "DELETE  FROM hasil_prediksi WHERE no_kk = ? ";
        return $this->db->query($sql, $params);	
	}
		
	function ubah($no_kk,$troop_) 
	{
		$this->db->where('no_kk', $no_kk);
		$this->db->update('hasil_prediksi', $troop_);
	}

	public function get_cetak($no_kk)
    {
		$this->db->select('hasil_prediksi.*');
		$this->db->where('no_kk',$no_kk);
		$sql = $this->db->get('hasil_prediksi');
			return ($sql->num_rows() < 1)?'NO_DATA_QUERY':$sql->result_array();
	}
	
		public function simpan_pred($no_kk,$nama,$alamat,$status_rumah,$pekerjaan,$jml_tanggungan,$bahan_bakar_m,$sumber_air,$daya_listrik,$prediksi_dapat,$prediksi_tdapat,$keputusan,$tgl_pengajuan)
	{
        $hasil=$this->db->query("INSERT INTO hasil_prediksi(no_kk,nama,alamat,status_rumah,pekerjaan,jml_tanggungan,bahan_bakar_m,sumber_air,daya_listrik,prediksi_dapat,prediksi_tdapat,keputusan,tgl_pengajuan) VALUES ('$no_kk','$nama','$alamat','$status_rumah','$pekerjaan','$jml_tanggungan','$bahan_bakar_m','$sumber_air','$daya_listrik','$prediksi_dapat','$prediksi_tdapat','$keputusan','$tgl_pengajuan')");
        return $hasil;
    }

}