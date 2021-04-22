<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	
	public function index()
	{
        $this->load->view('head');
		$this->load->view('blog');
        $this->load->view('footer');
	}
}
