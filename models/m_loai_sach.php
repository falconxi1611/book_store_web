<?php
require_once("database.php");
class M_loai_sach extends database
{
	
	function Doc_loai_sach_con($id_loai_cha)
	{
		$sql="select * from bs_loai_sach where id_loai_cha=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai_cha));
	}
    function Doc_loai_sach()
    {
        $sql="select * from bs_loai_sach";
        $this->setQuery($sql);	
        return $this->loadAllRows();
    }
    function Doc_loai_sach_theo_id($id)
    {
        $sql="select * from bs_loai_sach where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    //Quản Trị Viên
    function Them_loai_sach($ten_loai_sach, $id_loai_cha, $trang_thai)
    {
        $sql="insert into bs_loai_sach";
        $sql.="value(?,?,?,?,?)";
        $this->setQuery($sql);
        $param = array("NULL", $ten_loai_sach, $id_loai_cha,"NULL", $trang_thai);
        return $this->execute($param);
    }
    function Sua_loai_sach($id, $ten_loai_sach, $id_loai_cha, $sap_xep, $trang_thai)
    {
        $sql="update bs_loai_sach";
        $sql.="set $ten_loai_sach=?, $id_loai_cha=?, $sap_xep=?, $trang_thai=?";
        $sql.="where $id=?";
        $this->setQuery($sql);
        $param=array($ten_loai_sach, $id_loai_cha, $sap_xep, $trang_thai, $id);
        return $this->execute($param);
    }
    function Xoa_loai_sach($id)
    {
        $sql="delete from bs_loai_sach where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}   
?>  