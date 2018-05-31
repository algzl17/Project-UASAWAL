<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataku extends CI_Controller
{
	function __construct(){
		parent:: __construct();
		$this->load->model('Model_dataku');
	}

	public function index()
	{
		$data['query'] = $this->Model_dataku->tampil();
		$this->load->view('mahasiswa/tampil', $data);
	}
	
	public function input()
	{
		$this->load->view('mahasiswa/input');
	}

	public function simpan()
	{
		$data = array('nama' => $this->input->post('nama'),'status' => $this->input->post('status'), 'jurusan' => $this->input->post('jurusan'));
		$proses = $this->Model_dataku->simpan($data);
		if (!$proses) {
			redirect(base_url('dataku'));
		} else {
			echo "Data Gagal Disimpan";
			echo "<br>";
			echo "<a href='".base_url('dataku/input/')."'>Kembali ke form</a>";
		}
		
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$data['query'] = $this->Model_dataku->edit($id);
		$this->load->view('mahasiswa/edit', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$data = array('nama' => $this->input->post('nama'),'status' => $this->input->post('status'),  'jurusan' => $this->input->post('jurusan'));
		
		$proses = $this->Model_dataku->update($id, $data);
		if (!$proses) {
			redirect(base_url('dataku'));
		} else {
			echo "Data Gagal Diupdate";
			echo "<br>";
			echo "<a href='".base_url('dataku')."'>Tampil data</a>";
		}
	}

	public function hapus()
	{
		$id = $this->uri->segment(3);
		$proses = $this->Model_dataku->hapus($id);
		if (!$proses) {
			redirect(base_url('dataku'));
		} else {
			echo "Data Gagal dihapus";
			echo "<br>";
			echo "<a href='".base_url('dataku')."'>Tampil data</a>";
		}
	}

}