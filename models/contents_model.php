<?php
class Contents_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function mainmenu()
	{
		return $this->db->select("SELECT * FROM table_menu WHERE mstatus = 1 ORDER BY ordering ASC");
	}
	public function selectmenuSuperadmin()
	{
		$selectmenu = $this->db->select("SELECT * FROM tb_mainmenu WHERE mm_status = 1 ORDER BY mm_id ASC");
				foreach($selectmenu as $key => $value){
				$selectmenu[$key]['smenu'] = $this->db->select("SELECT * FROM tb_menu_r_form WHERE m_status = 1 AND m_mm_id =".$value['mm_id']);
				}
		return $selectmenu;
				
	}
	public function selectmenu()
	{
		$menu = $this->db->select("SELECT * FROM tb_permissionmenulist pmu
				LEFT JOIN tb_mainmenu mm ON pmu.pmu_mmid = mm.mm_id WHERE pmu.pmu_userid = ".$_SESSION['user_id']." AND pmu.pmu_status = 1");
				foreach($menu as $key => $val)
				{
					$menu[$key]['smenu'] = $this->db->select("SELECT * FROM tb_permissionsubmenulist smu
					LEFT JOIN tb_menu_r_form sm ON smu.psmu_smid = sm.m_id
					WHERE smu.psmu_status = 1 AND smu.psmu_pmuid = ".$val['pmu_id']." AND smu.psmu_mmid = ".$val['pmu_mmid']);	
				}
		return $menu;
	}
	public function companies()
	{
		return $this->db->select("SELECT * FROM tb_spcompanies WHERE spcstatus = 1 
							ORDER BY CAST(spcordering AS DECIMAL) ASC");
	}
}
?>