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

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */