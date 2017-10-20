<?php
include('database.php');
class M_tac_gia extends database
{
    function Doc_tac_gia($vt=-1, $limit=-1)
    {   
        $sql="select * from bs_tac_gia";
        if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt, $limit";
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>