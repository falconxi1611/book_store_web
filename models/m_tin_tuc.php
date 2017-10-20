<?php
require_once('database.php');
class M_tin_tuc extends database
{
	public function Doc_tin_tuc($vt=-1,$limit=-1)
	{
		$sql = 'select * from bs_tin_tuc';
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Doc_tin_tuc_theo_id($id)
	{
		$sql = 'select * from bs_tin_tuc where id=?';
		$this->setQuery($sql);
		$param=array($id);
		return $this->loadRow($param);
	}
}
?>