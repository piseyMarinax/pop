<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
		$sth = $this->db->prepare("SELECT * FROM users WHERE log_active = 1 AND
				email = :login AND password = :password");
		$sth->execute(array(
			':login' => $_POST['username'],
			':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
			//':password' => $_POST['password']
		));
		
		$data = $sth->fetch();
		
		$count =  $sth->rowCount();
		if ($count > 0) {
			// login
			Session::init();
            Session::set('user_id', $data['user_id']);
			Session::set('loggedIn', true);
			Session::set('name', $data['name']);
			Session::set('s_photo', $data['s_photo']);
			try{
				date_default_timezone_set("Asia/Bangkok");
				$this->db->insert('tb_loghistory', array(
                        'log_userid' => Session::get('user_id'),
						'log_date'	 => date('Y-m-d'),
						'log_time' 	 => date('Y-m-d H:i:s'),
                        'log_status' => 1
                    ));	
			}catch(PDOException $e){echo $e->getMessage();}
			echo "ok";	
		} else {
			//header('location: ../login');
			//header('location: ../login/error');
		}
		
	}
	
}