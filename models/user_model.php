<?php

class User_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	//======================================blog select menu==================================================================================
	public function selectmenuSuperadmin()
	{
		$selectmenu = $this->db->select("SELECT * FROM tb_mainmenu WHERE mm_status = 1 ORDER BY mm_id ASC");
				foreach($selectmenu as $key => $value){
				$selectmenu[$key]['smenu'] = $this->db->select("SELECT * FROM tb_menu_r_form WHERE m_status = 1 AND m_mm_id =".$value['mm_id']);
				}
		return $selectmenu;
				
	}
	
	//=================================end blog select menu =================================================================================

/*
	public function userlist()
	{				
		$selectedemp = $this->db->select("SELECT * FROM tb_users u
		
						LEFT JOIN tb_staff s ON u.user_id = s.s_userid
						
						LEFT JOIN tb_qual q ON s.s_qualifications = q.q_id
						LEFT JOIN tb_prefix pre ON s.s_code_prefix = pre.pre_id
						LEFT JOIN tb_stafftype st ON s.staff_typeid = st.st_id
						LEFT JOIN tb_jobtype jt ON s.s_jobtypeid = jt.job_id
						LEFT JOIN tb_staff_civilstatus cs ON s.s_civil_status = cs.st_csid
						LEFT JOIN tb_countries c ON s.s_nationid = c.coun_id
						WHERE u.log_active = 1 AND s_trash = 0 ORDER BY u.user_id ASC");
		
		foreach($selectedemp as $key => $value) {
			$selectedemp[$key]['position'] = $this->db->select("SELECT * FROM tb_staff s LEFT JOIN tb_staff_pos_his ph ON s.s_id = ph.p_staff_id
						LEFT JOIN tb_dept d ON ph.p_deptid = d.deptid
						LEFT JOIN tb_position pos ON ph.p_posid = pos.pos_id
						WHERE (ph.p_end_work IS NULL OR ph.p_end_work = '1970-01-01') AND ph.p_staff_id = ".$value['s_id']);	
        }
        return $selectedemp;
		
	} */
	public function menulisttouser()
	{
		$selectmenu = $this->db->select("SELECT * FROM tb_mainmenu WHERE mm_status = 1 ORDER BY mm_id ASC");
		foreach($selectmenu as $key => $value) {
			$selectmenu[$key]['smenu'] = $this->db->select("SELECT * FROM tb_menu_r_form WHERE m_mm_id = ".$value['mm_id']." AND m_status = 1");	
        }
		return $selectmenu;
	}
	public function userlist()
	{				
		$selectedemp = $this->db->select("SELECT * FROM tb_users u LEFT JOIN tb_role r ON u.s_roleid_insys = r.roleid
						WHERE u.log_active = 1 AND u_trash = 0 ORDER BY u.user_id ASC");
        return $selectedemp;
		
	}
	public function editData($id){
		return $this->db->select("SELECT u.*,s.s_codeurl FROM  tb_users u
		LEFT JOIN tb_staff s ON u.user_id = s.s_userid 
		WHERE s_codeurl = '$id'");
	}

    public function SingleStaff($codeurl)
	{
		return $this->db->select("SELECT * FROM tb_staff s
						LEFT JOIN tb_users u ON s.s_userid = u.user_id
						LEFT JOIN tb_qual q ON s.s_qualifications = q.q_id
						LEFT JOIN tb_prefix pre ON s.s_code_prefix = pre.pre_id
						LEFT JOIN tb_stafftype st ON s.staff_typeid = st.st_id
						LEFT JOIN tb_jobtype jt ON s.s_jobtypeid = jt.job_id
						LEFT JOIN tb_staff_civilstatus cs ON s.s_civil_status = cs.st_csid
						WHERE u.ustatus != 1 AND s_trash = 0 AND s.s_codeurl = :codeurl",
						array('codeurl' => @$codeurl));
	}
    public function stafflist()
	{
		$selectedemp = $this->db->select("SELECT * FROM tb_staff s
						LEFT JOIN tb_users u ON s.s_userid = u.user_id
						LEFT JOIN tb_qual q ON s.s_qualifications = q.q_id
						LEFT JOIN tb_prefix pre ON s.s_code_prefix = pre.pre_id
						LEFT JOIN tb_stafftype st ON s.staff_typeid = st.st_id
						LEFT JOIN tb_jobtype jt ON s.s_jobtypeid = jt.job_id
						LEFT JOIN tb_staff_civilstatus cs ON s.s_civil_status = cs.st_csid
						LEFT JOIN tb_countries c ON s.s_nationid = c.coun_id
						WHERE u.log_active != 1 AND s_trash = 0 ORDER BY u.user_id ASC");
		
		foreach($selectedemp as $key => $value) {
			$selectedemp[$key]['position'] = $this->db->select("SELECT * FROM tb_staff s LEFT JOIN tb_staff_pos_his ph ON s.s_id = ph.p_staff_id
						LEFT JOIN tb_dept d ON ph.p_deptid = d.deptid
						LEFT JOIN tb_position pos ON ph.p_posid = pos.pos_id
						WHERE (ph.p_end_work IS NULL OR ph.p_end_work = '1970-01-01') AND ph.p_staff_id = ".$value['s_id']);	
        }
        return $selectedemp;	
	}
	public function userSingleList($userid)
	{
		return $this->db->select('SELECT userid, login, role FROM user WHERE userid = :userid', array(':userid' => $userid));
	}
	public function useractive($id){
		//print_r($id);exit;
		$unactive = $this->db->select("SELECT u.*,s.s_codeurl FROM  tb_users u
		LEFT JOIN tb_staff s ON u.user_id = s.s_userid 
		WHERE s_codeurl = '$id'");
		if($unactive[0]['su_pass'] != '' && $unactive[0]['log_active'] == 1){
		   $postData = array(
				'log_active' =>0
	);		
	$this->db->update('tb_users', $postData, " user_id = {$unactive[0]['user_id']}");
			
		}
	}
	public function userUnactive($id){
		$unactive = $this->db->select("SELECT u.*,s.s_codeurl FROM  tb_users u
		LEFT JOIN tb_staff s ON u.user_id = s.s_userid 
		WHERE s_codeurl = '$id'");
		if($unactive[0]['su_pass'] == '' OR $unactive[0]['log_active'] == 0){
			//echo 12345; exit;
		   $postData = array(
				'su_pass' => Hash::create('sha256', 'admin', HASH_PASSWORD_KEY),
				'log_active' =>1
	);		
	$this->db->update('tb_users', $postData, " user_id = {$unactive[0]['user_id']}");
			
		}
		//return $unactive;
	}
	public function create($data)
	{
		$this->db->insert('user', array(
			'login' => $data['login'],
			'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		));
	}
	
	public function editSave($data)
	{
		$postData = array(
			'login' => $data['login'],
			'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		);
		
		$this->db->update('user', $postData, "`userid` = {$data['userid']}");
	}
	
	public function delete($userid)
	{
		$result = $this->db->select('SELECT role FROM user WHERE userid = :userid', array(':userid' => $userid));

		if ($result[0]['role'] == 'owner')
		return false;
		
		$this->db->delete('user', "userid = '$userid'");
	}
	public function roleuser()
	{
		return $this->db->select('SELECT * FROM tb_role WHERE roleid != 1 AND r_status = 1 ORDER BY roleid ASC');
	}
	////////////////////ROLe ////////////////////////////////////
    public function ListRole()
	{
		return $this->db->select("SELECT * FROM tb_role WHERE r_status = 1 ORDER BY roleid DESC");
	}
        
    public function addRole()
	{
		$result = false;$message = "Error";$roleid = '';
        @$roleid = $_POST['roleid'];
        try{
            if($roleid > 0){
                   $postData = array(
                            'rolename' => $_POST['rolename'],
                            'roledescription' => $_POST['roledescription']); 
                    $this->db->update('tb_role', $postData, 
                        "`roleid` = '{$roleid}'");
                        $result = true;
                        $message = "&nbsp;  Department has been updated successful!";
            }else{
               $sth = $this->db->prepare("SELECT rolename
                    FROM tb_role WHERE r_status = 1 AND
                    rolename = :rolename ");
                $sth->execute(array(
                    ':rolename' => $_POST['rolename']
                ));
                $check = $sth->fetch();

                $count =  $sth->rowCount();
                if ($count > 0){
                    $message = "&nbsp; Department name has already exist!";
                }else{
                    $data = array(
                        'rolename' => $_POST['rolename'],
                        'roledescription' => $_POST['roledescription']);

                    $this->db->insert('tb_role', array(
                        'rolename' => $data['rolename'],
                        'roledescription' => $data['roledescription']
						
                    ));
                    $result = true;
                    $message = "&nbsp;  Department has created successful!";
                } 
            }
        }catch (PDOException $e){echo "Error: " . $e->getMessage();}
        echo json_encode(array('result'=>$result,'message'=>$message));
	}
        //////////////Select Edit Role ///////////////////
    public function roletoedit($id)
    {
        return $this->db->select('SELECT * FROM tb_role WHERE roleid = :roleid',
                    array('roleid' => $id));
    }
	public function createpwduser()
	{
		$result = false;$message = "Error"; $userid = $_POST['txtempid'];
		try{
			$data = array(
				'user_id' 	=> $userid,
				'addedby' 	=> $_POST['txtaddedby'],
				'spwd'		=> $_POST['su_pass'],
			
				'boxid' 	=> $_POST['boxes'],
				'sboxid' 	=> $_POST['sboxes']
			);
			$cbox = 0;
			foreach($data['boxid'] as $key => $vari){
				if(!empty($vari)){
					$cbox++;
				}
			}
			if($cbox > 0){
				$postData = array(
					'log_active' 		=> '1',
					's_roleid_insys' 	=> $_POST['roleid'],
					'su_pass'			=> Hash::create('sha256',($_POST['su_pass']), HASH_PASSWORD_KEY),
				); 
				$this->db->update('tb_users', $postData, 
					"`user_id` = '{$userid}'");
				foreach($data['boxid'] as $key => $vari){
					//echo "box_".$vari."<br/>";
					$last_mmid = $this->db->insert('tb_permissionmenulist', array(
						'pmu_mmid' 		=> $vari,
						'pmu_userid' 	=> $data['user_id'],
                        'addedby' 		=> $data['addedby'],
                        'date_added' 	=> date('Y-m-d')
                    ));
					foreach($data['sboxid'] as $key => $svari){
						$sbox = explode("__", $svari);
						if($vari == $sbox[0]){
							//echo $vari." => ".$sbox[1]."<br/>";
							$this->db->insert('tb_permissionsubmenulist', array(
								'psmu_pmuid'	=> $last_mmid,
								'psmu_mmid'		=> $vari,
								'psmu_smid'		=> $sbox[1],
								'addedby'		=> $data['addedby'],
								'date_added' 	=> date('Y-m-d')
							));
						}
					}
				}	
				$result = true;
				$message = "&nbsp;  User has created successful!";
			}else{
				$message = "Please select menu for user!";
			}
		}catch(PDOException $e){$message = "Error: " . $e->getMessage();}
		echo json_encode(array('result'=>$result,'message'=>$message));
	}
    
}