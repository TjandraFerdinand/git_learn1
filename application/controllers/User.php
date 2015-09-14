<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
 	public function __construct()
    	{
        	parent::__construct();
        	$this->load->helper('form');
                $this->load->helper('url');
    	}

	public function index()
        {
	
		$this->load->model('Task1_ferdi');
		$data['row'] = $this->Task1_ferdi->select_db();
		$this->load->view('task1_index',$data);
        }

	public function create()
        {
        	$this->load->view('task1_create');
	}

	public function confirm()
        {
       		$post['name']  = $this->input->post('name');
                $post['phone'] = $this->input->post('phone');
                $post['email'] = $this->input->post('email');
                $this->load->view('task1_confirm',$post);
        }

	public function register()
        {
        	$post['name']  = $this->input->post('name');
                $post['phone'] = $this->input->post('phone');
                $post['email'] = $this->input->post('email');
       		$this->load->model('Task1_ferdi');
		$this->Task1_ferdi->insertDB($post); 
		$this->complete();
	}

	public function complete()
        {
		$this->load->view('task1_complete');
        
        }
	
	public function detail($id)
	{
		$this->load->model('Task1_ferdi');
		$data = $this->Task1_ferdi->get_user_detail($id);
                $assign['user_detail_info'] = $data[0];
                $this->load->view('task1_edit',$assign);
	}
	
	public function edit()
	{
	}
	

}
	
