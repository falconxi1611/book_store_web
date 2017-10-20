<?php
require_once ('database.php');
class M_tac_gia extends database
{
    function Doc_tac_gia()
    {
        $sql="select * from bs_tac_gia";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	function Doc_tac_gia_theo_id($id_tac_gia)
	{
		$sql="select * from bs_tac_gia where id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($id_tac_gia));
	}
}
?>