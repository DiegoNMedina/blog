<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Music extends CI_Controller
{
    public function index()
    {
        $config['mphone'] = $this->config->item('mphone');
        $config['mcity'] = $this->config->item('mcity');
        $config['mzip_code'] = $this->config->item('mzip_code');
        $config['memail'] = $this->config->item('memail');
        $config['musicemail'] = $this->config->item('musicemail');
        $config['mwebsite'] = $this->config->item('mwebsite');
        $config['mbirthday'] = $this->config->item('mbirthday');
        $config['mname'] = $this->config->item('mname');
        $config['author'] = $this->config->item('author');
        $this->load->view('music/head');
        $this->load->view('music/header');
        $this->load->view('music/slider', $config);
        $this->load->view('music/about', $config);
        $this->load->view('music/youtube');
        $this->load->view('music/tracks');
        $this->load->view('music/gallery');
        $this->load->view('music/contact', $config);
        $this->load->view('music/footer', $config);
        $this->load->view('music/libraries');
    }

    public function about(){
        $config['mphone'] = $this->config->item('mphone');
        $config['mcity'] = $this->config->item('mcity');
        $config['mzip_code'] = $this->config->item('mzip_code');
        $config['memail'] = $this->config->item('memail');
        $config['musicemail'] = $this->config->item('musicemail');
        $config['mwebsite'] = $this->config->item('mwebsite');
        $config['mbirthday'] = $this->config->item('mbirthday');
        $config['mname'] = $this->config->item('mname');
        $config['author'] = $this->config->item('author');
        $config['title'] = 'About Me';
        $this->load->view('music/head');
        $this->load->view('music/header');
        $this->load->view('music/bradcam', $config);
        $this->load->view('music/about', $config);
        $this->load->view('music/gallery');
        $this->load->view('music/footer');
        $this->load->view('music/libraries');
    }

    public function tracks(){
        $config['mphone'] = $this->config->item('mphone');
        $config['mcity'] = $this->config->item('mcity');
        $config['mzip_code'] = $this->config->item('mzip_code');
        $config['memail'] = $this->config->item('memail');
        $config['musicemail'] = $this->config->item('musicemail');
        $config['mwebsite'] = $this->config->item('mwebsite');
        $config['mbirthday'] = $this->config->item('mbirthday');
        $config['mname'] = $this->config->item('mname');
        $config['author'] = $this->config->item('author');
        $config['title'] = 'My Tracks';
        $this->load->view('music/head');
        $this->load->view('music/header');
        $this->load->view('music/bradcam', $config);
        $this->load->view('music/tracks');
        $this->load->view('music/youtube');
        $this->load->view('music/gallery');
        $this->load->view('music/footer');
        $this->load->view('music/libraries');

    }
}
