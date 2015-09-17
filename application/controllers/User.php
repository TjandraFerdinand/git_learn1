<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
 	public function __construct()
    	{
        	parent::__construct();
        	$this->load->helper('form');
                $this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('pagination');
    		$this->load->library('session');
		$this->load->database();
	}

	public function index()
        {
	
		$this->load->model('Task1_ferdi');
		$data['row'] = $this->Task1_ferdi->select_db();
		$this->load->view('task1_index',$data);

		
/*		$sql = <<<EOF
                        select * from `user`;
EOF;
                $result = $this->db->query($sql,$data)->result_array();
print "<pre>";
var_dump($result);

foreach($result as $key => $value){
	echo $key;
	echo "<br>";
} */
	}

	public function create()
        {
		$this->load->view('task1_create');
	}	

	private function _validate(){
		$this->form_validation->set_rules('name', 'Name', 'required|callback_checked_double_name');
		$this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        

	        $this->form_validation->set_message('required', 'please input %s');
                $this->form_validation->set_message('numeric', 'please input numeric %s');
                $this->form_validation->set_message('valid_email', 'please input the valid email  %s');
		$this->form_validation->set_error_delimiters('<div style="color:#FF0000">', '</div>');
	
		if ($this->form_validation->run() == FALSE)
		{
			$res = false;
		}else{
			$res = true;
		}
		return $res;
	}

	public function checked_double_name($str){

		$data[] = $str;
	
		$sql = <<<EOF
			select * from `user` where `name` = ?;
EOF;
		$result = $this->db->query($sql,$data)->result_array();
		
		if($result)
		{
			$this->form_validation->set_message('checked_double_name', 'Value %s already exist. Please Use another name');
			return FALSE;
		}else{
			return TRUE;
		}

	}

	private function _session(){
		$session['name']  = $this->session->userdata('name');
		$session['phone'] = $this->session->userdata('phone');
		$session['email'] = $this->session->userdata('email');
	//	return $session;
		var_dump($session);
		exit;
	}
	
	public function confirm()
        {
		$res = $this->_validate();
		if (!$res)
                {
                //	$this->_session();
		         $this->load->view('task1_create');
                }else{
       			$post['name']  = $this->input->post('name');
                	$post['phone'] = $this->input->post('phone');
                	$post['email'] = $this->input->post('email');
                	$this->load->view('task1_confirm',$post);
        	}
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
		$post['id']    = $this->input->post('id');
		$post['name']  = $this->input->post('name');
                $post['phone'] = $this->input->post('phone');
                $post['email'] = $this->input->post('email');


                $this->load->model('Task1_ferdi');
                $this->Task1_ferdi->update_db($post);
                $this->index();

	}

	public function _404()
	{
		$this->load->view('custome_404');
	}	

}
	
