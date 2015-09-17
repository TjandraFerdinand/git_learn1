<?php 

class Task2_user extends CI_Model{

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

	
	public function select_db_i($param)
	{
		$data = $param['industry'];
	
		$hold = implode(', ', array_fill(0, count($data), '?'));	
		$sql = <<<EOF
                    SELECT * FROM `industry` WHERE `industry_id` IN ({$hold});
EOF;
	     	$result = $this->db->query($sql,$data)->result_array();
		return $result;
	}
	
	public function select_db_o($param)
        {
                $data = $param['occupation'];
                
                $hold = implode(', ', array_fill(0, count($data), '?'));    
                $sql = <<<EOF
                    SELECT * FROM `occupation` WHERE `occupation_id` IN ({$hold});
EOF;
                $result = $this->db->query($sql,$data)->result_array();
                return $result;
        }


 	public function insert_db_user($param)
        {

        $data[] = $param['username'];
        $data[] = $param['address'];
        $data[] = $param['phone'];
        $data[] = $param['email'];
	
	$this->db->trans_start();
        $sql = <<<EOF
                INSERT INTO `user` (`username`,`address`,`phone`,`email`) VALUES (?,?,?,?);
EOF;

        $res = $this->db->query($sql,$data);
	$last_user_id = $this->db->insert_id($res);

	//INSERT INDUSTRY ARRAY       
        foreach($param['industry'] as $key)
        {
                $sql_user_i_id = <<<EOF
                
                        INSERT INTO `u_i_relation` (`user_id`,`industry_id`) VALUES ('{$last_user_id}', '{$key}');

EOF;
                $user_i_id = $this->db->query($sql_user_i_id);
        }




	//INSERT OCCUPATION ARRAY	
        foreach($param['occupation'] as $key)
	{
		$sql_user_o_id = <<<EOF
		
			INSERT INTO `u_o_relation` (`user_id`,`occupation_id`) VALUES ('{$last_user_id}', '{$key}');

EOF;
		$user_o_id = $this->db->query($sql_user_o_id);
	}
	$this->db->trans_complete();


	
	}	
}
