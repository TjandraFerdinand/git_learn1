<?php

class Task2_ferdi extends CI_Model{

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }
	
	public function select_u_db()
        {
                $sql = <<<EOF
   
                        SELECT DISTINCT u.id ,u.username  FROM `user` as u 
                        INNER JOIN u_i_relation as u_i
                           ON u.id = u_i.user_id
                        INNER JOIN u_o_relation as u_o
                           ON u.id = u_o.user_id 
                        WHERE 
                           u_i.user_id is not null
                           AND
                           u_o.user_id is not null;
EOF;
      
                $result = $this->db->query($sql)->result_array();
                return $result;
        }

	public function select_u_db_detail($id)
	{
	$data[] = $id;
	 
	$sql =  <<<EOF
                SELECT *  FROM `user` WHERE `id` = ?;
EOF;
        $res = $this->db->query($sql, $data)->result_array();
          return $res;
	
	
	
	}
	public function select_i_db_detail($id)
        {
        $data[] = $id;
         
        $sql =  <<<EOF
		SELECT b.industry_name FROM u_i_relation AS a
                INNER JOIN industry AS b
                   ON a.industry_id = b.industry_id
                 WHERE a.user_id = ?;

EOF;
        $res = $this->db->query($sql, $data)->result_array();
          return $res;
        
        
        
        }

	public function select_o_db_detail($id)
        {
        $data[] = $id;
        $sql =<<<EOF
        	SELECT b.occupation_name FROM u_o_relation AS a
		INNER JOIN occupation AS b
		   ON a.occupation_id = b.occupation_id 
		 WHERE a.user_id = ?;
EOF;
        $res = $this->db->query($sql, $data)->result_array();
        return $res; 
    
        

        }

	



	public function select_i_db()
        {
        $sql = <<<EOF
                select * from `industry`;
EOF;
        $result = $this->db->query($sql)->result_array();
        return $result;

        }
	
	public function insert_i_db($param)
	{
		$data[] = $param['a_i_name'];
		$sql = <<<EOF
        	    INSERT INTO `industry` (`industry_name`) VALUES (?);

EOF;
		$res = $this->db->query($sql,$data);

	}

	public function select_o_db()
        {
        $sql = <<<EOF
                select * from `occupation`;
EOF;
        $result = $this->db->query($sql)->result_array();
        return $result;

        }

        public function insert_o_db($param)
        {
                $data[] = $param['a_o_name'];
                $sql = <<<EOF
                    INSERT INTO `occupation` (`occupation_name`) VALUES (?);

EOF;
                $res = $this->db->query($sql,$data);

        }
	
	public function insert_db_user($param)
        {

        $data[] = $param['username'];
        $data[] = $param['address'];
        $data[] = $param['phone'];
        $data[] = $param['email'];
	print "<pre>";
        var_dump($param['industry']);
        $param['occupation'];

        $sql = <<<EOF
		INSERT INTO `user` (`username`,`address`,`phone`,`email`) VALUES (?,?,?,?);
EOF;

        $res = $this->db->query($sql,$data);
	
	
        }

}
?>
