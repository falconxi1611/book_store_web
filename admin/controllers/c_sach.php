<?php
session_start();
require_once("Smarty_quan_tri.php");
require_once("models/m_sach.php");
require_once("models/m_tac_gia.php");
require_once("models/m_loai_sach.php");
require_once("models/m_nha_xuat_ban.php");

class C_sach
{
    function Hien_thi_sach()
    {
        // Model
        $m_tac_gia   = new M_tac_gia();
        $m_loai_sach = new M_loai_sach();
        $m_sach      = new M_sach();
        $sachs       = $m_sach->Doc_sach();
        $loai_sachs  = $m_loai_sach->Doc_loai_sach();
//		print_r($loai_sachs);
        $tac_gia = $m_tac_gia->Doc_tac_gia();

        //Phan trang
        include('Pager.php');
        $p       = new pager();
        $limit   = 10;
        $count   = count($sachs);
        $vt      = $p->findStart($limit);
        $pages   = $p->findPages($count, $limit);
        $curpage = $_GET['page'];
        $lst     = $p->pageList($curpage, $pages);
        $sachs   = $m_sach->Doc_sach($vt, $limit);


        $smarty = new Smarty_quan_tri();
        $smarty->assign("title", "Quản lý Nhà Sách FT Store");
        $smarty->assign("tieude", "Danh sách sách");

        $smarty->assign("sachs", $sachs);
        $smarty->assign("tac_gia", $tac_gia);
        $smarty->assign("loai_sachs", $loai_sachs);
        $smarty->assign("lst", $lst);
        $smarty->assign("view", "views/sach/v_sach.tpl");
        $smarty->display("layout.tpl");
    }

    public function Them_sach()
    {
        $m_tac_gia      = new M_tac_gia();
        $tac_gia        = $m_tac_gia->Doc_tac_gia();
        $m_loai_sach    = new M_loai_sach();
        $loai_sachs     = $m_loai_sach->Doc_loai_sach();
        $m_nha_xuat_ban = new M_nha_xuat_ban();
        $nha_xuat_ban   = $m_nha_xuat_ban->Doc_nha_xuat_ban();
//		 Model
        //	`id`, `ten_sach`, `id_tac_gia`, `gioi_thieu`, `doc_thu`, `id_loai_sach`, `id_nha_xuat_ban`, `so_trang`, `ngay_xuat_ban`, `kich_thuoc`, `sku`, `trong_luong`, `trang_thai`, `hinh`, `don_gia`, `gia_bia`, `noi_bat`
        if (isset($_POST["btnCapnhat"]))
        {
            $id              = NULL;
            $ten_sach        = $_POST["ten_sach"];
            $id_tac_gia      = $_POST["id_tac_gia"];
            $gioi_thieu      = $_POST["gioi_thieu"];
            $doc_thu         = $_POST["doc_thu"];
            $id_loai_sach    = $_POST["id_loai_sach"];
            $id_nha_xuat_ban = $_POST["id_nha_xuat_ban"];
            $so_trang        = $_POST["so_trang"];
            $ngay_xuat_ban   = $_POST["ngay_xuat_ban"];
            $kich_thuoc      = $_POST["kich_thuoc"];
            $sku             = $_POST["sku"];
            $trong_luong     = $_POST["trong_luong"];
            $trang_thai      = $_POST["trang_thai"];
            $hinh            = $_FILES["hinh"]["error"] == 0 ? $_FILES["hinh"]["name"] : "";
            $don_gia         = $_POST["don_gia"];
            $gia_bia         = $_POST["gia_bia"];
            $noi_bat         = $_POST["noi_bat"];
            // Thêm
            $m_sach = new M_sach();
            $kq     = $m_sach->Them_sach($id, $ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat);
            if ($kq)
            {
                // Thành công
                // Di chuyển hình về server
                if ($_FILES["hinh"]["error"] == 0)
                {
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], "../public/layout/images/$hinh");
                }
                echo "<script>alert('Cập nhật thành công');window.location='sach.php'</script>";
            }
            else
            {
                echo "<script>alert('Cập nhật không thành công')</script>";
            }

        }
        // Views
        $smarty = new Smarty_quan_tri();
        $smarty->assign("title", "Quản lý Nhà Sách FT Store");
        $smarty->assign("tieude", "Thêm sách");
        $smarty->assign("loai_sachs", $loai_sachs);
        $smarty->assign("tac_gia", $tac_gia);
        $smarty->assign("nha_xuat_ban", $nha_xuat_ban);
        $smarty->assign("view", "views/sach/v_Themsach.tpl");
        $smarty->display("layout.tpl");
    }

    public function Sua_sach()
    {
        // Model
        $id     = $_GET["id"];
        $m_sach = new M_sach();
        $sach   = $m_sach->Doc_sach_theo_id($id);

        $m_tac_gia = new M_tac_gia();
        $tac_gias  = $m_tac_gia->Doc_tac_gia();
        $tac_gia   = $m_tac_gia->Doc_tac_gia_theo_id($sach->id_tac_gia);

        $m_loai_sach = new M_loai_sach();
        $loai_sachs  = $m_loai_sach->Doc_loai_sach();
        $loai_sach   = $m_loai_sach->Doc_loai_sach_theo_id($sach->id_loai_sach);

        $m_nha_xuat_ban = new M_nha_xuat_ban();
        $nha_xuat_ban   = $m_nha_xuat_ban->Doc_nha_xuat_ban();
        $nxb            = $m_nha_xuat_ban->Doc_nxb_theo_id_nxb($sach->id_nha_xuat_ban);
        if (isset($_POST["btnCapnhat"]))
        {
            $ten_sach        = $_POST["ten_sach"];
            $id_tac_gia      = $_POST["id_tac_gia"];
            $gioi_thieu      = $_POST["gioi_thieu"];
            $doc_thu         = $_POST["doc_thu"];
            $id_loai_sach    = $_POST["id_loai_sach"];
            $id_nha_xuat_ban = $_POST["id_nha_xuat_ban"];
            $so_trang        = $_POST["so_trang"];
            $ngay_xuat_ban   = $_POST["ngay_xuat_ban"];
            $kich_thuoc      = $_POST["kich_thuoc"];
            $sku             = $_POST["sku"];
            $trong_luong     = $_POST["trong_luong"];
            $trang_thai      = $_POST["trang_thai"];
            $hinh            = $_FILES["hinh"]["error"] == 0 ? $_FILES["hinh"]["name"] : $sach->hinh;

            $don_gia = $_POST["don_gia"];
            $gia_bia = $_POST["gia_bia"];
            $noi_bat = $_POST["noi_bat"];
            // Sửa
            $kq = $m_sach->Sua_sach($ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat, $id);
            if ($kq)
            {
                // Thành công
                // Di chuyển hình về server
                if ($_FILES["hinh"]["error"] == 0)
                {
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], "../public/layout/images/{$hinh}");
                }
                echo "<script>alert('Cập nhật thành công');window.location='sach.php'</script>";
            }
            else
            {
                echo "<script>alert('Cập nhật không thành công')</script>";
            }


        }

        // Views
        $smarty = new Smarty_quan_tri();
        $smarty->assign("title", "Quản lý Nhà Sách FT Store");
        $smarty->assign("tieude", "Sửa sách");

        $smarty->assign("sach", $sach);
        $smarty->assign("tac_gia", $tac_gia);
        $smarty->assign("tac_gias", $tac_gias);
        $smarty->assign("loai_sach", $loai_sach);
        $smarty->assign("loai_sachs", $loai_sachs);
        $smarty->assign("nha_xuat_ban", $nha_xuat_ban);
        $smarty->assign("nxb", $nxb);
        $smarty->assign("view", "views/sach/v_Suasach.tpl");
        $smarty->display("layout.tpl");
    }

    public function Xoa_sach()
    {
        // Model
        $id     = $_GET["id"];
        $m_sach = new M_sach();
        $kq     = $m_sach->Xoa_sach($id);
        if ($kq)
        {
            // Thành công
            echo "<script>alert('Xóa sách thành công');window.location='sach.php'</script>";
        }
        else
        {
            echo "<script>alert('Xóa sách không thành công');window.location='sach.php'</script>";
        }

    }
}

?>