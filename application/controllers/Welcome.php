<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->m_barang->get_data();
		$this->load->view('templates/header.php');
		$this->load->view('home',$data);

	}

	public function tambah() {
		$this->load->view('templates/header.php');
		$this->load->view('tambah');
	}

	public function simpan() {
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');
		$berat = $this->input->post('berat');
		
		$this->form_validation->set_rules('kode','kode','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');
		$this->form_validation->set_rules('stok','stok','required|numeric');
		$this->form_validation->set_rules('harga','harga','required|numeric');
		$this->form_validation->set_rules('berat','berat','required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header.php');
			$this->load->view('tambah');
		}
		else {
		$this->m_barang->insert_data($_POST);
		redirect(base_url().'welcome');
		}
		
	}
	public function hapus($id) {
		$where = array('id' => $id);
		$this->m_barang->delete_data($where);
		redirect(base_url().'welcome');
	} 

	public function edit($id) {
		// $where = array('id' => $id);
		$data['barang'] = $this->m_barang->edit_data($id);
		$this->load->view('templates/header.php');
		$this->load->view('edit',$data);
	}
	public function perbarui () {
		// print_r($_POST); exit();
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');
		$berat = $this->input->post('berat');

		$this->form_validation->set_rules('id','id','required');
		$this->form_validation->set_rules('kode','kode','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');
		$this->form_validation->set_rules('stok','stok','required|numeric');
		$this->form_validation->set_rules('harga','harga','required|numeric');
		$this->form_validation->set_rules('berat','berat','required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$data['barang'][0]=array (
				'id' => $id,
				'kode' => $kode,
				'nama' => $nama,
				'deskripsi' => $deskripsi,
				'stok' => $stok,
				'harga' => $harga,
				'berat' => $berat);
			$this->load->view('templates/header.php');
			$this->load->view('edit',$data);
		} else {
			$where = array('id' => $id);
			$this->m_barang->update_data($where,$_POST);
			redirect(base_url(). 'welcome');
		}
	}
}