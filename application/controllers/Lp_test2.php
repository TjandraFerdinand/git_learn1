<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lp_test2 extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('form');
                $this->load->helper('url');
                $this->load->library('form_validation');
               // $this->load->library('session');
                $this->load->database();
        }

	public function login()
	{
		$this->load->view('task2_lp/login.php');
	}

	public function cek_login()
	{
	$this->load->library('session');
		$username = $this->input->post('username');
                $password = $this->input->post('password');

		$this->load->model('Task2_login');
		$ret = $this->Task2_login->is_user($username, $password);
		if($ret)
		{
		 	$admin_id = array('admin_id'  => $ret[0]['id']);
			$this->session->set_userdata($admin_id);
                        
			//$this->load->view('task2_lp/admin_session');
			header("location:".base_url().'task2/admin/index');
		}else{

			$this->load->view('task2_lp/login');
		}
	
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('task2_lp/login');
	}

	public function index()
	{
		$this->load->model('Task2_ferdi');
                $data['row_i'] = $this->Task2_ferdi->select_i_db();
                $data['row_o'] = $this->Task2_ferdi->select_o_db();
		$this->load->view('task2_lp/user_index',$data);
	}

	public function user_confirm()
	{

 		$res = $this->_validate_user();
                if (!$res)
                {
                	$this->index();

		}else{
			$post['username'] = $this->input->post('username');
                	$post['address'] = $this->input->post('address');
   	                $post['phone'] = $this->input->post('phone');
                	$post['email'] = $this->input->post('email');
                	$post['industry'] = $this->input->post('industry');
                	$post['occupation'] = $this->input->post('occupation');
		
			$this->load->model('Task2_user');
			$post['data_i'] = $this->Task2_user->select_db_i($post);
			$post['data_o'] = $this->Task2_user->select_db_o($post);
		
			$this->load->view('task2_lp/user_confirm',$post);			
		}	
	}
 	private function _validate_user()
        {
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
                $this->form_validation->set_rules('email', 'E-meil', 'required|valid_email');
                $this->form_validation->set_rules('industry[]', 'Industry', 'required');
                $this->form_validation->set_rules('occupation[]', 'Occupation', 'required');
                
		$this->form_validation->set_error_delimiters('<div style="color:#FF0000">', '</div>');
                if ($this->form_validation->run() == FALSE)
                {
                        $res = false;
                }else{
                        $res = true;
                }
                return $res;

        }	
	public function user_register()
	{
/*
$t = $this->input->post();
print "<pre>";
var_dump($t);
exit;
*/		 $post['username'] = $this->input->post('username');
                $post['address'] = $this->input->post('address');
                $post['phone'] = $this->input->post('phone');
                $post['email'] = $this->input->post('email');
                $post['industry'] = $this->input->post('industry');
                $post['occupation'] = $this->input->post('occupation');
		
		$this->load->model('Task2_user');
                $this->Task2_user->insert_db_user($post);
                $this->complete();
	}
	
	private function _validate()
	{
		$this->form_validation->set_rules('a_i_name', 'Industry Name', 'required');
		$this->form_validation->set_error_delimiters('<div style="color:#FF0000">', '</div>');
		if ($this->form_validation->run() == FALSE)
                {
                        $res = false;
                }else{
                        $res = true;
                }
                return $res;

	}
	
	 private function _validate_o()
        {     
	 	  $this->form_validation->set_rules('a_o_name', 'Occupation Name', 'required');
                $this->form_validation->set_error_delimiters('<div style="color:#FF0000">', '</div>');
                if ($this->form_validation->run() == FALSE)
                {
                        $res = false;
                }else{
                        $res = true;
                }
                return $res;

        }
	
	public function admin_list()
        {
	$this->load->library('session');
                $session_id = $this->session->userdata('admin_id');
                if ($session_id) {
                   echo "a";
                } else {

    echo "b";
                }

		
                $this->load->model('Task2_ferdi');
                $data['row_i'] = $this->Task2_ferdi->select_i_db();
                $data['row_o'] = $this->Task2_ferdi->select_o_db();
                $data['row_u'] = $this->Task2_ferdi->select_u_db();
	//print "<pre>";
	//var_dump($data);
	//exit;	
	$this->load->view('task2_lp/admin_list',$data );
        }
	



	public function admin_u_detail($id)
	{
		$this->load->model('Task2_ferdi');
		$data['row'] = $this->Task2_ferdi->select_u_db_detail($id);
		$data['row_i'] = $this->Task2_ferdi->select_i_db_detail($id);
		$data['row_o'] = $this->Task2_ferdi->select_o_db_detail($id);
//print "<pre>";  
//var_dump($data);
//exit;

		//$assign['row'] = $data[0];
		//$assign['row_i'] = $data_i[0];
		//$assign['row_o'] = $data_o[0];
//print "<pre>";
//var_dump($assign);
//exit;

		$this->load->view('task2_lp/admin_list_detail',$data);
	}	
	
	public function admin_i_create()
	{
	 	$this->load->view('task2_lp/admin_i_create');
	}

	public function admin_o_create()
        {
                $this->load->view('task2_lp/admin_o_create');
        }

	
	public function admin_i_confirm()
        {
		$res = $this->_validate();
                if (!$res)
                {
                         $this->load->view('task2_lp/admin_i_create');
                }else{
			$post['a_i_name'] = $this->input->post('a_i_name');
                	$this->load->view('task2_lp/admin_i_confirm',$post);
		}
	}

	public function admin_o_confirm()
        {
                $res = $this->_validate_o();

                if (!$res)
                {
                         $this->load->view('task2_lp/admin_o_create');
                }else{
                        $post['a_o_name'] = $this->input->post('a_o_name');
                        $this->load->view('task2_lp/admin_o_confirm',$post);
                }
        }


	public function admin_i_register()
	{
		$post['a_i_name'] = $this->input->post('a_i_name');
                $this->load->model('Task2_ferdi');
                $this->Task2_ferdi->insert_i_db($post);
                $this->complete();
	}

	public function admin_o_register()
        {
                $post['a_o_name'] = $this->input->post('a_o_name');
                $this->load->model('Task2_ferdi');
                $this->Task2_ferdi->insert_o_db($post);
                $this->complete();
        }

	
	public function complete()
        {
                $this->load->view('task2_lp/task2_admin_complete');

        }

}
