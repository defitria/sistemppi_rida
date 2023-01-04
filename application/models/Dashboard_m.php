<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_m extends CI_Model
{
    // GET DATA RUANGAN
    public function getAnyelir()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('nama, no_rm, nik, jenis_kelamin, tgl_lahir, alamat, jenis_asuransi, dpjp, COUNT(ruang_rawatinap) as jml_pasien, ruang_rawatinap');
        $this->db->where([
            'ruang_rawatinap' => 'Anyelir',
            'MONTH(tgl_input)' => $bln,
            'YEAR(tgl_input)' => $thn,
        ]);
        $this->db->group_by('ruang_rawatinap');
        $this->db->order_by('jml_pasien', 'desc');
        $hasil = $this->db->get('pasien');

        return $hasil;
    }

    public function getICU()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('nama, no_rm, nik, jenis_kelamin, tgl_lahir, alamat, jenis_asuransi, dpjp, COUNT(ruang_rawatinap) as jml_pasien, ruang_rawatinap');
        $this->db->where([
            'ruang_rawatinap' => 'ICU',
            'MONTH(tgl_input)' => $bln,
            'YEAR(tgl_input)' => $thn
        ]);
        $this->db->group_by('ruang_rawatinap');
        $this->db->order_by('jml_pasien', 'desc');
        $hasil = $this->db->get('pasien');

        return $hasil;
    }

    public function getAlamanda()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('nama, no_rm, nik, jenis_kelamin, tgl_lahir, alamat, jenis_asuransi, dpjp, COUNT(ruang_rawatinap) as jml_pasien, ruang_rawatinap');
        $this->db->where([
            'ruang_rawatinap' => 'Alamanda',
            'MONTH(tgl_input)' => $bln,
            'YEAR(tgl_input)' => $thn
        ]);
        $this->db->group_by('ruang_rawatinap');
        $this->db->order_by('jml_pasien', 'desc');
        $hasil = $this->db->get('pasien');

        return $hasil;
    }

    public function getDahlia()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('nama, no_rm, nik, jenis_kelamin, tgl_lahir, alamat, jenis_asuransi, dpjp, COUNT(ruang_rawatinap) as jml_pasien, ruang_rawatinap');
        $this->db->where([
            'ruang_rawatinap' => 'Dahlia',
            'MONTH(tgl_input)' => $bln,
            'YEAR(tgl_input)' => $thn
        ]);
        $this->db->group_by('ruang_rawatinap');
        $this->db->order_by('jml_pasien', 'desc');
        $hasil = $this->db->get('pasien');

        return $hasil;
    }

    public function getCatleya()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('nama, no_rm, nik, jenis_kelamin, tgl_lahir, alamat, jenis_asuransi, dpjp, COUNT(ruang_rawatinap) as jml_pasien, ruang_rawatinap');
        $this->db->where([
            'ruang_rawatinap' => 'Catleya',
            'MONTH(tgl_input)' => $bln,
            'YEAR(tgl_input)' => $thn
        ]);
        $this->db->group_by('ruang_rawatinap');
        $this->db->order_by('jml_pasien', 'desc');
        $hasil = $this->db->get('pasien');

        return $hasil;
    }

    public function getFlamboyan()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('nama, no_rm, nik, jenis_kelamin, tgl_lahir, alamat, jenis_asuransi, dpjp, COUNT(ruang_rawatinap) as jml_pasien, ruang_rawatinap');
        $this->db->where([
            'ruang_rawatinap' => 'Flamboyan',
            'MONTH(tgl_input)' => $bln,
            'YEAR(tgl_input)' => $thn
        ]);
        $this->db->group_by('ruang_rawatinap');
        $this->db->order_by('jml_pasien', 'desc');
        $hasil = $this->db->get('pasien');

        return $hasil;
    }

    public function getAnggrek()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('nama, no_rm, nik, jenis_kelamin, tgl_lahir, alamat, jenis_asuransi, dpjp, COUNT(ruang_rawatinap) as jml_pasien, ruang_rawatinap');
        $this->db->where([
            'ruang_rawatinap' => 'Anggrek',
            'MONTH(tgl_input)' => $bln,
            'YEAR(tgl_input)' => $thn
        ]);
        $this->db->group_by('ruang_rawatinap');
        $this->db->order_by('jml_pasien', 'desc');
        $hasil = $this->db->get('pasien');

        return $hasil;
    }

    public function getTulip()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('nama, no_rm, nik, jenis_kelamin, tgl_lahir, alamat, jenis_asuransi, dpjp, COUNT(ruang_rawatinap) as jml_pasien, ruang_rawatinap');
        $this->db->where([
            'ruang_rawatinap' => 'Tulip',
            'MONTH(tgl_input)' => $bln,
            'YEAR(tgl_input)' => $thn
        ]);
        $this->db->group_by('ruang_rawatinap');
        $this->db->order_by('jml_pasien', 'desc');
        $hasil = $this->db->get('pasien');

        return $hasil;
    }

    public function getKemuning()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('nama, no_rm, nik, jenis_kelamin, tgl_lahir, alamat, jenis_asuransi, dpjp, COUNT(ruang_rawatinap) as jml_pasien, ruang_rawatinap');
        $this->db->where([
            'ruang_rawatinap' => 'Kemuning',
            'MONTH(tgl_input)' => $bln,
            'YEAR(tgl_input)' => $thn
        ]);
        $this->db->group_by('ruang_rawatinap');
        $this->db->order_by('jml_pasien', 'desc');
        $hasil = $this->db->get('pasien');

        return $hasil;
    }

    // GET DATA INFEKSI
    public function getPhlebitis()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('jenis_surveilans, COUNT(jenis_surveilans) as jml_surveilans');
        $this->db->where([
            'MONTH(tgl_pasang)' => $bln,
            'YEAR(tgl_pasang)' => $thn
        ]);

        $hasil = $this->db->get('phlebitis')->result_array();

        return $hasil;
    }

    public function getScabies()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('jenis_surveilans, COUNT(jenis_surveilans) as jml_surveilans');
        $this->db->where([
            'MONTH(tgl_pemeriksaan)' => $bln,
            'YEAR(tgl_pemeriksaan)' => $thn
        ]);

        $hasil = $this->db->get('scabies')->result_array();

        return $hasil;
    }

    public function getISK()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('jenis_surveilans, COUNT(jenis_surveilans) as jml_surveilans');
        $this->db->where([
            'MONTH(tgl_pasang)' => $bln,
            'YEAR(tgl_pasang)' => $thn
        ]);

        $hasil = $this->db->get('isk')->result_array();

        return $hasil;
    }

    public function getDekubitus()
    {
        $bln = date('m');
        $thn = date('Y');

        $this->db->select('jenis_surveilans, COUNT(jenis_surveilans) as jml_surveilans');
        $this->db->where([
            'MONTH(tgl_kejadian)' => $bln,
            'YEAR(tgl_kejadian)' => $thn
        ]);

        $hasil = $this->db->get('dekubitus')->result_array();

        return $hasil;
    }

    // DETAIL
    public function seeRuangan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function seeData($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    // KOLOM BERITA
    public function getMax()
    {
        $this->db->join('scabies', 'scabies.id = phlebitis.id');
        $this->db->join('isk', 'isk.id = phlebitis.id');
        $this->db->join('dekubitus', 'dekubitus.id = phlebitis.id', 'left');
    }
}
