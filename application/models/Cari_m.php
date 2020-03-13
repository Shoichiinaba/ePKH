<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    class Cari_m extends CI_Model {
    	
	function __construct()
	{
		parent::__construct();
	}
	function index() 
		{
			
		}
	
    function search_status($key)
    {
		$this->db->like('no_kk', $key , 'both');
		$this->db->order_by('no_kk', 'DESC');
		$this->db->limit(1);
		return $this->db->get('hasil_prediksi')->result();
    }
    function get_data()
		{
		  return $this->db->get('hasil_prediksi')->result();
		}

	function get_cetak($no_kk)
		{
			$this->db->select('hasil_prediksi.*');
			$this->db->where('no_kk',$no_kk);
			$sql = $this->db->get('hasil_prediksi');
				return ($sql->num_rows() < 1)?'NO_DATA_QUERY':$sql->result_array();
		}
			
}

