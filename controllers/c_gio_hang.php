<?php
@session_start();

class C_gio_hang
{
    protected $smarty;

    function xem_gio_hang()
    {
        include_once('controllers/Smarty_Book.php');
        $smarty = new Smarty_book();
        $smarty->assign('title', 'Giỏ hàng');
        $gio_hang = $this->layGioHang();
        if ($gio_hang)
        {
            $gio_hang_sach = array();
            foreach ($gio_hang as $key => $value)
            {
                $gio_hang_sach[$key] = $value;
            }
            if ($gio_hang_sach)
            {
                $_SESSION['gio_hang_sach'] = $gio_hang_sach;
                $smarty->assign('ds_sach', $this->lay_thong_tin_sach($gio_hang_sach));
            }
        }

        //Phần hiển thị loại sách trên menu
        include_once("models/m_loai_sach.php");
        $m_loai_sach = new M_loai_sach();
        $loai_sachs  = $m_loai_sach->Doc_loai_sach();

        if (isset($_SESSION["username"]) > 0)
        {
            $flg_login = 1;
            $smarty->assign('flg_login', $flg_login);
            $smarty->assign('username', $_SESSION["username"]);
            $smarty->assign('avatar', $_SESSION["avatar"]);
        }
        $smarty->assign("loai_sachs", $loai_sachs);
        $smarty->assign("view", "views/gio_hang/v_gio_hang.tpl");
        $smarty->display("gio_hang/layout.tpl");

    }

    function layGioHang()
    {
        if (isset($_SESSION['gioHang']))
            return $_SESSION['gioHang'];
        else
            return false;
    }

    function lay_thong_tin_sach($sach)
    {
        $id = array();
        foreach ($sach as $key => $value)
        {
            $id[] = $key;
        }
        $id = implode(",", $id);
        include_once('models/m_sach.php');
        $m_sach           = new M_sach();
        $ds_sach          = $m_sach->lay_sach_cho_gio_hang($id);
        $ds_sach_gio_hang = array();//Đưa số lượng vào $ds_sach
        foreach ($ds_sach as $item)
        {
            $item->so_luong     = $sach[$item->id];
            $ds_sach_gio_hang[] = $item;
        }
        return $ds_sach_gio_hang;

    }

    function themGioHang($maSP, $so_luong, $donGia)
    {
        if ($so_luong > 0)
        {
            if (isset($_SESSION['gioHang'][$maSP]))
            {
                $_SESSION['thanh_tien'] -= @$_SESSION['gioHang'][$maSP] * $donGia;
                $_SESSION['so_luong']   -= @$_SESSION['gioHang'][$maSP];
            }

            $_SESSION['gioHang'][$maSP] = $so_luong;

            if (isset($_SESSION['thanh_tien']))
            {
                $_SESSION['thanh_tien'] = @$_SESSION['thanh_tien'] + $so_luong * $donGia;
                $_SESSION['so_luong']   = @$_SESSION['so_luong'] + $so_luong;
            }
            else
            {
                $_SESSION['thanh_tien'] = $so_luong * $donGia;
                $_SESSION['so_luong']   = $so_luong;
            }
        }
        elseif ($so_luong == 0)
        {
            xoaMatHang($maSP, $donGia);
        }
    }

    function xoaMatHang($maSP, $donGia)
    {
        $gioHang    = $this->layGioHang();
        $gioHangMoi = array();
        foreach ($gioHang as $key => $value)
        {
            if ($key != $maSP)
                $gioHangMoi[$key] = $value;
            else
            {
                $_SESSION['thanh_tien'] -= $gioHang[$maSP] * $donGia;
                $_SESSION['so_luong']   -= $gioHang[$maSP];
            }
        }
        if (!empty($gioHangMoi))
        {
            $_SESSION['gioHang'] = $gioHangMoi;
        }
        else
        {
            $this->xoaGioHang();
        }
    }

    function xoaGioHang()
    {
        unset($_SESSION['gioHang']);
        unset($_SESSION['thanh_tien']);
        unset($_SESSION['so_luong']);
    }

    function thanh_tien()
    {
        if (isset($_SESSION['thanh_tien']))
            return $_SESSION['thanh_tien'];
        else
            return 0;
    }

    function so_luong()
    {
        if (isset($_SESSION['so_luong']))
            return $_SESSION['so_luong'];
        else
            return 0;
    }

    function tongSoMatHang()
    {
        if (isset($_SESSION['so_luong']))
            return $_SESSION['so_luong'];
        else
            return 0;
    }

    function capNhatGioHang($maSP, $so_luong, $donGia)
    {
        if (!is_numeric($so_luong))
            return false;
        $so_luong = (int)$so_luong;
        if ($so_luong > 0)
        {
            $_SESSION['thanh_tien'] -= @$_SESSION['gioHang'][$maSP] * $donGia;
            $_SESSION['thanh_tien'] += $so_luong * $donGia;

            $_SESSION['so_luong'] -= @$_SESSION['gioHang'][$maSP];
            $_SESSION['so_luong'] += $so_luong;

            $_SESSION['gioHang'][$maSP] = $so_luong;
            return false;
        }
        if ($so_luong == 0)
            $this->xoaMatHang($maSP, $donGia);
        return false;
    }
}

?>