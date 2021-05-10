<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Theraphy extends CI_Controller
{


    public function index()
    {
        $config['tphone'] = $this->config->item('tphone');
        $config['tcity'] = $this->config->item('tcity');
        $config['tzip_code'] = $this->config->item('tzip_code');
        $config['theraphymail'] = $this->config->item('theraphymail');
        $config['twebsite'] = $this->config->item('tebsite');
        $config['tbirthday'] = $this->config->item('tbirthday');
        $config['tname'] = $this->config->item('tname');
        $config['name'] = $this->config->item('name');
        $config['tfacebook'] = $this->config->item('tfacebook');
        $config['tinsta'] = $this->config->item('tinsta');

        $this->load->view('theraphy/head');
        $this->load->view('theraphy/header', $config);
        $this->load->view('theraphy/slider', $config);
        $this->load->view('theraphy/info', $config);
        $this->load->view('theraphy/types', $config);
        $this->load->view('theraphy/extra', $config);
        $this->load->view('theraphy/offers', $config);
        /* $this->load->view('theraphy/customers', $config); */
        $this->load->view('theraphy/discount', $config);
        $this->load->view('theraphy/footer', $config);
        $this->load->view('theraphy/libraries');
    }

    public function About(){
        $config['tphone'] = $this->config->item('tphone');
        $config['tcity'] = $this->config->item('tcity');
        $config['tzip_code'] = $this->config->item('tzip_code');
        $config['theraphymail'] = $this->config->item('theraphymail');
        $config['twebsite'] = $this->config->item('tebsite');
        $config['tbirthday'] = $this->config->item('tbirthday');
        $config['tname'] = $this->config->item('tname');
        $config['name'] = $this->config->item('name');
        $config['tfacebook'] = $this->config->item('tfacebook');
        $config['tinsta'] = $this->config->item('tinsta');
        $this->load->view('theraphy/head');
        $this->load->view('theraphy/header', $config);
        $this->load->view('theraphy/about', $config);
        $this->load->view('theraphy/discount', $config);
        $this->load->view('theraphy/footer', $config);
        $this->load->view('theraphy/libraries');

    }
}
