<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hotel_Model', 'model');
        $this->load->library('form_validation');
        // parent::__construct();
        // if ($this->session->logged !== true) {
        //     redirect('auth');
        // }
    }

    public function index()
    {
        $datacontent['judul'] = 'Gray';
        $datacontent['url'] = 'user';
        $datacontent['datakamar'] = $this->model->get_kamar();
        $datacontent['datafasilitas'] = $this->model->get_fasilitas();
        $datacontent['databallroom'] = $this->model->get_ballroom();
        $data['content'] = $this->load->view('user/viewuser', $datacontent, TRUE);
        $this->load->view('tampilan_user/primary', $data);
    }


    public function halaman($parameter = '', $id = '')
    {
        $datacontent['url'] = 'user';
        $datacontent['judul'] = 'Gray';
        $datacontent['parameter'] = $parameter;
        $datacontent['id'] = $id;
        $datacontent['datakamar'] = $this->model->get_kamar();
        $data['content'] = $this->load->view('user/page', $datacontent, TRUE);
        $this->load->view('tampilan_user/primary', $data);
    }

    public function simpan()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor', 'required|trim|numeric');
        $this->form_validation->set_rules('durasi', 'durasi', 'required');
        $this->form_validation->set_rules('masuk', 'Masuk', 'required');
        $this->form_validation->set_rules('keluar', 'Keluar', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        $data = [
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'email' => $this->input->post('email'),
            'nomor' => $this->input->post('nomor'),
            'durasi' => $this->input->post('durasi'),
            'masuk' => $this->input->post('masuk'),
            'keluar' => $this->input->post('keluar'),
            'jenis' => $this->input->post('jenis'),
            'harga' => $this->input->post('harga')
        ];
        $this->db->insert('pemesanan', $data);
        redirect('user');
    }

    public function fasilitas($parameter = '', $id = '')
    {
        $datacontent['tes'] = $this->input->get('id_kamar');
        $datacontent['url'] = 'user';
        $datacontent['judul'] = 'Gray';
        $datacontent['parameter'] = $parameter;
        $datacontent['id'] = $id;
        $datacontent['datakamar'] = $this->model->get_kamar();
        $data['content'] = $this->load->view('user/page', $datacontent, TRUE);
        $this->load->view('tampilan_user/primary', $data);
    }

    // public function riwayat($parameter = '', $id = '')
    // {
    //     $datacontent['parameter'] = $parameter;
    //     $datacontent['id'] = $id;
    //     $datacontent['judul'] = 'Riwayat Pemesanan';
    //     $datacontent['url'] = 'user';
    //     $datacontent['datapesan'] = $this->model->get_pemesanan();
    //     $data['content'] = $this->load->view('user/riwayatuser', $datacontent, TRUE);
    //     $this->load->view('tampilan_user/primary', $data);
    // }

    // public function pembayaran($parameter = '', $id = '')
    // {
    //     $datacontent['parameter'] = $parameter;
    //     $datacontent['id'] = $id;
    //     $datacontent['judul'] = 'Pembayaran';
    //     $datacontent['url'] = 'user';
    //     $datacontent['datakamar'] = $this->model->get_pemesanan();
    //     $data['content'] = $this->load->view('user/pembayaranuser', $datacontent, TRUE);
    //     $this->load->view('tampilan_user/primary', $data);
    // }
}
