<?php
require_once('database.php');
class M_tin_tuc extends database
{
    function Doc_don_hang($vt=-1, $limit=-1)
    {
        $sql="select * from bs_don_hang";
        if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt, $limit";
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function Doc_chi_tiet_don_hang_theo_ma_don_hang($id_don_hang)
    {
        $sql="select * from bs_chi_tiet_don_hang where id_don_hang=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_don_hang));
    }
}
?>