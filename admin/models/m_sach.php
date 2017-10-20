<?php
require_once('database.php');
class M_sach extends database
{
  //Quản Trị Viên
	function Doc_sach($vt=-1,$limit=-1)
    {
        $sql="select * from bs_sach";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt, $limit";
		}
        $this->setQuery($sql);	
        return $this->loadAllRows();
    }
    function Doc_sach_theo_id($id)
    {
        $sql="select * from bs_sach where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
	

    function Them_sach($id, $ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat)
    {
        $sql="insert into bs_sach ";
        $sql.="values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        $param = array(NULL, $ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat);
        return $this->execute($param);
    }
	
	function Sua_sach($ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat, $id)
    {
        $sql="update bs_sach set ten_sach=?, id_tac_gia=?, gioi_thieu=?, doc_thu=?, id_loai_sach=?, id_nha_xuat_ban=?, so_trang=?, ngay_xuat_ban=?, kich_thuoc=?, sku=?, trong_luong=?, trang_thai=?, hinh=?, don_gia=?, gia_bia=?, noi_bat=? Where id=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat, $id));
    }
	function Xoa_sach($id)
    {
        $sql="delete from bs_sach where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}

?>
