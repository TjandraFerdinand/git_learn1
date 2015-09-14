<?php

class Task1_ferdi extends CI_Model{

	public function __construct()
	{
		parent::__construct();
     	   	$this->load->database();
   	}

	public function select_db()
	{
	$sql = <<<EOF
		select * from `user`;
EOF;
	$result = $this->db->query($sql)->result_array();
	return $result;

        }
	
	public function get_user_detail($id)
	{
	$sql = <<<EOF
                select * from `user` where `id` = '{$id}';
EOF;
        $result = $this->db->query($sql)->result_array();
        return $result;
	}


	public function insertDB($param)
	{

        $name  = $param['name'];
        $phone = $param['phone'];
        $email = $param['email'];

        $sql = <<<EOF
            INSERT INTO `user` (`name`,`phone`,`email`) VALUES ('{$name}', '{$phone}' , '{$email}');

EOF;
        $res = $this->db->query($sql);

    	}
	

}



?>
