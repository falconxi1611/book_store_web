<?php
@session_start();
include_once('controllers/c_gio_hang.php');
include_once("public/libs/errorMessage.inc");

/** Define Constant */
const TITLE_CUSTOMER  = 'FT Book Store';
const VIEW_CUSTOMER   = 'gio_hang/layout.tpl';
const VIEW_ADD        = 'views/khach_hang/v_them_khach_hang.tpl';
const VIEW_PRINT_BILL = 'views/khach_hang/v_in_hoa_don.tpl';

/**
 * <pre>
 * <p>[Summary]</p>
 * Controller Customer Processing
 * </pre>
 *
 * @author ToanLD3
 *
 */
class C_khach_hang
{
    /**
     * <pre>
     * <p>[Summary]</p>
     * </pre>
     *  Intinial
     */
    public function __construct()
    {
        include_once('controllers/Smarty_Book.php');
        include_once('models/m_khach_hang.php');
    }

    /**
     * <pre>
     * <p>[Summary]</p>
     * Register customer
     * </pre>
     *
     */
    public function dang_ky()
    {
        $smarty = new Smarty_book();
        $smarty->assign('title', TITLE_CUSTOMER);

        if (isset($_POST['submit']))
        {
            $ten_khach_hang = $_POST['ten_khach_hang'];
            $email          = $_POST['email'];
            $dia_chi        = $_POST['dia_chi'];
            $dien_thoai     = $_POST['dien_thoai'];
            $ghi_chu        = $_POST['ghi_chu'];
            $m_khach_hang   = new M_khach_hang();
            $err            = checkErrorInputOrder($ten_khach_hang, $email, $dia_chi, $dien_thoai);
            if (count($err) > 0)
            {
                $smarty->assign('error', $err);
                $smarty->assign('view', VIEW_ADD);
                $smarty->display(VIEW_CUSTOMER);
            }
            else
            {
                $id_khach_hang = $m_khach_hang->themKhachHang($ten_khach_hang, $email, $dia_chi, $dien_thoai, $ghi_chu);
                if ($id_khach_hang > 0)
                {
                    $ngay_dat     = date('Y-m-d');
                    $tong_tien    = 0;
                    $con_lai      = 0;
                    $tien_dat_coc = $_POST['tien_dat_coc'];
                    $httt         = $_POST['httt'];
                    $ghi_chu      = "";
                    $don_hang     = $m_khach_hang->themDonHang($id_khach_hang, $ngay_dat, $tong_tien, $tien_dat_coc, $con_lai, $httt, $ghi_chu);

                    if ($don_hang > 0)
                    {
                        $c_gio_hang = new c_gio_hang();
                        $gio_hang   = $c_gio_hang->layGioHang();
                        foreach ($gio_hang as $key => $value)
                        {
                            $m_khach_hang->themChiTietDonHang($don_hang, $key, $value, 0);
                        }

                        $m_khach_hang->capNhatDonGia_sach($don_hang);
                        $m_khach_hang->capNhatTongTien($don_hang);
                        if ($tien_dat_coc >= 0)
                        {
                            $m_khach_hang->capNhatTienConLai($don_hang);
                        }

                        $c_gio_hang->xoaGioHang();
                        $smarty->assign('view', VIEW_PRINT_BILL);
                        $smarty->display(VIEW_CUSTOMER);
                    }
                }
            }
        }
        else
        {
            if (isset($_SESSION["username"]) > 0)
            {
                $flg_login = 1;
                $smarty->assign('flg_login', $flg_login);
                $smarty->assign('username', $_SESSION["username"]);
                $smarty->assign('avatar', $_SESSION["avatar"]);
            }

            $smarty->assign('view', VIEW_ADD);
            $smarty->display(VIEW_CUSTOMER);
        }
    }
}
