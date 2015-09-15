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
	$data[] = $id;
	$sql = <<<EOF
                select * from `user` where `id` = ?;
EOF;
        $result = $this->db->query($sql,$data)->result_array();
        return $result;
	}


	public function insertDB($param)
	{
/*
        $name  = $param['name'];
        $phone = $param['phone'];
        $email = $param['email'];

	 $sql = <<<EOF
            INSERT INTO `user` (`name`,`phone`,`email`) VALUES ('{$name}', '{$phone}' , '{$email}');

EOF;

	$res = $this->db->query($sql);
*/

	$data[] = $param['name'];
	$data[] = $param['phone'];
	$data[] = $param['email'];

	$sql = <<<EOF
            INSERT INTO `user` (`name`,`phone`,`email`) VALUES (?,?,?);

EOF;

        $res = $this->db->query($sql,$data);

    	}
	
	 public function update_db($param)
        {
	/*	
	$id    = $param['id'];
        $name  = $param['name'];
        $phone = $param['phone'];
        $email = $param['email'];

        $sql = <<<EOF
	    UPDATE `user` SET `name` = '{$name}', `phone` = '{$phone}', `email` = '{$email}' WHERE `id` = '{$id}';

EOF;
	$res = $this->db->query($sql);	
*/

	$data[] = $param['name'];
	$data[] = $param['phone'];
	$data[] = $param['email'];
	$data[] = $param['id'];
	
	$sql = <<<EOF
            UPDATE `user` SET `name` = ?, `phone` = ?, `email` = ? WHERE `id` = ?;

EOF;

        $res = $this->db->query($sql,$data);
	
        }
	

}



?>
