<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perawat_m extends CI_Model
{
    public function addData($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function seeData($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function deleteData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
