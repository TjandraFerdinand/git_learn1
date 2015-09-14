<?php

class Ferdi_model extends CI_Model{

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function inputDB($param){
 	
	$name  = $param['username'];
	$phone = $param['phone'];
	$email = $param['email'];
    
 	$sql = <<<EOF
            INSERT INTO `user` (`name`,`phone`,`email`) VALUES ('{$name}', '{$phone}' , '{$email}');

EOF;
        $res = $this->db->query($sql);	
	var_dump($res);

    }

    public function updateDB($param){

	$name  = $param['username'];
        $phone = $param['phone'];
        $email = $param['email'];

	$sql = <<<EOF
		Update `user` SET `name`= '{$name}', `phone` =  '{$phone}', `email` = '{$email}' WHERE `id` = 1;
EOF;
        $res = $this->db->query($sql);
        var_dump($res);

    }	




}



?>
