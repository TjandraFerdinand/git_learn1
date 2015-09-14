<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ferdi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('ferdi');
		$this->load->helper('url');

		
		//$param['username'] = $param['phone'] = $param['email'] = "Testting with model";
		
		//$this->load->model('Ferdi_model');
		//$this->Ferdi_model->inputDB($param);


 	}
        public function send()
        {
                
		$post['username'] = $this->input->post('username');
		$post['name'] 	  = $this->input->post('name');
		$post['password'] = $this->input->post('password');
		$post['gender']   = $this->input->post('gender');
		//var_dump($post);

		$this->load->view('send_ferdi_message',$post);


	}

	public function update()
	{
		$param['username'] = $param['phone'] = $param['email'] = "udpate testing";
                
                $this->load->model('Ferdi_model');
                $this->Ferdi_model->updateDB($param);

	}
}
