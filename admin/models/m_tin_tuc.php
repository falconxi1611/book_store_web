<?php
require_once('database.php');

class M_tin_tuc extends database
{
    // Quản trị
    public function Doc_tin_tuc($vt = -1, $limit = -1)
    {
        $sql = 'select * from bs_tin_tuc';
        if ($vt >= 0 && $limit > 0)
        {
            $sql .= " limit $vt, $limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }


    public function Doc_tin_tuc_theo_id($id)
    {
        $sql = 'select * from bs_tin_tuc where id=?';
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }


    public function Them_tin_tuc($id, $tieu_de_tin, $noi_dung_tom_tat, $noi_dung_chi_tiet, $trang_thai, $hinh_dai_dien, $id_loai_tin_tuc, $ngay_dang)
    {
        $sql = "insert into bs_tin_tuc values(?, ?, ?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute(array(NULL, $tieu_de_tin, $noi_dung_tom_tat, $noi_dung_chi_tiet, $trang_thai, $hinh_dai_dien, $id_loai_tin_tuc, $ngay_dang));
    }


    public function Sua_tin_tuc($tieu_de_tin, $noi_dung_tom_tat, $noi_dung_chi_tiet, $trang_thai, $hinh_dai_dien, $id_loai_tin_tuc, $ngay_dang, $id)
    {
        $sql = "update bs_tin_tuc set tieu_de_tin=?,noi_dung_tom_tat=?,noi_dung_chi_tiet=?,trang_thai=?, hinh_dai_dien=?,id_loai_tin_tuc=?,ngay_dang=?  Where id=?";
        $this->setQuery($sql);
        return $this->execute(array($tieu_de_tin, $noi_dung_tom_tat, $noi_dung_chi_tiet, $trang_thai, $hinh_dai_dien, $id_loai_tin_tuc, $ngay_dang, $id));
    }

    public function Xoa_tin_tuc($id)
    {
        $sql = "delete from bs_tin_tuc where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}

//ma_tin_tuc, tieu_de, tom_tat, chi_tiet, hinh, tac_gia, ngay_dang, ngay_gui, so_luot_xem
?>
