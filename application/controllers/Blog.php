<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	
	public function index()
	{
		$config['phone'] = $this->config->item('phone');
		$config['city'] = $this->config->item('city');
		$config['zip_code'] = $this->config->item('zip_code');
		$config['email'] = $this->config->item('email');
		$config['website'] = $this->config->item('website');
		$config['birthday'] = $this->config->item('birthday');
		$config['name'] = $this->config->item('name');
		
        $this->load->view('head');
		$this->load->view('blog', $config);
        $this->load->view('footer');
	}
}
