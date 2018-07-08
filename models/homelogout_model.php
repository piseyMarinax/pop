<?php

class Homelogout_Model extends Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	public function logout()
	{
		try{
				date_default_timezone_set("Asia/Bangkok");
				$this->db->insert('tb_loghistory', array(
                        'log_userid' => Session::get('user_id'),
						'log_date'	 => date('Y-m-d'),
						'log_time' 	 => date('Y-m-d H:i:s'),
                        'log_status' => 2
                    ));	
			}catch(PDOException $e){echo $e->getMessage();}
		Session::destroy();
		header('location: ' . URL );
		exit;
	}

}