<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends AUTH_Controller {
	var $template='template/index';

	public function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->helper('url');
	}

	function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[admin.username]', [
            'is_unique' => 'Username sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password harus sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]', [
            'is_unique' => 'email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('role', 'Role', 'required|trim');

		if ($this->form_validation->run() == false) {
			// $this->session->set_flashdata('error',"Maaf Anda Gagal Registrasi");
			// redirect('admin/tanbah_user');

		$data['content']  = 'admin/daftar';
		$data['userdata'] = $this->userdata;
        $this->load->view($this->template, $data);	

		} else{
			
			$data =[

				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password1')),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'foto' => 'default.png',
				'role' => $this->input->post('role'),
			];
			$this->db->insert('admin',$data);
			$this->session->set_flashdata('sukses',"Selamat Anda Berhasil Registrasi");
			redirect('admin');


		}
	}

	function delete($params = '') 
	{
        $this->M_admin->hapus($params);
        $this->session->set_flashdata('sukses',"Berhasil Di Hapus");
        return redirect('User');
    }

}
