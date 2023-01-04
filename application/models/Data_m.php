<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_m extends CI_Model
{
    public function dataPasien()
    {
        $query = $this->db->get('pasien');
        return $query->result_array();
    }

    public function dataDokter()
    {
        $query = $this->db->get('dokter');
        return $query->result_array();
    }

    public function dataRuangan()
    {
        $query = $this->db->get('ruang_rawatinap');
        return $query->result_array();
    }

    public function addData($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function editData($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function deleteData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
