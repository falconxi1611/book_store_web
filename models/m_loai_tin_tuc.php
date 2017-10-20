<?php
require_once("database.php");
class M_loai_tin_tuc extends database
{
    function Doc_loai_tin_tuc($vt=-1,$limit=-1)
    {
        $sql="select * from bs_loai_tin_tuc";
        if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }   
    function Doc_loai_tin_tuc_theo_ma_loai($id)
    {
        $sql="select * from bs_loai_tin_tuc where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    //Quản Trị Viên
    function Them_loai_tin_tuc($ten_loai_tin, $alias)
    {
        $sql="insert into bs_loai_tin_tuc";
        $sql.="value(?,?,?)";
        $this->setQuery($sql);
        $param = array("NULL", $ten_loai_tin, $alias);
        return $this->execute($param);
    }
    function Sua_loai_tin_tuc($id, $ten_loai_tin, $alias)
    {
        $sql="update bs_loai_tin_tuc";
        $sql.="set $ten_loai_tin=?, $alias=?";
        $sql.="where $id=?";
        $this->setQuery($sql);
        $param=array($ten_loai_tin, $alias, $id);
        return $this->execute($param);
    }
    function Xoa_loai_tin_tuc($id)
    {
        $sql="delete from bs_loai_tin_tuc where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
?>