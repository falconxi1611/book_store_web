<?php
require_once ('database.php');
class M_loai_sach extends database
{
  //Quản Trị Viên
	function Doc_loai_sach($vt=-1,$limit=-1)
    {
        $sql="select * from bs_loai_sach";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt, $limit";
		}
        $this->setQuery($sql);	
        return $this->loadAllRows();
    }
    function Doc_loai_sach_theo_id($id)
    {
        $sql="select * from bs_loai_sach where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
	
    function Them_loai_sach($ten_loai_sach, $id_loai_cha, $trang_thai)
    {
        $sql="INSERT INTO bs_loai_sach VALUES(?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute(array(NULL, $ten_loai_sach, $id_loai_cha,NULL, $trang_thai));
    }
    function Sua_loai_sach($ten_loai_sach, $id_loai_cha, $trang_thai, $id)
    {
        $sql="update bs_loai_sach set ten_loai_sach=?, id_loai_cha=?, trang_thai=? where id=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_loai_sach, $id_loai_cha, $trang_thai, $id));
    }
   function Xoa_loai_sach($id)
   {
       $sql="delete from bs_loai_sach where id=?";
       $this->setQuery($sql);
       return $this->execute(array($id));
   }
}

?>
