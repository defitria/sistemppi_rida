<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unauthorized extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // $this->template->load('template', 'notfound_v');
        // $this->load->view('dashboard_header');
        $this->load->view('./notfound');
        // $this->load->view('dashboard_footer');
    }
}
