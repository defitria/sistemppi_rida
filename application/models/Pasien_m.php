<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_m extends CI_Model
{
    public function dataPasien()
    {
        $query = $this->db->get('pasien');
        return $query->result_array();
    }

    public function seeData($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function changepass($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
