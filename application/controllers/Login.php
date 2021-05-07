<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login/index');
    }

    public function sign_in(){
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $result = $this->data->login($password, $name);
        if ($result) {
            $data = array(
                    'name' => $result['name'],
                    'type' => $result['type'],
                );
            $this->session->set_userdata($data);
            $correct = base_url('music/');
            redirect($correct, 'refresh');
        } else {
            echo "<script>alert('sdfsdfsd.$result');</script>";
            $error = base_url('login/');
            redirect($error, 'refresh');
        }
    }
}
