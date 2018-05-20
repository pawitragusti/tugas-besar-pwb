<?php

class Admin extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_admin');
    $this->load->helper('url');

  }

  function index(){
    $data['sewa'] = $this->m_admin->tampil_data()->result();
    $this->load->view('admin',$data);
  }

  function edit($id){
    $where = array('id' => $id);
    $data['sewa'] = $this->m_admin->edit_data($where,'sewa')->result();
    $this->load->view('v_edit',$data);
  }

  function update(){
    $id = $this->input->post('id');
    $jenis_mobil = $this->input->post('jenis_mobil');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $nomor_hp = $this->input->post('nomor_hp');

    $data = array(
			'jenis_mobil' => $jenis_mobil,
			'nama' => $nama,
      'email' => $email,
      'nomor_hp' => $nomor_hp

			);

    $where = array('id' => $id);

    $this->m_admin->update_data($where,$data,'sewa');
    redirect('admin');
  }

  function hapus($id){
  $where = array('id' => $id);
  $this->m_admin->hapus_data($where,'sewa');
  redirect('admin');
  }

  function tambah_aksi(){
		$jenis_mobil = $this->input->post('jenis_mobil');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
    $nomor_hp = $this->input->post('nomor_hp');

    $data = array(
			'jenis_mobil' => $jenis_mobil,
			'nama' => $nama,
			'email' => $email,
      'nomor_hp' => $nomor_hp

			);
      $result = $this->m_admin->input_data('sewa', $data);
      
		redirect(base_url());
	}
}
	