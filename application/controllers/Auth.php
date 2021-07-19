<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $datacontent['title'] = 'Login Form';
        $this->load->view('auth/authview', $datacontent);
    }

    public function check(){
		if($this->input->post()){
			$username=$this->input->post('username');
		    $sandi=$this->input->post('sandi');
		    $this->db->where("username",$username);
		    $data=$this->db->get("user");
		    if($data->num_rows()>0){
		      // jika username ada
		      $row=$data->row();
		      $hash = $row->sandi;
		      if (password_verify($sandi, $hash)) {
		          $this->session->set_userdata("logged",true);
		          $this->session->set_userdata("username",$row->username);
		          $this->session->set_userdata("id_pengguna",$row->id_user);
		          $this->session->set_userdata("level",$row->level);
		          $this->session->set_flashdata("info",'<div class="alert alert-success alert-dismissible">
		                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                    <h4><i class="icon fa fa-check"></i> Sukses!</h4> Selamat Datang <b>'.$row->username.'</b> di Halaman Administrasi sebagai <b>'.$row->level.'</b>
		                  </div>');
		          redirect("dashboard");
		      } else {
		         $this->session->set_userdata("logged",false);
		         $this->session->set_flashdata("info",'<div class="alert alert-danger alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                <h4><i class="icon fa fa-ban"></i> Error!</h4> Kata Sandi Salah
		              </div>');
		        redirect("auth");
		      }
		    }
		    else{
		      $this->session->set_userdata("logged",false);
	    	  $this->session->set_flashdata('info','<div class="alert alert-danger alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                <h4><i class="icon fa fa-ban"></i> Error!</h4> Nama Pengguna Salah
		              </div>');
		      redirect("auth");
		    }
		}
		else{
			redirect("auth");
		}
	}

    public function out()
    {
        $this->session->sess_destroy();
        redirect("auth");
    }

    public function pendaftaran()
    {
        $datacontent['title'] = 'Login Form';
        $this->load->view('auth/daftar', $datacontent);
    }

    public function registration()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('sandi1', 'Sandi', 'required|trim|min_length[3]|matches[sandi2]', [
            'unmathches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('sandi2', 'Sandi', 'required|trim|matches[sandi1]');

        if ($this->form_validation->run() == false) {
            // var_dump($this);
            // die();
            redirect('auth/pendaftaran');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'sandi' => password_hash($this->input->post('sandi1'), PASSWORD_DEFAULT),
                'level' => $this->input->post('level')

            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation !!! <br> Your Account has been created</div>');
            redirect('auth');
        }
    }
}