<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{

	function getDataUser()
	{
		$query = $this->db->get('data_user');
		return $query->result();
	}

	function getDataKegiatan()
	{
		$this->db->select('*');
		$this->db->from('data_kegiatan');
		$this->db->join('data_user', 'data_kegiatan.ktp = data_user.ktp');
		$this->db->order_by('tanggal', 'DESC');
		return $this->db->get()->result();
	}

	function insertDataUser($data)
	{
		$this->db->insert('data_user', $data);
	}

	function insertFKUser($data)
	{
		$this->db->insert('data_kegiatan', $data);
	}

	function insertDataKegiatan($data)
	{
		$this->db->insert('data_kegiatan', $data);
	}

	function getDataUserDetail($ktp)
	{
		$this->db->where('ktp', $ktp);
		$query = $this->db->get('data_user');
		return $query->row();
	}

	function getDataKegiatanDetail($id)
	{
		$this->db->select('*');
		$this->db->from('data_kegiatan');
		$this->db->join('data_user', 'data_kegiatan.ktp = data_user.ktp');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	function searchDataKegiatan($keyword)
	{
		$this->db->select('*');
		$this->db->from('data_kegiatan');
		$this->db->join('data_user', 'data_kegiatan.ktp = data_user.ktp');
		$this->db->like('data_kegiatan.ktp', $keyword);
		return $this->db->get()->result();
	}

	function deletDataUser($ktp)
	{
		$this->db->where('ktp', $ktp);
		$this->db->delete('data_user');
	}

	function updateDataUser($ktp, $data)
	{
		$this->db->where('ktp', $ktp);
		$this->db->update('data_user', $data);
	}

	function updateStatus($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('data_kegiatan', $data);
	}

	function login($data)
	{
		return $this->db->get_where('user', $data);
	}
}
