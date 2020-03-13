<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_latih extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }

    function get_latih()
    {
	  return $this->db->get('data_latih')->result();
    }
    
    function get_data_prediksi()
    {
	  return $this->db->get('hasil_prediksi')->result();
	}

	function tambah($nama,$alamat,$status_rumah,$pekerjaan,$jml_tanggungan,$bahan_bakar_m,$sumber_air,$daya_listrik,$setatus)
	{
        $hasil=$this->db->query("INSERT INTO data_latih(nama,alamat,status_rumah,pekerjaan,jml_tanggungan,bahan_bakar_m,sumber_air,daya_listrik,setatus) VALUES ('$nama','$alamat','$status_rumah','$pekerjaan','$jml_tanggungan','$bahan_bakar_m','$sumber_air','$daya_listrik','$setatus')");
        return $hasil;
    }

    function delete($params ='')
    {
        $sql = "DELETE  FROM data_latih WHERE id = ? ";
        return $this->db->query($sql, $params);	
    }

	function edit($id,$troop_) 
    {
        $this->db->where('id', $id);
        $this->db->update('data_latih', $troop_);
    }	

    public function get_jml_latih()
	{
       $data = $this->db->get('data_latih');
       return $data->num_rows();
  	}
  	function get_dapat($setatus = 'DAPAT')
  	{
        $data = $this->db->query("SELECT * FROM data_latih WHERE setatus = '$setatus'");
        return $data->num_rows();
    }
    function get_tdapat($setatus = 'TIDAK DAPAT')
    {
        $data = $this->db->query("SELECT * FROM data_latih WHERE setatus = '$setatus'");
        return $data->num_rows();
    }
	  
	

}