<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perawat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        denied_admin();
        denied_pasien();
        $this->load->model('Dashboard_m');
        $this->load->model('Perawat_m');
        $this->load->helper('url');
    }

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
        $this->load->view('perawat/homepage', $data);
        $this->load->view('template/dashboard_footer');
    }

    // SECTION PHLEBITIS
    public function phlebitis()
    {
        $data['phlebitis'] = $this->db->get('phlebitis')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/data-phlebitis', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function formPhlebitis()
    {
        $data['pasien'] = $this->db->get('pasien')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/form-phlebitis', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function addPhlebitis()
    {

        $data = [
            'nama_pasien' => $this->input->post('nama_pasien'),
            'jenis_surveilans' => 'Phlebitis',
            'jenis_pemasangan' => $this->input->post('jenis_pemasangan'),
            'tujuan_pemasangan' => $this->input->post('tujuan_pemasangan'),
            'keterangan' => $this->input->post('keterangan'),
            'lokasi' => $this->input->post('lokasi'),
            'tgl_pasang' => $this->input->post('tgl_pasang'),
            'kebersihan_tangan' => $this->input->post('kebersihan_tangan'),
            'pengecekan_balutan' => $this->input->post('pengecekan_balutan'),
            'pengecekan_tmpt' => $this->input->post('pengecekan_tmpt'),
            'lepas_pemasanganKeluhan' => $this->input->post('lepas_pemasanganKeluhan'),
            'lepas_pemasanganJam' => $this->input->post('lepas_pemasanganJam'),
            'tgl_lepas' => $this->input->post('tgl_lepas')
        ];

        $this->Perawat_m->addPhlebitis($data, 'phlebitis');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil ditambahkan!
            </div>');
        redirect('perawat/phlebitis');
    }

    public function seePhlebitis($id)
    {
        $where = array('id' => $id);
        $data['phlebitis'] = $this->Perawat_m->seeData($where, 'phlebitis')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/detail-phlebitis', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function deletePhlebitis($id)
    {
        $where = array('id' => $id);
        $this->Perawat_m->deleteData($where, 'phlebitis');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil dihapus!
        </div>');
        redirect('perawat/phlebitis');
    }
    // END OF SECTION PHLEBITIS

    // SECTION SCABIES
    public function scabies()
    {
        $data['scabies'] = $this->db->get('scabies')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/data-scabies', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function formScabies()
    {
        $data['pasien'] = $this->db->get('pasien')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/form-scabies', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function addScabies()
    {

        $data = [
            'nama_pasien' => $this->input->post('nama_pasien'),
            'jenis_surveilans' => 'Scabies',
            'diagnosis' => $this->input->post('diagnosis'),
            'penatalaksanaan' => $this->input->post('penatalaksanaan'),
            'keterangan' => $this->input->post('keterangan'),
            'tgl_pemeriksaan' => $this->input->post('tgl_pemeriksaan'),
            'hand_hygiene' => $this->input->post('hand_hygiene')
        ];

        $this->Perawat_m->addData($data, 'scabies');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil ditambahkan!
            </div>');
        redirect('perawat/scabies');
    }

    public function seeScabies($id)
    {
        $where = array('id' => $id);
        $data['scabies'] = $this->Perawat_m->seeData($where, 'scabies')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/detail-scabies', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function deleteScabies($id)
    {
        $where = array('id' => $id);
        $this->Perawat_m->deleteData($where, 'scabies');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil dihapus!
        </div>');
        redirect('perawat/scabies');
    }
    // END OF SECTION SCABIES

    // SECTION ISK
    public function isk()
    {
        $data['isk'] = $this->db->get('isk')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/data-isk', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function formISK()
    {
        $data['isk'] = $this->db->get('pasien')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/form-isk', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function addISK()
    {

        $data = [
            'nama_pasien' => $this->input->post('nama_pasien'),
            'jenis_surveilans' => 'ISK',
            'jenis_pemasangan' => $this->input->post('jenis_pemasangan'),
            'pemeriksaan' => $this->input->post('pemeriksaan'),
            'tgl_pemeriksaan' => $this->input->post('tgl_pemeriksaan'),
            'keterangan' => $this->input->post('keterangan'),
            'tgl_pasang' => $this->input->post('tgl_pasang'),
            'pemasangan_dc' => $this->input->post('pemasangan_dc'),
            'hand_hygiene' => $this->input->post('hand_hygiene'),
            'fiksasi_kateter' => $this->input->post('fiksasi_kateter'),
            'adp_tepat' => $this->input->post('adp_tepat'),
            'pemasangan_alatsteril' => $this->input->post('pemasangan_alatsteril'),
            'segera_dilepas' => $this->input->post('segera_dilepas'),
            'pengisian_balon' => $this->input->post('pengisian_balon'),
            'urine_bag' => $this->input->post('urine_bag')
        ];

        $this->Perawat_m->addData($data, 'isk');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil ditambahkan!
            </div>');
        redirect('perawat/isk');
    }

    public function seeISK($id)
    {
        $where = array('id' => $id);
        $data['isk'] = $this->Perawat_m->seeData($where, 'isk')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/detail-isk', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function deleteISK($id)
    {
        $where = array('id' => $id);
        $this->Perawat_m->deleteData($where, 'isk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil dihapus!
        </div>');
        redirect('perawat/isk');
    }
    // END OF SECTION ISK

    // SECTION DEKUBITUS
    public function dekubitus()
    {
        $data['dekubitus'] = $this->db->get('dekubitus')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/data-dekubitus', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function formDekubitus()
    {
        $data['dekubitus'] = $this->db->get('pasien')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/form-dekubitus', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function addDekubitus()
    {

        $data = [
            'nama_pasien' => $this->input->post('nama_pasien'),
            'jenis_surveilans' => 'Dekubitus',
            'tgl_kejadian' => $this->input->post('tgl_kejadian'),
            'kejadian' => $this->input->post('kejadian'),
            'keterangan' => $this->input->post('keterangan'),
            'braden_score' => $this->input->post('braden_score'),
            'bradenscore_ditemukan' => $this->input->post('bradenscore_ditemukan'),
            'area_lukatekan' => $this->input->post('area_lukatekan'),
            'stadium' => $this->input->post('stadium'),
            'albumin' => $this->input->post('albumin'),
            'hb' => $this->input->post('hb'),
            'suhu' => $this->input->post('suhu'),
            'td' => $this->input->post('td'),
            'lainnya' => $this->input->post('lainnya'),
            'deskripsi_kejadian' => $this->input->post('deskripsi_kejadian')
        ];

        $this->Perawat_m->addData($data, 'dekubitus');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil ditambahkan!
            </div>');
        redirect('perawat/dekubitus');
    }

    public function seeDekubitus($id)
    {
        $where = array('id' => $id);
        $data['dekubitus'] = $this->Perawat_m->seeData($where, 'dekubitus')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/detail-dekubitus', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function deleteDekubitus($id)
    {
        $where = array('id' => $id);
        $this->Perawat_m->deleteData($where, 'dekubitus');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil dihapus!
        </div>');
        redirect('perawat/dekubitus');
    }
    // END OF SECTION DEKUBITUS

    // SECTION DETAIL INFEKSI HOME
    public function detailPhlebitis($nama_ruangan)
    {
        $where = array('jenis_surveilans' => $nama_ruangan);
        $data['phlebitis'] = $this->Dashboard_m->seeRuangan($where, 'phlebitis')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/home-phlebitis', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function detailScabies($nama_ruangan)
    {
        $where = array('jenis_surveilans' => $nama_ruangan);
        $data['scabies'] = $this->Dashboard_m->seeRuangan($where, 'scabies')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/home-scabies', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function detailISK($nama_ruangan)
    {
        $where = array('jenis_surveilans' => $nama_ruangan);
        $data['isk'] = $this->Dashboard_m->seeRuangan($where, 'isk')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/home-isk', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function detailDekubitus($nama_ruangan)
    {
        $where = array('jenis_surveilans' => $nama_ruangan);
        $data['dekubitus'] = $this->Dashboard_m->seeRuangan($where, 'dekubitus')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/home-dekubitus', $data);
        $this->load->view('template/dashboard_footer');
    }
    // END OF SECTION DETAIL INFEKSI HOME

    // DETAIL SECTION RUANGAN HOME
    public function seeRuangan($nama_ruangan)
    {
        $where = array('ruang_rawatinap' => $nama_ruangan);
        $data['pasien'] = $this->Dashboard_m->seeRuangan($where, 'pasien')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/detail-ruangan', $data);
        $this->load->view('template/dashboard_footer');
    }
    // END OF SECTION RUANGAN HOME
    // LAPORAN
    public function laporan()
    {
        // $data['pasien'] = $this->db->get_where('pasien', ['nama' => $this->session->userdata('name')])->result_array();
        $data['phlebitis'] = $this->db->get('phlebitis')->result_array();
        $data['scabies'] = $this->db->get('scabies')->result_array();
        $data['isk'] = $this->db->get('isk')->result_array();
        $data['dekubitus'] = $this->db->get('dekubitus')->result_array();

        $this->load->view('template/dashboard_header');
        $this->load->view('perawat/laporan', $data);
        $this->load->view('template/dashboard_footer');
    }
}
