<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dataku extends CI_Model
{
	
	public function simpan($data)
	{
		$this->db->insert('identitas', $data);
	}

	public function tampil()
	{
		$query = $this->db->get('identitas');
		return $query;
	}

	public function edit($id)
	{
		$query = $this->db->get_where('identitas', array('id' => $id));
		return $query;
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$query = $this->db->update('identitas', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->delete('identitas');

	}

}