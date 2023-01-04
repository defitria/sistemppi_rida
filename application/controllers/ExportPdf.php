<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ExportPdf extends CI_Controller
{
    public function exportPhlebitis()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdf');

        // title dari pdf
        $date = date('d-m-Y');
        $data['title_pdf'] = 'Laporan Surveilans Bulan' . $date;
        $data['phlebitis'] = $this->db->get('phlebitis')->result_array();

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

        $html = $this->load->view('perawat/export-phlebitis', $data, true);

        // run dompdf
        $this->pdf->generate($html, $file_pdf, $paper, $orientation);
    }

    public function exportScabies()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdf');

        // title dari pdf
        $date = date('d-m-Y');
        $data['title_pdf'] = 'Laporan Surveilans Bulan' . $date;
        $data['scabies'] = $this->db->get('scabies')->result_array();

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

        $html = $this->load->view('perawat/export-scabies', $data, true);

        // run dompdf
        $this->pdf->generate($html, $file_pdf, $paper, $orientation);
    }

    public function exportISK()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdf');

        // title dari pdf
        $date = date('d-m-Y');
        $data['title_pdf'] = 'Laporan Surveilans Bulan' . $date;
        $data['isk'] = $this->db->get('isk')->result_array();

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

        $html = $this->load->view('perawat/export-isk', $data, true);

        // run dompdf
        $this->pdf->generate($html, $file_pdf, $paper, $orientation);
    }

    public function exportDekubitus()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdf');

        // title dari pdf
        $date = date('d-m-Y');
        $data['title_pdf'] = 'Laporan Surveilans Bulan' . $date;
        $data['dekubitus'] = $this->db->get('dekubitus')->result_array();

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

        $html = $this->load->view('perawat/export-dekubitus', $data, true);

        // run dompdf
        $this->pdf->generate($html, $file_pdf, $paper, $orientation);
    }

    public function exportLaporan()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdf');

        // title dari pdf
        $date = date('d-m-Y');
        $data['title_pdf'] = 'Laporan Surveilans Bulan' . $date;
        $data['dekubitus'] = $this->db->get('dekubitus')->result_array();
        $data['phlebitis'] = $this->db->get('phlebitis')->result_array();
        $data['isk'] = $this->db->get('isk')->result_array();
        $data['scabies'] = $this->db->get('scabies')->result_array();

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan surveilans bulan' . date('F Y');
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

        $html = $this->load->view('perawat/export-laporan', $data, true);

        // run dompdf
        $this->pdf->generate($html, $file_pdf, $paper, $orientation);
    }
}
