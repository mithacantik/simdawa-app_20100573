<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }
    public function index()
    {

        if (isset($_POST['btn_login'])) {
            $cek_login = $this->LoginModel->cek_login();
            if ($cek_login['status'] == True) {
                $data = [
                    'id' => $cek_login['data_login']->id,
                    'peran' => $cek_login['data_login']->peran,
                    'nama' => $cek_login['nama_lengkap']
                ];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('pesan', $cek_login['pesan']);
                $this->session->set_flashdata('status', False);
                redirect('login');
            }
        } else {
            $data['title'] = "Halaman Login | SIMDAWA-APP";
            $this->load->view('login/login_view', $data);
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('id');
        redirect('login');
    }
}
