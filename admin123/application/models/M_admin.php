<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	public function update($data, $id) {
		$this->db->where("id", $id);
		$this->db->update("admin", $data);

		return $this->db->affected_rows();
	}
    // Update Profil
    public function select($id = '') {
		if ($id != '') {
			$this->db->where('id', $id);
		}

		$data = $this->db->get('admin');

		return $data->row();
	}

    function hapus($params =''){
        $sql = "DELETE  FROM admin WHERE id = ? ";
        return $this->db->query($sql, $params); 
		}

	function get_data_admin()
		{
		  return $this->db->get('admin')->result();
		}

	public function get_jml_pengajuan()
		{
		$data = $this->db->get('hasil_prediksi');
		return $data->num_rows();
		}
  	function hasil_dapat($keputusan = 'DAPAT')
		{
			$data = $this->db->query("SELECT * FROM hasil_prediksi WHERE keputusan = '$keputusan'");
			return $data->num_rows();
		}
    function hasil_tdapat($keputusan = 'TIDAK DAPAT')
		{
			$data = $this->db->query("SELECT * FROM hasil_prediksi WHERE keputusan = '$keputusan'");
			return $data->num_rows();
		}
	function get_dapat($keputusan = 'DAPAT')
		{
			$data = $this->db->query("SELECT * FROM hasil_prediksi WHERE keputusan = '$keputusan'");
			return $data->result();
		}
	function get_tdapat($keputusan = 'TIDAK DAPAT')
		{
			$data = $this->db->query("SELECT * FROM hasil_prediksi WHERE keputusan = '$keputusan'");
			return $data->result();
		}
	function hasil_approve($status_approve = '1')
		{
			$data = $this->db->query("SELECT * FROM hasil_prediksi WHERE status_approve = '$status_approve'");
			return $data->num_rows();
		}

	function blm_approve($keputusan = 'DAPAT',$status_approve= 0 )
		{
			$this->db->select('hasil_prediksi.*');
			$this->db->where('keputusan', $keputusan);
			$this->db->where('status_approve', $status_approve);
			$query = $this->db->get('hasil_prediksi');
			return $query->num_rows();
		}

	function get_approve($keputusan = 'DAPAT',$status_approve= 0 )
		{
			$this->db->select('hasil_prediksi.*');
			$this->db->where('keputusan', $keputusan);
			$this->db->where('status_approve', $status_approve);
			$query = $this->db->get('hasil_prediksi');
			return $query->result();
		}

	function verifikasi($no_kk,$troop_) 
		{	
			$this->db->where('no_kk', $no_kk);
			$this->db->update('hasil_prediksi', $troop_);
		}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */