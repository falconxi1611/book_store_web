<?php
include_once('database.php');
class M_nha_xuat_ban extends database
{
	public function Doc_nha_xuat_ban_khac($id)
	{
		$sql = 'select * from bs_nha_xuat_ban where id !=?';
		$this->setQuery($sql);
		return $this->loadAllRows(array($id));
	}
	
	public function Doc_nha_xuat_ban()
	{
		$sql = 'select * from bs_nha_xuat_ban ';
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_nxb_theo_id_nxb($id)
	{
		$sql = 'select * from bs_nha_xuat_ban where id=?';
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
}
?>