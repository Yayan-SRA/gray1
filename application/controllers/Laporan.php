<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        parent::__construct();
        $this->load->model('LaporanModel', 'model');
        parent::__construct();
        if ($this->session->logged !== true) {
            redirect('auth');
        }
    }

    public function index()
    {
        $datajudul['judul'] = 'Gray';
        $data['bambang'] = $this->load->view('laporan/viewlaporan', $datajudul, TRUE);
        $this->load->view('tampilan/primary', $data);
    }
    public function listlaporan()
    {
        $datacontent['judul'] = 'Laporan Pendapatan Bulanan';
        $datacontent['judul1'] = 'Laporan';
        $datacontent['datalaporan'] = $this->model->get();
        $data['bambang'] = $this->load->view('laporan/listlaporan', $datacontent, TRUE);
        $this->load->view('tampilan/primary', $data);
    }
    public function formlaporan()
    {
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('p_kamar', 'P_kamar', 'required|trim|numeric');
        $this->form_validation->set_rules('p_ballroom', 'P_ballroom', 'required|trim|numeric');
        $this->form_validation->set_rules('p_fasilitas', 'P_fasilitas', 'required|trim|numeric');

        if ($this->form_validation->run() == false) {
            $datajudul['judul'] = 'Form Laporan';
            $datajudul['judul1'] = 'Form Laporan';
            $data['bambang'] = $this->load->view('laporan/formlaporan', $datajudul, TRUE);
            $this->load->view('tampilan/primary', $data);
        } else {
            $data = [
                'tanggal' => $this->input->post('tanggal'),
                'p_kamar' => $this->input->post('p_kamar'),
                'p_ballroom' => $this->input->post('p_ballroom'),
                'p_fasilitas' => $this->input->post('p_fasilitas')
            ];
            $this->db->insert('laporan', $data);

            redirect('laporan');
        }
    }
}
