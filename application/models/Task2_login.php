<?php

class Task2_login extends CI_Model{

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }
	
	public function is_user($user,$pass)
	{
		$data[] = $user;
		$data[] = $pass;
		
		$sql=<<<EOF
		SELECT * FROM `admin` where `username` = ? and `password` = ?;

EOF;
		$result = $this->db->query($sql,$data)->result_array();
                if (empty($result)) {
                     return false;
                } else {
                     return $result;
               }              
	}
	





}
