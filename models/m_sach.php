<?php
require_once('database.php');
class M_sach extends database
{
	//Loc sach theo dieu kien
	public function Loc_sach_theo_id_loai_cha($id_loai_cha,$dk_loc, $vt= -1,$limit = -1)
	{
		
		$sql = "select * from bs_sach where id_loai_sach IN(select id from bs_loai_sach where id_loai_cha=?) order by $dk_loc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai_cha));
		
	}
	function Loc_sach_theo_id_loai_sach($id,$dk_loc,$vt=-1,$limit=-1)
	{
		$sql="select * from bs_sach where id_loai_sach=? order by $dk_loc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($id));
	}
	
	
	
	
	//
	public function loc_sach_theo_ten_tang($id_loai_sach)
	{
		$sql="select * from bs_sach where id_loai_sach=? order by ten_sach";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai_sach));
	}
	
	public function loc_sach_theo_ten_giam($id_loai_sach)
	{
		$sql="select * from bs_sach where id_loai_sach=? order by ten_sach DESC";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai_sach));
	}
	public function loc_sach_theo_gia_tang($id_loai_sach)
	{
		$sql="select * from bs_sach where id_loai_sach=? order by don_gia";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai_sach));
	}
	public function loc_sach_theo_gia_giam($id_loai_sach)
	{
		$sql="select * from bs_sach where id_loai_sach=? order by don_gia DESC";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai_sach));
	}
	//Giỏ hàng
	public function lay_sach_cho_gio_hang($chuoi)
	{
		$query="Select * from bs_sach where id in($chuoi)";
		$this->setQuery($query);
		return $this->loadAllRows();
	}

	//TÌM KIẾM
	public function Tim_sach_theo_ten($gtTim)
	{
		$sql="select * from bs_sach where ten_sach like '%$gtTim%'";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	//LOC_SACH_THEO_DK

	public function Doc_sach_theo_id_loai_cha($id_loai_cha,$vt= -1,$limit = -1)
	{
		
		$sql = 'select * from bs_sach where id_loai_sach IN(select id from bs_loai_sach where id_loai_cha=?)';
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai_cha));
		
	}
	
	
	public function Doc_sach_theo_id_nxb($id_nha_xuat_ban,$vt= -1,$limit = -1)
	{
		
		$sql = 'select * from bs_sach where id_nha_xuat_ban = ?';
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_nha_xuat_ban));
		
	}
	public function Doc_sach_yeu_thich()
	{
		$sql ='select s.*, bs.trang_thai from bs_sach s INner Join bs_sach_yeu_thich bs ON s.id = bs.id_sach where bs.trang_thai >=3';
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Doc_sach_noi_bat($vt= -1,$limit = -1)
	{
		$sql = 'select * from bs_sach where	noi_bat = 1';
		if ($vt >= 0 && $limit >0)
		{
			$sql.= 'limit $vt, $limit';
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_sach_moi($vt= -1,$limit = -1)
	{
		$sql = 'select * from bs_sach order by ngay_xuat_ban desc limit 0,20';
		if ($vt >= 0 && $limit >0)
		{
			$sql.= 'limit $vt, $limit';
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_sach($vt=-1,$limit=-1)
	{
		$sql='select * from bs_sach';
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function Doc_sach_tim($vt=-1,$limit=-1 )
	{
		$sql='select * from bs_sach limit 0,5';
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function Doc_sach_theo_id_loai_sach($id,$vt=-1,$limit=-1)
	{
		$sql="select * from bs_sach where id_loai_sach=?";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($id));
	}
	function Doc_sach_theo_id($id)
	{
		$sql="select * from bs_sach where id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
	function Doc_sach_cung_loai($id_loai_sach, $id, $vt=-1, $limit=-1)
	{
		$sql="select * from bs_sach where id_loai_sach=? and id!=?";
		if($vt>=0 && $limit>0)
		{
			$sql.="limit $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai_sach, $id));
	}
	function Doc_sach_cung_tac_gia($id_tac_gia, $id, $vt=-1, $limit=-1)
	{
		$sql="select * from bs_sach where id_tac_gia=? and id!=?";
		if($vt>=0 && $limit>0)
		{
			$sql.="limit $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_tac_gia, $id));
	}

	 //Quản Trị Viên
    function Them_sach($id, $ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat)
    {
        $sql="insert into bs_sach";
        $sql.="value(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        $param = array("NULL", $ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat);
        return $this->execute($param);
    }
	function Sua_sach($id, $ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat)
    {
        $sql="update bs_sach";
        $sql.="set $ten_sach=?, $id_tac_gia=?, $gioi_thieu=?, $doc_thu=?, $id_loai_sach=?, $id_nha_xuat_ban=?, $so_trang=?, $ngay_xuat_ban=?, $kich_thuoc=?, $sku=?, $trong_luong=?, $trang_thai=?, $hinh=?, $don_gia=?, $gia_bia=?, $noi_bat=?";
        $sql.="where $id=?";
        $this->setQuery($sql);
        $param=array($ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat, $id);
        return $this->execute($param);
    }
	function Xoa_sach($id)
    {
        $sql="delete from bs_sach where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
?>