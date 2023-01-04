<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    // START DATA USER
    public function dataUser()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function input_dataUser($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function editUser($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function updateUser($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function changepass($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function deleteUser($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // END OF DATA USER
}
