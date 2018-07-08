<?php
class Pagemanager_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function pagetypeList()
	{
		return $this->db->select("SELECT * FROM tb_pagetype ORDER BY ptid DESC");	
	}
	public function pagetypeAdd()
	{
		$message = "Error";		
		try{
			$sth = $this->db->prepare("SELECT pt_name
                    FROM tb_pagetype WHERE pt_status = 1 AND
                    pt_name = :name ");
                $sth->execute(array(
                    ':name' => $_POST['pagename']
                ));
                $check = $sth->fetch();

                $count =  $sth->rowCount();
                if ($count > 0){
					$message = "exist";
                    //$message = "<span style='color:#AF0E10;'><i class='fa fa-info-circle'></i> This page name is already exist!";
					header('location: ' . URL . 'pagemanager/pagetype?message='.$message);
                }else{
                    $data = array(
                        'name' => $_POST['pagename'],
                        'status' => $_POST['cblstatus'],
						'des' => $_POST['des']);

                    $this->db->insert('tb_pagetype', array(
                        'pt_name' => $data['name'],
						'pt_status' => $data['status'],
                        'pt_des' => $data['des']
						
                    ));
                    //$result = true;
					$message = "success";
                    //$message = "<span style='color:#122997;'><i class='fa fa-info-circle'></i> Page name has created successful!</span>";
					header('location: ' . URL . 'pagemanager/pagetype?message='.$message);
                } 
		}catch (PDOException $e){ echo "Error: " . $e->getMessage();}
	}
	public function pageSingle($id)
	{
		return $this->db->select("SELECT * FROM tb_pagetype WHERE ptid = ".$id);	
	}
	public function PageTypeEditSave()
	{
		$message = "Error"; $ptid = $_POST['ptid'];
		try{
					
			$postData = array(
					'pt_name' 	=> $_POST['pagename'],
					'pt_status' => $_POST['cblstatus'],
					'pt_des' 	=> $_POST['des']);

				$this->db->update('tb_pagetype', $postData, 
					"`ptid` = '{$ptid}'");
				$message = "successUpdated";
			header('location: ' . URL . 'pagemanager/pagetype?message='.$message);	
		}catch (PDOException $e){ $message = "Error".$e->getMessage();}
	}
	
	
	//blog menu
	public function MenuList()
	{
		return $this->db->select("SELECT * FROM table_menu ORDER BY ordering ASC");	
	}
	public function PageListMenu()
	{
		return $this->db->select("SELECT * FROM tb_pagetype WHERE pt_status = 1");
	}
	public function menudataAdd()
	{
		$result = false;$message = "Error";
		$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
		$path = 'public/menu/'; // upload image to directory
        try{
			if((rtrim($_POST['menuname']) == '') OR ($_POST['menuname'] == ''))
			{
				$message = "Menu Name (KH) is required!";
			}else if(rtrim($_POST['menunameen']) == ''){
				$message = "Menu Name (EN) is required!";
			}else if(rtrim($_POST['menuurl']) == ''){
				$message = "Menu URL is required!";
			}else{/*
				if($mmid > 0){
					   $postData = array(
								'mm_name' 			=> $_POST['menuname'],
								'mm_url' 			=> $_POST['menu_url'],
								'mm_deptid' 		=> $_POST['mdeptid'],
								'mm_status' 		=> $_POST['mm_status'],
								'awesome_icon' 		=> $_POST['menu_icon'],
								'mm_description' 	=> $_POST['menu_detail']); 
						$this->db->update('tb_mainmenu', $postData, 
							"`mm_id` = '{$mmid}'");
							$result = true; $message = "&nbsp;  Menu has been updated successful!";
				}else{*/
				   $sth = $this->db->prepare("SELECT mname
							FROM table_menu WHERE mstatus = 1 AND
							mname = :name ");
						$sth->execute(array(
							':name' => $_POST['menuname']
						));
						
					$check = $sth->fetch();
					$count =  $sth->rowCount();
					if ($count > 0){
						$message = "&nbsp; Menu name has already exist!";
					}else{
						$data = array(
							'mname' => $_POST['menuname'],
							'nameen' => $_POST['menunameen'],
							'mphoto' => $_FILES['filephoto'],
							'murl' => $_POST['menuurl'],
							'ordering' => $_POST['txtordering'],
							'mstatus' => $_POST['cblstatus'],
							'created_by' => $_POST['user_id'],
							'mpagetypeid' => $_POST['cblpagetype'],
							'deskh' => $_POST['deskh'],
							'mdes' => $_POST['des'],
						);
						$img = $data['mphoto'];
						$photo = $img['name'];
						$tmp = $img['tmp_name'];
						if(!empty($img['tmp_name'])){
							// get uploaded file's extension
							$ext = strtolower(pathinfo($photo, PATHINFO_EXTENSION));
							// can upload same image using rand function
							$final_image = rand(1000,1000000).$photo;
							// check's valid format
							if(in_array($ext, $valid_extensions)) 
							{					
								$path = $path.strtolower($final_image);
								if(move_uploaded_file($tmp,$path)) 
								{
									$this->db->insert('table_menu', array(
										'mname' => $data['mname'],
										'mnameen' => $data['nameen'],
										'murl' => $data['murl'],
										'mstatus' => $data['mstatus'],
										'ordering' => $data['ordering'],
										'mdeskh' => $data['deskh'],
										'mdes' => $data['mdes'],
										'mpagetypeid' => $data['mpagetypeid'],
										'created_by' => $data['created_by'],
										'created_at' => date('Y-m-d'), // use GMT aka UTC 0:00  H:i:s
										'mphoto' => strtolower($final_image)
									));							
								}									
							} else { $message = "&nbsp; Photo icon ivalid!"; 
								//header('location: ' . URL . 'pagemanager/menu?message='.$message);
							}
							//$message = "success";
							//header('location: ' . URL . 'pagemanager/menu?message='.$message);
							$result = true; $message = "&nbsp;  Data has created successful!";
						}else{
							$this->db->insert('table_menu', array(
										'mname' => $data['mname'],
										'mnameen' => $data['nameen'],
										'murl' => $data['murl'],
										'mstatus' => $data['mstatus'],
										'ordering' => $data['ordering'],
										'mdeskh' => $data['deskh'],
										'mdes' => $data['mdes'],
										'mpagetypeid' => $data['mpagetypeid'],
										'created_by' => $data['created_by'],
										'created_at' => date('Y-m-d') // use GMT aka UTC 0:00  H:i:s
									));	
							//$message = "success";
							//header('location: ' . URL . 'pagemanager/menu?message='.$message);
							$result = true; $message = "&nbsp;  Data has created successful!";	
						}
						
					} 
				//}end else of if mid > 0
			}	
        }catch (PDOException $e){echo "Error: " . $e->getMessage();}
        echo json_encode(array('result'=>$result,'message'=>$message));
	}
	public function menuSingle($id)
	{
		return $this->db->select("SELECT * FROM table_menu m
								LEFT JOIN tb_pagetype p ON m.mpagetypeid = p.ptid
								WHERE mid = ".$id);	
	}
	public function menuEditSave()
	{
		$message = "Error";
		try{
			$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
			$path = 'source/menu/'; // upload image to directory
			
			if(empty($_POST['menuname'])){
				$message = "empty";
				header('location: ' . URL . 'pagemanager/menu?message='.$message);
			}else if(empty($_POST['menuurl'])){
				$message = "empty";
				header('location: ' . URL . 'pagemanager/menu?message='.$message);
			}else{
				
					
					$data = array(
							'mid' => $_POST['mid'],
							'mname' => $_POST['menuname'],
							'nameen' => $_POST['menunameen'],
							'murl' => $_POST['menuurl'],
							'mphoto' => $_FILES['filephoto'],
							'ordering' => $_POST['txtordering'],
							'mstatus' => $_POST['cblstatus'],
							'mpagetypeid' => $_POST['cblpagetype'],
							'deskh' => $_POST['deskh'],
							'mdes' => $_POST['des'],
						);
					$mimg = $data['mphoto'];
					$photo = $mimg['name'];
					$tmp = $mimg['tmp_name'];
					if(!empty($mimg['tmp_name'])){
						// get uploaded file's extension
						$ext = pathinfo($photo, PATHINFO_EXTENSION);
						// can upload same image using rand function
						$final_image = rand(1000,1000000).$photo;
						// check's valid format
						if(in_array($ext, $valid_extensions)) 
							{					
								$path = $path.strtolower($final_image);
								if(move_uploaded_file($tmp,$path)) 
								{
									$postData1 =  array(
										'mname' => $data['mname'],
										'mnameen' => $data['nameen'],
										'murl' => $data['murl'],
										'ordering' => $data['ordering'],
										'mstatus' => $data['mstatus'],
										'mpagetypeid' => $data['mpagetypeid'],
										'mdeskh' => $data['deskh'],
										'mdes' => $data['mdes'],
										'mphoto' => $final_image
									);
									$this->db->update('table_menu', $postData1, 
									 	"`mid` = {$data['mid']}");
													
								}
								$message = "successUpdated";
								header('location: ' . URL . 'pagemanager/menuList?message='.$message.'&data='.$data['mid'].'&img='.$mimg['name']);									
							} else { $message = "nophoto"; 
								header('location: ' . URL . 'pagemanager/menu?message='.$message);
							}
					}else{
						$data1 = array(
									'mname' => $data['mname'],
									'mnameen' => $data['nameen'],
									'murl' => $data['murl'],
									'ordering' => $data['ordering'],
									'mstatus' => $data['mstatus'],
									'mpagetypeid' => $data['mpagetypeid'],
									'mdeskh' => $data['deskh'],
									'mdes' => $data['mdes'],
								);
		
							$this->db->update('table_menu', $data1, 
								"`mid` = {$data['mid']}");
						$message = "successUpdated";
						header('location: ' . URL . 'pagemanager/menuList?message='.$message.'&data='.$data['mid'].'&img=NoImage');
					}
			}
		}catch (PDOException $e){ $message = "Error".$e->getMessage();}
	}
	public function MenuToSubmList()
	{
		return $this->db->select("SELECT * FROM table_menu WHERE mstatus = 1");
	}
	
	public function SmenuList()
	{
		return $this->db->select("SELECT * FROM table_smenu sm LEFT JOIN table_lang l ON sm.sme_langid = l.langid 
				LEFT JOIN table_menu m ON sm.smid = m.mid WHERE smtrash = 0 ORDER BY sid ASC");	
	}
	public function smenuAdd()
	{
		$message = "Error";
		try{
			$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
			$path = 'source/menu/'; // upload image to directory
			
			$sth = $this->db->prepare("SELECT smname
					FROM table_smenu WHERE smstatus = 1 AND
					smname = :name ");
				$sth->execute(array(
					':name' => $_POST['menuname']
				));
				
			$check = $sth->fetch();
			$count =  $sth->rowCount();
			if ($count > 0){
				$message = "existMenu";
				header('location: ' . URL . 'pagemanager/smenu?message='.$message);
			}else if(empty($_POST['menuname'])){
				$message = "empty";
				header('location: ' . URL . 'pagemanager/smenu?message='.$message);
			}else if(empty($_POST['menuurl'])){
				$message = "empty";
				header('location: ' . URL . 'pagemanager/smenu?message='.$message);
			}else{
				$data = array(
							'smname' => $_POST['menuname'],
							'smphoto' => $_FILES['filephoto'],
							'smurl' => $_POST['menuurl'],
							'ordering' => $_POST['txtordering'],
							'sme_lang' => $_POST['cblLang'],
							'smstatus' => $_POST['cblstatus'],
							'parentmenu' => $_POST['cblparentmenu'],
							'smcreated_by' => $_POST['user_id'],
							'smpagetypeid' => $_POST['cblpagetype'],
							'smdes' => $_POST['des'],
						);
					$img = $data['smphoto'];
					$photo = $img['name'];
					$tmp = $img['tmp_name'];
					if(!empty($img['tmp_name'])){
						// get uploaded file's extension
						$ext = pathinfo($photo, PATHINFO_EXTENSION);
						// can upload same image using rand function
						$final_image = rand(1000,1000000).$photo;
						// check's valid format
						if(in_array($ext, $valid_extensions)) 
						{					
							$path = $path.strtolower($final_image);
							if(move_uploaded_file($tmp,$path)) 
							{
								$this->db->insert('table_smenu', array(
									'smid' => $data['parentmenu'],
									'smname' => $data['smname'],
									'smurl' => $data['smurl'],
									'sme_langid' => $data['sme_lang'],
									'smstatus' => $data['smstatus'],
									'smordering' => $data['ordering'],
									'smdes' => $data['smdes'],
									'smpagetypeid' => $data['smpagetypeid'],
									'smcreated_by' => $data['smcreated_by'],
									'smcreated_at' => date('Y-m-d'), // use GMT aka UTC 0:00  H:i:s
									'smphoto' => strtolower($final_image)
								));							
							}									
						} else { $message = "nophoto!"; 
							header('location: ' . URL . 'pagemanager/smenu?message='.$message);
						}
						$message = "success";
						header('location: ' . URL . 'pagemanager/smenu?message='.$message);
					}else{
						$this->db->insert('table_smenu', array(
									'smid' => $data['parentmenu'],
									'smname' => $data['smname'],
									'smurl' => $data['smurl'],
									'sme_langid' => $data['sme_lang'],
									'smstatus' => $data['smstatus'],
									'smordering' => $data['ordering'],
									'smdes' => $data['smdes'],
									'smpagetypeid' => $data['smpagetypeid'],
									'smcreated_by' => $data['smcreated_by'],
									'smcreated_at' => date('Y-m-d'), // use GMT aka UTC 0:00  H:i:s
								));	
						$message = "success";
						header('location: ' . URL . 'pagemanager/smenu?message='.$message);	
					}					
			}
		}catch (PDOException $e){ $message = "Error".$e->getMessage();}
	}
	public function smenuSingle($id)
	{
		return $this->db->select("SELECT * FROM table_smenu sm LEFT JOIN table_lang l ON sm.sme_langid = l.langid 
				LEFT JOIN table_menu m ON sm.smid = m.mid WHERE sid= ".$id);	
	}
	public function smenuEditSave()
	{
		$message = "Error";
		try{
			$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
			$path = 'source/menu/'; // upload image to directory
			
			if(empty($_POST['menuname'])){
				$message = "empty";
				header('location: ' . URL . 'pagemanager/smenu?message='.$message);
			}else if(empty($_POST['menuurl'])){
				$message = "empty";
				header('location: ' . URL . 'pagemanager/smenu?message='.$message);
			}else{
				
					
					$data = array(
							'sid' => $_POST['sid'],
							'smname' => $_POST['menuname'],
							'smphoto' => $_FILES['filephoto'],
							'smurl' => $_POST['menuurl'],
							'ordering' => $_POST['txtordering'],
							'sme_lang' => $_POST['cblLang'],
							'smstatus' => $_POST['cblstatus'],
							'parentmenu' => $_POST['cblparentmenu'],
							'smcreated_by' => $_POST['user_id'],
							'smpagetypeid' => $_POST['cblpagetype'],
							'smdes' => $_POST['des'],
						);
					$mimg = $data['smphoto'];
					$photo = $mimg['name'];
					$tmp = $mimg['tmp_name'];
					if(!empty($mimg['tmp_name'])){
						// get uploaded file's extension
						$ext = pathinfo($photo, PATHINFO_EXTENSION);
						// can upload same image using rand function
						$final_image = rand(1000,1000000).$photo;
						// check's valid format
						if(in_array($ext, $valid_extensions)) 
							{					
								$path = $path.strtolower($final_image);
								if(move_uploaded_file($tmp,$path)) 
								{
									$postData1 =  array(
										
										'smid' => $data['parentmenu'],
										'smname' => $data['smname'],
										'smurl' => $data['smurl'],
										'sme_langid' => $data['sme_lang'],
										'smstatus' => $data['smstatus'],
										'smordering' => $data['ordering'],
										'smdes' => $data['smdes'],
										'smpagetypeid' => $data['smpagetypeid'],
										'smphoto' => strtolower($final_image)
									);
									$this->db->update('table_smenu', $postData1, 
									 	"`sid` = {$data['sid']}");
													
								}
								$message = "successUpdated";
								header('location: ' . URL . 'pagemanager/smenu?message='.$message.'&data='.$data['sid'].'&img='.$mimg['name']);									
							} else { $message = "nophoto"; 
								header('location: ' . URL . 'pagemanager/smenu?message='.$message);
							}
					}else{
						$data1 = array(
									'smid' => $data['parentmenu'],
									'smname' => $data['smname'],
									'smurl' => $data['smurl'],
									'sme_langid' => $data['sme_lang'],
									'smstatus' => $data['smstatus'],
									'smordering' => $data['ordering'],
									'smdes' => $data['smdes'],
									'smpagetypeid' => $data['smpagetypeid'],
								);
		
							$this->db->update('table_smenu', $data1, 
								"`sid` = {$data['sid']}");
						$message = "successUpdated";
						header('location: ' . URL . 'pagemanager/smenu?message='.$message.'&data='.$data['sid'].'&img=NoImage');
					}
			}
		}catch (PDOException $e){ $message = "Error".$e->getMessage();}
	}
	//end blog menu
	
	public function countrieslist()
	{
		return $this->db->select("SELECT * FROM tb_countries WHERE coun_status = 1 ORDER BY coun_id ASC");
	}
	public function langlistActive()
	{
		return $this->db->select("SELECT * FROM table_lang");	
	}
	
	//blog main category
	public function maincategorieslist()
	{
		return $this->db->select("SELECT * FROM tb_maincate WHERE mctrash = 0 ORDER BY CAST(mcordering AS DECIMAL) ASC");
	}
	public function maincateaddsave()
	{
		$message = "Error";
		$valid_extensions = array('jpeg', 'jpg', 'png','ico', 'gif'); // valid extensions
		$path = 'public/images/'; // upload image to directory
		try{
			$sth = $this->db->prepare("SELECT nameen
                    FROM tb_maincate WHERE mcstatus = 1 AND
                    nameen = :enname OR namekh = :khname");
                $sth->execute(array(
                    ':enname' => $_POST['en_cname'],
					':khname' => $_POST['kh_cname']
                ));
                $check = $sth->fetch();
                $count =  $sth->rowCount();
                if ($count > 0){
					$message = "exist";
					header('location: ' . URL . 'pagemanager/maincateadd?message='.$message);
                }else{
                    $data = array(
						'icon' => $_FILES['filepic'],
                        'khname' => $_POST['kh_cname'],
						'enname' => $_POST['en_cname'],
                        'status' => $_POST['cblstatus'],
						'ordering' => $_POST['mcorder'],
						'created_by' => $_POST['user_id']);
						
					$img = $data['icon'];
					$photo = $img['name'];
					$tmp = $img['tmp_name'];
					if(!empty($img['tmp_name'])){
						// get uploaded file's extension
						$ext = strtolower(pathinfo($photo, PATHINFO_EXTENSION));
						// can upload same image using rand function
						$final_photo = rand(1000,1000000).'_'.$photo;
						// check's valid format
						if(in_array($ext, $valid_extensions)) 
						{					
							$path = $path.strtolower($final_photo);
							if(move_uploaded_file($tmp,$path)) 
							{
								$this->db->insert('tb_maincate', array(
									'namekh' => $data['khname'],
									'nameen' => $data['enname'],
									'mcicon' => strtolower($final_photo),
									'mcstatus' => $data['status'],
									'mcordering' => $data['ordering'],
									'mccreated_by' => $data['created_by'],
									'mccreated_at' => date('Y-m-d H:i:s')
									
								));
								$message = "success";
								header('location: ' . URL . 'pagemanager/maincatelist?message='.$message.'&logo='.$final_photo);
							}//end if logo move to fc directory
						}//end if in_array
						else{
							$message = "nophoto"; 
							header('location: ' . URL . 'pagemanager/maincateadd?message='.$message);
						}//end else invalid picture
					}//end if !empty					
                } 
		}catch (PDOException $e){ echo "Error: " . $e->getMessage();}
	}
	public function mcSingle($id){
		return $this->db->select("SELECT * FROM tb_maincate WHERE mcid = ".$id);	
	}
	public function maincateUpdate()
	{
		$message = "Error";
		$valid_extensions = array('jpeg', 'jpg', 'png','ico', 'gif'); // valid extensions
		$path = 'public/images/'; // upload image to directory
		try{
                    $data = array(
						'id' => $_POST['mcid'],
						'icon' => $_FILES['filepic'],
                        'khname' => $_POST['kh_cname'],
						'enname' => $_POST['en_cname'],
                        'status' => $_POST['cblstatus'],
						'ordering' => $_POST['mcorder'],
						'created_by' => $_POST['user_id']);
						
					$img = $data['icon'];
					$photo = $img['name'];
					$tmp = $img['tmp_name'];
					if(!empty($img['tmp_name'])){
						// get uploaded file's extension
						$ext = strtolower(pathinfo($photo, PATHINFO_EXTENSION));
						// can upload same image using rand function
						$final_photo = rand(1000,1000000).'_'.$photo;
						// check's valid format
						if(in_array($ext, $valid_extensions)) 
						{					
							$path = $path.strtolower($final_photo);
							if(move_uploaded_file($tmp,$path)) 
							{
								$postData = array(
									'namekh' => $data['khname'],
									'nameen' => $data['enname'],
									'mcicon' => strtolower($final_photo),
									'mcstatus' => $data['status'],
									'mcordering' => $data['ordering']
								);
								$this->db->update('tb_maincate', $postData, 
									"`mcid` = {$data['id']}");
								$message = "successUpdated";
								header('location: ' . URL . 'pagemanager/maincatelist?message='.$message);	
							}//end if logo move to fc directory
						}//end if in_array
						else{
							$message = "nophoto"; 
							header('location: ' . URL . 'pagemanager/maincateadd?message='.$message);
						}//end else invalid picture
					}//end if !empty
					else{
						$postData = array(
							'namekh' => $data['khname'],
							'nameen' => $data['enname'],
							'mcstatus' => $data['status'],
							'mcordering' => $data['ordering']
						);
						$this->db->update('tb_maincate', $postData, 
						"`mcid` = {$data['id']}");
						$message = "successUpdated";
						header('location: ' . URL . 'pagemanager/maincatelist?message='.$message);	
					}//end of if !empty icon
		}catch (PDOException $e){ echo "Error: " . $e->getMessage();}
	}
	public function cateaddsave()
	{
		$message = "Error";
		$valid_extensions = array('jpeg', 'jpg', 'png','ico', 'gif'); // valid extensions
		$path = 'public/cateicons/'; // upload image to directory
		try{
			$sth = $this->db->prepare("SELECT canameen
                    FROM tb_cate WHERE castatus = 1 AND
                    canameen = :enname OR canamekh = :khname");
                $sth->execute(array(
                    ':enname' => $_POST['en_cname'],
					':khname' => $_POST['kh_cname']
                ));
                $check = $sth->fetch();
                $count =  $sth->rowCount();
                if ($count > 0){
					$message = "exist";
					header('location: ' . URL . 'pagemanager/categoriesadd?message='.$message);
                }else if(empty($_POST['kh_cname'])){
					$message = "empty";
					header('location: ' . URL . 'pagemanager/categoriesadd?message='.$message);
				}else if(empty($_POST['en_cname'])){
					$message = "empty";
					header('location: ' . URL . 'pagemanager/categoriesadd?message='.$message);
				}else if(trim($_POST['txt_caurl']) == ''){
					$message = "empty";
					header('location: ' . URL . 'pagemanager/categoriesadd?message='.$message);
				}else{
                    $data = array(
						'icon' => $_FILES['filepic'],
                        'khname' => $_POST['kh_cname'],
						'enname' => $_POST['en_cname'],
                        'status' => $_POST['cblstatus'],
						'curl' => $_POST['txt_caurl'],
						'ordering' => $_POST['mcorder'],
						'created_by' => $_POST['user_id']);
						
					$img = $data['icon'];
					$photo = $img['name'];
					$tmp = $img['tmp_name'];
					if(!empty($img['tmp_name'])){
						// get uploaded file's extension
						$ext = strtolower(pathinfo($photo, PATHINFO_EXTENSION));
						// can upload same image using rand function
						$final_photo = rand(1000,1000000).'_'.$photo;
						// check's valid format
						if(in_array($ext, $valid_extensions)) 
						{					
							$path = $path.strtolower($final_photo);
							if(move_uploaded_file($tmp,$path)) 
							{
								$this->db->insert('tb_cate', array(
									'canamekh' => $data['khname'],
									'canameen' => $data['enname'],
									'caicon' => strtolower($final_photo),
									'castatus' => $data['status'],
									'caurl' => $data['curl'],
									'caordering' => $data['ordering'],
									'cacreated_by' => $data['created_by'],
									'cacreated_at' => date('Y-m-d H:i:s')
									
								));
								
								if($_REQUEST['btnsave'] == 'SaveNew'){
									$message = "success";
									header('location: ' . URL . 'pagemanager/categoriesadd?message='.$message.'&icon='.$final_photo);
								}else{
									$message = "success";
									header('location: ' . URL . 'pagemanager/categorieslist?message='.$message.'&icon='.$final_photo);
								}
							}//end if logo move to fc directory
						}//end if in_array
						else{
							$message = "nophoto"; 
							header('location: ' . URL . 'pagemanager/categoriesadd?message='.$message);
						}//end else invalid picture
					}//end if !empty					
                } 
		}catch (PDOException $e){ echo "Error: " . $e->getMessage();}
	}
	public function catelist()
	{
		return $this->db->select("SELECT * FROM tb_cate WHERE catrash = 0 ORDER BY CAST(caordering AS DECIMAL) ASC");
	}
	public function cateSingle($id)
	{
		return $this->db->select("SELECT * FROM tb_cate WHERE caid = ".$id);
	}
	public function cateUpdatesave()
	{
		$message = "Error";
		$valid_extensions = array('jpeg', 'jpg', 'png','ico', 'gif'); // valid extensions
		$path = 'public/cateicons/'; // upload image to directory
		try{
			$data = array(
				'id' => $_POST['caid'],
				'icon' => $_FILES['filepic'],
				'khname' => $_POST['kh_cname'],
				'enname' => $_POST['en_cname'],
				'curl' => $_POST['txt_caurl'],
				'status' => $_POST['cblstatus'],
				'ordering' => $_POST['mcorder'],
				'created_by' => $_POST['user_id']);
				
			$img = $data['icon'];
			$photo = $img['name'];
			$tmp = $img['tmp_name'];
			if(!empty($img['tmp_name'])){
				// get uploaded file's extension
				$ext = strtolower(pathinfo($photo, PATHINFO_EXTENSION));
				// can upload same image using rand function
				$final_photo = rand(1000,1000000).'_'.$photo;
				// check's valid format
				if(in_array($ext, $valid_extensions)) 
				{					
					$path = $path.strtolower($final_photo);
					if(move_uploaded_file($tmp,$path)) 
					{
						$postData = array(
							'canamekh' => $data['khname'],
							'canameen' => $data['enname'],
							'caicon' => strtolower($final_photo),
							'castatus' => $data['status'],
							'caurl' => $data['curl'],
							'caordering' => $data['ordering'],
						);
						$this->db->update('tb_cate', $postData, 
							"`caid` = {$data['id']}");
						$message = "successUpdated";
						header('location: ' . URL . 'pagemanager/categorieslist?message='.$message);	
					}//end if logo move to fc directory
				}//end if in_array
				else{
					$message = "nophoto"; 
					header('location: ' . URL . 'pagemanager/categoriesadd?message='.$message);
				}//end else invalid picture
			}//end if !empty
			else{
				$postData = array(
					'canamekh' => $data['khname'],
					'canameen' => $data['enname'],
					'castatus' => $data['status'],
					'caurl' => $data['curl'],
					'caordering' => $data['ordering'],
				);
				$this->db->update('tb_cate', $postData, 
				"`caid` = {$data['id']}");
				$message = "successUpdated";
				header('location: ' . URL . 'pagemanager/categorieslist?message='.$message);	
			}//end of if !empty icon
		}catch (PDOException $e){ echo "Error: " . $e->getMessage();}
	}
	
	//end categories
	//product 
	public function productaddsave()
	{
		$message = "Error";
		$valid_extensions = array('jpeg', 'jpg', 'png','ico', 'gif'); // valid extensions
		$path = 'public/products/'; // upload image to directory
		try{
			$sth = $this->db->prepare("SELECT pnameen
                    FROM tb_product WHERE pstatus = 1 AND
                    pnameen = :enname");
                $sth->execute(array(
                    ':enname' => $_POST['en_cname']
                ));
                $check = $sth->fetch();
                $count =  $sth->rowCount();
                if ($count > 0){
					$message = "exist";
					header('location: ' . URL . 'pagemanager/productaddlist?message='.$message);
                }else if(empty($_POST['kh_cname']) OR trim($_POST['kh_cname']) == ''){
					$message = "empty";
					header('location: ' . URL . 'pagemanager/productaddlist?message='.$message);
				}else if(empty($_POST['en_cname']) OR trim($_POST['en_cname']) == ''){
					$message = "empty";
					header('location: ' . URL . 'pagemanager/productaddlist?message='.$message);
				}else if(trim($_POST['procode']) == ''){
					$message = "empty";
					header('location: ' . URL . 'pagemanager/productaddlist?message='.$message);
				}else{
                    $data = array(
						'propic' => $_FILES['filepro'],
						'code' => $_POST['procode'],
                        'khname' => $_POST['kh_cname'],
						'enname' => $_POST['en_cname'],
                        'status' => $_POST['cblstatus'],
						'rawprice' => $_POST['rawprices'],
						'geprice' => $_POST['gprice'],
						'disprice' => $_POST['dprice'],
						'khdes' => $_POST['detailkh'],
						'endes' => $_POST['detail'],
						'khpromote' => $_POST['promotekh'],
						'enpromote' => $_POST['promoteen'],
						'created_by' => $_POST['user_id'],
						
						'mcboxid' 	=> $_POST['mcboxes'],
						'caboxid' 	=> $_POST['caboxes']
						
					);
					$last_id = $this->db->insert('tb_product', array(
								'pcode' => $data['code'],
								'pnamekh' => $data['khname'],
								'pnameen' => $data['enname'],
								'pstatus' => $data['status'],
								'raw_prices' => $data['rawprice'],
								'pshowprice' => $data['geprice'],
								'pifpricedis' => $data['disprice'],
								'pdetailkh' => $data['khdes'],
								'pdetailen' => $data['endes'],
								'word_promotekh' => $data['khpromote'],
								'word_promoteen' => $data['enpromote'],
								'pcreated_by' => $data['created_by'],
								'pcreated_at' => date('Y-m-d H:i:s')
								
							));
					//blog file product photo
					$img_co = 0; $img = array();
					$img = $data['propic'];
					$tmpfile_name = '';
					foreach($img['tmp_name'] as $key => $tmp_name ){
						$file_name = $img['name'][$key];
						$file_tmp = $img['tmp_name'][$key];
						if(!empty($img['tmp_name'][$key])){
							// get uploaded file's extension
							$ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
							//clear space
							//$file_name = preg_replace('/\s+/', '', $file_name);
							// can upload same image using rand function
							$final_photo = rand(1000,1000000).'_'.$file_name;
							// check's valid format
							if(in_array($ext, $valid_extensions)) 
							{					
								$path = $path.strtolower($final_photo);
								
								
								if(move_uploaded_file($file_tmp, $path)) 
								{
									
									$this->db->insert('tb_prodphotos', array(
										'proid' => $last_id,
										'pphoto' => strtolower($tmpfile_name.$final_photo),
										'ppcreated_at' => date('Y-m-d H:i:s')
										
									));
								}//end if logo move to fc directory
							}//end if in_array
							else{
								$message = "nophoto"; 
								header('location: ' . URL . 'pagemanager/productaddlist?message='.$message);
							}//end else invalid picture
							$tmpfile_name.= $final_photo;
						}// end if !empty $img tmp_name
					}
					//end blog file product photo
                } 
			//Main Categories	
			$mcbox = 0;
			
			foreach($data['mcboxid'] as $key => $vari){
				if(!empty($vari)){
					$mcbox++;
					$this->db->insert('tb_prodmaincate', array(
						'pmproid' => $last_id,
						'pmcateid' => $vari,
						'pmcreated_at' => date('Y-m-d H:i:s')
						
					));
				}
			}
			//categories
			$cabox = 0;
			foreach($data['caboxid'] as $key => $cav){
				if(!empty($cav)){
					$cabox++;
					$this->db->insert('tb_prodcate', array(
						'cpproid' => $last_id,
						'cpcateid' => $cav,
						'cpcreated_at' => date('Y-m-d H:i:s')
						
					));
				}
			}
			if($_REQUEST['btnsave'] == 'SaveNew'){
				$message = "success";
				header('location: ' . URL . 'pagemanager/productaddlist?message='.$message);
			}else{
				$message = "success";
				header('location: ' . URL . 'pagemanager/productlist?message='.$message);
			}
			
		}catch (PDOException $e){ echo "Error: " . $e->getMessage();}
	}
	//for edit product
	public function SingleProduct($id)
	{
		return $this->db->select("SELECT * FROM tb_product WHERE pid = ".$id);
	}
	public function picofproduct($id)
	{
		return $this->db->select("SELECT * FROM tb_prodphotos WHERE proid = ".$id);
	}
	public function productlist()
	{
		return $this->db->select("SELECT * FROM tb_product WHERE ptrash = 0");
	}
	public function productphoto()
	{
		return $this->db->select("SELECT * FROM tb_prodphotos");
	}
	public function promcate()
	{
		return $this->db->select("SELECT * FROM tb_prodmaincate pm LEFT JOIN tb_maincate m ON pm.pmcateid = m.mcid");
	}
	public function procate()
	{
		return $this->db->select("SELECT * FROM tb_prodcate pc LEFT JOIN tb_cate c ON pc.cpcateid = c.caid");
	}
	public function SingProMaincate($id)
	{
		return $this->db->select("SELECT * FROM tb_prodmaincate WHERE pmproid = ".$id);
	}
	public function SingProcate($id)
	{
		return $this->db->select("SELECT * FROM tb_prodcate WHERE cpproid = ".$id);
	}
	//end product
	//data type or company work with
	public function listtype()
	{
		return $this->db->select("SELECT * FROM tb_types WHERE spstatus = 1");
	}
	
	public function spcompanieslist()
	{
		return $this->db->select("SELECT * FROM tb_spcompanies c LEFT JOIN tb_types t ON c.spc_sptypeid = t.spid
									WHERE c.spcstatus = 1 ORDER BY c.spcid DESC");
		//return $this->db->select("SELECT * FROM tb_spcompanies c LEFT JOIN tb_types t ON c.spc_sptypeid = t.spid
									//WHERE c.spcstatus = 1 ORDER BY CAST(spcordering AS DECIMAL) ASC");
	}
	public function companiesworksponsorsave()
	{
		$result = false;$message = "Error";
		$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
		$path = 'public/partnership/'; // upload image to directory
		try{
			date_default_timezone_set("Asia/Bangkok");
			$sth = $this->db->prepare("SELECT spcnameen
                    FROM tb_spcompanies WHERE spcstatus = 1 AND
                    spcnameen = :name");
                $sth->execute(array(
                    ':name' =>$_POST['comnameen']
                ));
                $check = $sth->fetch();
                $count =  $sth->rowCount();
                if ($count > 0){
					$message = "This Company name (".$_POST['comnameen'].") is already exists!";
                }else if(rtrim($_POST['comnameen']) == "" OR trim($_POST['comnameen']) == ''){
					$message = "Please enter the company name!";
				}else{
                    $data = array(
						'filelogo' => $_FILES['filephoto'],
                        'khname' => $_POST['comname'],
						'enname' => $_POST['comnameen'],
						'web' => $_POST['comweb'],
                        'status' => $_POST['cblstatus'],
						'comorder' => $_POST['txtordering'],
						'comas' => $_POST['cbxcomtype'],
						//'detail' => $_POST['des'],
						'created_by' => $_POST['user_id']
					);
					
					//blog file product photo
					$img = $data['filelogo'];
					$photo = $img['name'];
					$tmp = $img['tmp_name'];
					if(!empty($img['tmp_name'])){
						// get uploaded file's extension
						$ext = strtolower(pathinfo($photo, PATHINFO_EXTENSION));
						// can upload same image using rand function
						$final_logo = rand(1000,1000000).$photo;
						// check's valid format
						if(in_array($ext, $valid_extensions)) 
						{					
							$path = $path.strtolower($final_logo);
							if(move_uploaded_file($tmp,$path)) 
							{
								$this->db->insert('tb_spcompanies', array(
									'spcnamekh' => $data['khname'],
									'spcnameen' => $data['enname'],
									'spclink' => $data['web'],
									'spcstatus' => $data['status'],
									'spcordering' => $data['comorder'],
									'spc_sptypeid' => $data['comas'],
									'spccreated_by' => $data['created_by'],
									'spccreated_at' => date('Y-m-d H:i:s'), // use GMT aka UTC 0:00  H:i:s
									'spclogo' => strtolower($final_logo)
								));							
							}
							$result = true; $message = " <i class='fa fa-floppy-o'> &nbsp;  Data has created successful!";									
						} else { $message = "&nbsp; Logo extension is ivalid!";}
					}
					//end blog file product photo
                } 
		}catch (PDOException $e){ $message = "Error: " . $e->getMessage();}
        echo json_encode(array('result'=>$result,'message'=>$message));
	}
	//end data type or company work with
	//user
	public function userlist()
	{
		return $this->db->select("SELECT * FROM users WHERE u_trash = 0");
	}
	public function userSingle($id)
	{
		return $this->db->select("SELECT * FROM users WHERE user_id = ".$id);
	}
	public function userspwdchangeSave()
	{
		$Error = "Error";
		try{
			$_POST['uid'];$_POST['uemail'];rtrim($_POST['upwd']);
			if(rtrim($_POST['uemail']) ==''){
				$message = "empty";
				header('location: ' . URL . 'pagemanager/pwdchange/'.$_POST['uid'].'&userpwdchangelog?message='.$message);
			}else if(rtrim($_POST['upwd']) ==''){
				$message = "empty";
				header('location: ' . URL . 'pagemanager/pwdchange/'.$_POST['uid'].'&userpwdchangelog?message='.$message);
			}else{
				$data = array(
					'uid' => $_POST['uid'],
					'uemail' => rtrim($_POST['uemail']),
					'upwd' => rtrim($_POST['upwd'])
				);
				$postData =  array(
						'email' => $data['uemail'],
						'password' => Hash::create('sha256', $data['upwd'], HASH_PASSWORD_KEY),
					);
					$this->db->update('users', $postData, 
						"`user_id` = {$data['uid']}");
					$message = "successUpdated";
					header('location: ' . URL . 'pagemanager/userlist?message='.$message);
			}
		}catch(PDOException $e){ echo "Error: ".$e->getMessage();}
	}
	//end user
}