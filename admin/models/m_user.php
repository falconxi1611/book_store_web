<?php
require_once("database.php");

class M_user extends database
{
    function Xoa_nguoi_dung($id)
    {
        $sql = "delete from bs_nguoi_dung where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    function Sua_nguoi_dung($id_loai_user, $ho_ten, $email, $ngay_sinh, $dia_chi, $avatar, $dien_thoai, $id)
    {
        $sql = "update bs_nguoi_dung ";
        $sql .= "set id_loai_user=?, ho_ten=?, email=?, ngay_sinh=?, dia_chi=?, avatar=?, dien_thoai=?";
        $sql .= "where id=?";
        $this->setQuery($sql);
        $param = array($id_loai_user, $ho_ten, $email, $ngay_sinh, $dia_chi, $avatar, $dien_thoai, $id);
        return $this->execute($param);
    }

    function Them_nguoi_dung($tai_khoan, $mat_khau, $id_loai_user, $ho_ten, $email, $ngay_sinh, $dia_chi, $ngay_dang_ky, $avatar, $dien_thoai)
    {
        $sql = "insert into bs_nguoi_dung values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute(array(NULL, $tai_khoan, $mat_khau, $id_loai_user, NULL, $ho_ten, $email, $ngay_sinh, $dia_chi, NULL, $ngay_dang_ky, NULL, NULL, $avatar, NULL, $dien_thoai));
    }

    function Doc_nguoi_dung()
    {
        $sql = "select * from bs_nguoi_dung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    function Doc_nguoi_dung_theo_id($id)
    {
        $sql = "select * from bs_nguoi_dung where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    function Doc_Table()
    {
        $sql = "SHOW TABLES FROM ban_sach";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    function Doc_nguoi_dung_theo_tenDn_pass($ten, $mk)
    {
        $sql = "select * from bs_nguoi_dung where tai_khoan=? and mat_khau=?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten, md5($mk)));
    }
}

?>