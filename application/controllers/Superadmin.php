<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Superadmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        denied_perawat();
        denied_pasien();
        $this->load->model('User_m');
        $this->load->model('Data_m');
        $this->load->model('Dashboard_m');

        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    // START OF DATA USER
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // GET DATA RUANGAN
        $data['anyelir'] = $this->Dashboard_m->getAnyelir();
        $data['ICU'] = $this->Dashboard_m->getICU();
        $data['alamanda'] = $this->Dashboard_m->getAlamanda();
        $data['dahlia'] = $this->Dashboard_m->getDahlia();
        $data['catleya'] = $this->Dashboard_m->getCatleya();
        $data['flamboyan'] = $this->Dashboard_m->getFlamboyan();
        $data['anggrek'] = $this->Dashboard_m->getAnggrek();
        $data['tulip'] = $this->Dashboard_m->getTulip();
        $data['kemuning'] = $this->Dashboard_m->getKemuning();

        // GET DATA INFEKSI
        $data['phlebitis'] = $this->Dashboard_m->getPhlebitis();
        $data['scabies'] = $this->Dashboard_m->getScabies();
        $data['isk'] = $this->Dashboard_m->getISK();
        $data['dekubitus'] = $this->Dashboard_m->getDekubitus();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/dashboard', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function data_user()
    {
        $data['user'] = $this->User_m->dataUser();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/data-user', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function formUser()
    {
        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/form-user');
        $this->load->view('template/dashboard_footer');
    }

    public function addUser()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'email sudah digunakan'
        ]);

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[8]',
            [
                'min_length' => 'password terlalu pendek'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/dashboard_header');
            $this->load->view('superadmin/form-user');
            $this->load->view('template/dashboard_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->User_m->input_dataUser($data, 'user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun berhasil ditambahkan!
            </div>');
            redirect('superadmin/data_user');
        }
    }

    public function editUser($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->User_m->editUser($where, 'user')->result();


        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/edit-user', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function updateUser()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'email sudah digunakan'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/dashboard_header');
            $this->load->view('superadmin/edit-user');
            $this->load->view('template/dashboard_footer');
        } else {

            $id = $this->input->post('id');
            $where = array('id' => $id);
            $email = $this->input->post('email', true);

            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'date_created' => time()
            ];

            $this->User_m->updateUser($where, $data, 'user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data user telah berhasil di update.
            </div>');
            redirect('superadmin/data_user');
        }
    }

    public function changepass($id)
    {
        $where = $this->input->get('id');
        $data['user'] = $this->User_m->changepass($where, 'user')->result();

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
            $this->load->view('superadmin/form-changepass', $data);
            $this->load->view('template/dashboard_footer');
        } else {
            $id = $this->input->post('id');
            $pass_baru = $this->input->post('pass_baru1');

            $pass_hash = password_hash($pass_baru, PASSWORD_DEFAULT);

            $this->db->set('password', $pass_hash);
            $this->db->where('id', $id);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Password berhasil diubah!
            </div>');
            redirect('superadmin/data_user');
        }
    }

    public function deleteUser($id)
    {
        $where = array('id' => $id);
        $this->User_m->deleteUser($where, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data user berhasil dihapus!
        </div>');
        redirect('superadmin/data_user');
    }
    // END OF DATA USER

    // START OF DATA PASIEN
    public function data_pasien()
    {
        $data['pasien'] = $this->Data_m->dataPasien();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/data-pasien', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function formPasien()
    {
        $data['dokter'] = $this->db->get('dokter')->result_array();
        $data['ruang_rawatinap'] = $this->db->get('ruang_rawatinap')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/form-pasien', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function addPasien()
    {
        $date = date('y-m-d');
        $data = [
            'id' => '',
            'nama' => $this->input->post('nama'),
            'no_rm' => $this->input->post('no_rm'),
            'nik' => $this->input->post('nik'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_asuransi' => $this->input->post('jenis_asuransi'),
            'dpjp' => $this->input->post('dpjp'),
            'ruang_rawatinap' => $this->input->post('ruang_rawatinap'),
            'tgl_input' => $date
        ];

        $this->Data_m->addData($data, 'pasien');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Pasien berhasil ditambahkan!
        </div>');
        redirect('superadmin/data_pasien');
    }

    public function editPasien($id)
    {
        $where = array('id' => $id);
        $data['pasien'] = $this->Data_m->editData($where, 'pasien')->result();

        $data['dokter'] = $this->db->get('dokter')->result_array();
        $data['ruang_rawatinap'] = $this->db->get('ruang_rawatinap')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/edit-pasien', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function updatePasien()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id);

        $data = [
            'nama' => $this->input->post('nama'),
            'no_rm' => $this->input->post('no_rm'),
            'nik' => $this->input->post('nik'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_asuransi' => $this->input->post('jenis_asuransi'),
            'dpjp' => $this->input->post('dpjp'),
            'ruang_rawatinap' => $this->input->post('ruang_rawatinap')
        ];

        $this->Data_m->updateData($where, $data, 'pasien');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data pasien telah berhasil di update.
        </div>');
        redirect('superadmin/data_pasien');
    }

    public function deletePasien($id)
    {
        $where = array('id' => $id);
        $this->Data_m->deleteData($where, 'pasien');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data pasien berhasil dihapus!
        </div>');
        redirect('superadmin/data_pasien');
    }
    // END OF DATA PASIEN

    // START OF DATA DOKTER
    public function data_dokter()
    {
        $data['dokter'] = $this->Data_m->dataDokter();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/data-dokter', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function formDokter()
    {

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/form-dokter');
        $this->load->view('template/dashboard_footer');
    }

    public function addDokter()
    {
        $data = [
            'id' => '',
            'nama_dokter' => $this->input->post('nama_dokter'),
            'spesialis' => $this->input->post('spesialis')
        ];

        $this->Data_m->addData($data, 'dokter');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Dokter berhasil ditambahkan!
        </div>');
        redirect('superadmin/data_dokter');
    }

    public function editDokter($id)
    {
        $where = array('id' => $id);
        $data['dokter'] = $this->Data_m->editData($where, 'dokter')->result();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/edit-dokter', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function updateDokter()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id);

        $data = [
            'nama_dokter' => $this->input->post('nama_dokter'),
            'spesialis' => $this->input->post('spesialis')
        ];

        $this->Data_m->updateData($where, $data, 'dokter');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data dokter telah berhasil di update.
        </div>');
        redirect('superadmin/data_dokter');
    }

    public function deleteDokter($id)
    {
        $where = array('id' => $id);
        $this->Data_m->deleteData($where, 'dokter');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data dokter berhasil dihapus!
        </div>');
        redirect('superadmin/data_dokter');
    }
    // END OF DATA DOKTER

    // START OF DATA RUANG RAWAT INAP
    public function data_ruangan()
    {
        $data['ruangan'] = $this->Data_m->dataRuangan();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/data-ruangan', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function formRuangan()
    {

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/form-ruangan');
        $this->load->view('template/dashboard_footer');
    }

    public function addRuangan()
    {
        $data = [
            'id' => '',
            'nama_ruangan' => $this->input->post('nama_ruangan'),
            'kelas' => $this->input->post('kelas')
        ];

        $this->Data_m->addData($data, 'ruang_rawatinap');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data ruang rawat inap berhasil ditambahkan!
        </div>');
        redirect('superadmin/data_ruangan');
    }

    public function editRuangan($id)
    {
        $where = array('id' => $id);
        $data['ruangan'] = $this->Data_m->editData($where, 'ruang_rawatinap')->result();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/edit-ruangan', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function updateRuangan()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id);

        $data = [
            'nama_ruangan' => $this->input->post('nama_ruangan'),
            'kelas' => $this->input->post('kelas')
        ];

        $this->Data_m->updateData($where, $data, 'ruang_rawatinap');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data ruang rawat inap telah berhasil di update.
        </div>');
        redirect('superadmin/data_ruangan');
    }

    public function deleteRuangan($id)
    {
        $where = array('id' => $id);
        $this->Data_m->deleteData($where, 'ruang_rawatinap');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data ruang rawat inap berhasil dihapus!
        </div>');
        redirect('superadmin/data_ruangan');
    }
    // END OF DATA RUANG RAWAT INAP

    // START OF RUANG RAWAT INAP
    public function seeRuangan($nama_ruangan)
    {
        $where = array('ruang_rawatinap' => $nama_ruangan);
        $data['pasien'] = $this->Dashboard_m->seeRuangan($where, 'pasien')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/detail-ruangan', $data);
        $this->load->view('template/dashboard_footer');
    }
    // END OF RUANG RAWAT INAP

    // SECTION DETAIL INFEKSI HOME
    public function detailPhlebitis($nama_ruangan)
    {
        $where = array('jenis_surveilans' => $nama_ruangan);
        $data['phlebitis'] = $this->Dashboard_m->seeRuangan($where, 'phlebitis')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/home-phlebitis', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function detailScabies($nama_ruangan)
    {
        $where = array('jenis_surveilans' => $nama_ruangan);
        $data['scabies'] = $this->Dashboard_m->seeRuangan($where, 'scabies')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/home-scabies', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function detailISK($nama_ruangan)
    {
        $where = array('jenis_surveilans' => $nama_ruangan);
        $data['isk'] = $this->Dashboard_m->seeRuangan($where, 'isk')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/home-isk', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function detailDekubitus($nama_ruangan)
    {
        $where = array('jenis_surveilans' => $nama_ruangan);
        $data['dekubitus'] = $this->Dashboard_m->seeRuangan($where, 'dekubitus')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/home-dekubitus', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function seePhlebitis($id)
    {
        $where = array('id' => $id);
        $data['phlebitis'] = $this->Dashboard_m->seeData($where, 'phlebitis')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/detail-phlebitis', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function seeScabies($id)
    {
        $where = array('id' => $id);
        $data['scabies'] = $this->Dashboard_m->seeData($where, 'scabies')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/detail-scabies', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function seeISK($id)
    {
        $where = array('id' => $id);
        $data['isk'] = $this->Dashboard_m->seeData($where, 'isk')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/detail-isk', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function seeDekubitus($id)
    {
        $where = array('id' => $id);
        $data['dekubitus'] = $this->Dashboard_m->seeData($where, 'dekubitus')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/detail-dekubitus', $data);
        $this->load->view('template/dashboard_footer');
    }
    // END OF SECTION DETAIL INFEKSI HOME

    // LAPORAN
    public function laporan()
    {
        // $data['pasien'] = $this->db->get_where('pasien', ['nama' => $this->session->userdata('name')])->result_array();
        $data['phlebitis'] = $this->db->get('phlebitis')->result_array();
        $data['scabies'] = $this->db->get('scabies')->result_array();
        $data['isk'] = $this->db->get('isk')->result_array();
        $data['dekubitus'] = $this->db->get('dekubitus')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('superadmin/laporan', $data);
        $this->load->view('template/dashboard_footer');
    }
}
