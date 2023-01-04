<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        denied_admin();
        denied_perawat();
        $this->load->model('Pasien_m');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data['pasien'] = $this->db->get_where('pasien', ['nama' => $this->session->userdata('name')])->result_array();
        $data['phlebitis'] = $this->db->get_where('phlebitis', ['nama_pasien' => $this->session->userdata('name')])->result_array();
        //$dataa['scabies'] = $this->db->get_where('scabies', ['nama_pasien' => $this->session->userdata('name')])->row();
        $data['isk'] = $this->db->get_where('isk', ['nama_pasien' => $this->session->userdata('name')])->result_array();
        // $dataa['dekubitus'] = $this->db->get_where('dekubitus', ['nama_pasien' => $this->session->userdata('name')])->row();

        $this->load->view('template/dashboard_header');
        $this->load->view('pasien/homepage', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function data_diri()
    {
        $data['pasien'] = $this->db->get_where('pasien', ['nama' => $this->session->userdata('name')])->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('pasien/data-diri', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function formChangepass()
    {

        $this->load->view('template/dashboard_header');
        $this->load->view('pasien/form-changepass');
        $this->load->view('template/dashboard_footer');
    }

    public function changepass()
    {
        $this->form_validation->set_rules(
            'pass_baru1',
            'Password',
            'required|trim|min_length[8]|matches[pass_baru2]',
            [
                'matches' => 'password tidak sama',
                'min_length' => 'password terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'pass_baru2',
            'Password',
            'required|trim|min_length[8]|matches[pass_baru1]',
            [
                'matches' => 'password tidak sama',
                'min_length' => 'password terlalu pendek'
            ]
        );

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/dashboard_header');
            $this->load->view('pasien/form-changepass');
            $this->load->view('template/dashboard_footer');
        } else {
            $email = $this->input->post('email');
            $pass_baru = $this->input->post('pass_baru1');

            $pass_hash = password_hash($pass_baru, PASSWORD_DEFAULT);

            $this->db->set('password', $pass_hash);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Password berhasil diubah!
            </div>');
            redirect('pasien');
        }
    }
}
