<?php
require_once("database.php");
class M_loai_user extends database
{
	function Doc_loai_user()
	{
		$sql="select * from bs_loai_nguoi_dung";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function Doc_loai_user_theo_id($id)
	{
		$sql="select * from bs_loai_nguoi_dung where id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
}
?>