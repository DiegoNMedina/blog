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
		$this->load->view('blog/head');
		$this->load->view('blog/header', $config);
		$this->load->view('blog/slider', $config);
		$this->load->view('blog/about', $config);
		$this->load->view('blog/resume');
		$this->load->view('blog/services');
		$this->load->view('blog/skills');
		$this->load->view('blog/extra');
		$this->load->view('blog/contact', $config);
		$this->load->view('blog/footer', $config);
		$this->load->view('blog/libraries');
	}

	public function skills(){
		$table = 'blog';
		$name = $this->input->post('Name');
		$progress = $this->input->post('Progress');
		$code = 
			'<div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>'.$name.'</h3>
                    <div class="progress">
                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="'.$progress. '" aria-valuemin="0" aria-valuemax="100" style="width:' . $progress . '%">
                            <span>'.$progress.'%</span>
                        </div>
                    </div>
                </div>
            </div>';
		$data = array(
			'Type' => 'Skill',
			'Code' => $code,
		);
		$this->data->insert($table, $data);
	}
}
