<?php
session_start();
include("Smarty_quan_tri.php");
include("models/m_tin_tuc.php");
include('Pager.php');

/** Define Constant */
const TITLE     = "Quản lý Nhà Sách FT Store";
const TIEU_DE   = "Danh sách tin tức";
const VIEW_LIST = "views/tintuc/v_tintuc.tpl";
const LAYOUT    = "location:tintuc.php";


/**
 * <pre>
 * <p>[Summary]</p>
 * Controller News Processing
 * </pre>
 *
 * @author ToanLD3
 *
 */
class C_tin_tuc
{
    /**
     * <pre>
     * <p>[Summary]</p>
     * </pre>
     * Display intinial news
     *
     */
    function Hien_thi_tin_tuc()
    {
        // Message
        $msg = isset($_SESSION["msg"]) ? $_SESSION["msg"] : "";
        if (isset($_SESSION["msg"])) unset($_SESSION["msg"]);

        // Models
        $m_tin_tuc = new M_tin_tuc();
        $tin_tuc   = $m_tin_tuc->Doc_tin_tuc();

        //Pagenation
        $p       = new pager();
        $limit   = 6;
        $count   = count($tin_tuc);
        $vt      = $p->findStart($limit);
        $pages   = $p->findPages($count, $limit);
        $curpage = $_GET['page'];
        $lst     = $p->pageList($curpage, $pages);
        $tin_tuc = $m_tin_tuc->Doc_tin_tuc($vt, $limit);

        // View
        $smarty = new Smarty_quan_tri();
        $smarty->assign("title", TITLE);
        $smarty->assign("tieude", TIEU_DE);
        $smarty->assign("tin_tuc", $tin_tuc);
        $smarty->assign("msg", $msg);
        $smarty->assign("view", VIEW_LIST);
        $smarty->assign("lst", $lst);
        $smarty->display("layout.tpl");

    }

    /**
     * <pre>
     * <p>[Summary]</p>
     * </pre>
     * Add news
     *
     */
    function Them_tin_tuc()
    {
        // Models
        if (isset($_POST["btnCapnhat"]))
        {
            $id                = NULL;
            $tieu_de_tin       = $_POST["tieu_de"];
            $noi_dung_tom_tat  = $_POST["tom_tat"];
            $noi_dung_chi_tiet = $_POST["chi_tiet"];
            $trang_thai        = $_POST["trang_thai"];
            $hinh_dai_dien     = $_FILES["hinh_dai_dien"]["error"] == 0 ? $_FILES["hinh_dai_dien"]["name"] : "";
            $id_loai_tin_tuc   = $_POST["ma_loai"];
            $ngay_dang         = $_POST["ngay_dang"];
            $m_tin_tuc         = new M_tin_tuc();
            $kq                = $m_tin_tuc->Them_tin_tuc($id, $tieu_de_tin, $noi_dung_tom_tat, $noi_dung_chi_tiet, $trang_thai, $hinh_dai_dien, $id_loai_tin_tuc, $ngay_dang);
            if ($kq)
            {
                // Move
                if ($hinh_dai_dien != "")
                {
                    move_uploaded_file($_FILES["hinh_dai_dien"]["tmp_name"], "../public/layout/hinh_tin_tuc/$hinh_dai_dien");
                }
                $_SESSION["msg"] = "Thêm tin tức thành công";
            }
            else
            {
                $_SESSION["msg"] = "Thêm tin tức bị lỗi";
            }
            header(LAYOUT);
        }

        // View
        $smarty = new Smarty_quan_tri();
        $smarty->assign("title", "Quản lý Nhà Sách FT Store");
        $smarty->assign("tieude", "Thêm tin tức");


        $smarty->assign("view", "views/tintuc/v_Themtintuc.tpl");
        $smarty->display("layout.tpl");

    }

    /**
     * <pre>
     * <p>[Summary]</p>
     * </pre>
     * Update news
     *
     */
    function Sua_tin_tuc()
    {
        // Models
        $id        = $_GET["ma_tin_tuc"];
        $m_tin_tuc = new M_tin_tuc();
        $tin_tuc   = $m_tin_tuc->Doc_tin_tuc_theo_id($id);
        // Cập nhật

        if (isset($_POST["btnCapnhat"]))
        {
            //$tieu_de_tin, $noi_dung_tom_tat, $noi_dung_chi_tiet, $trang_thai, $hinh_dai_dien, $id_loai_tin_tuc, $ngay_dang, $id//
            $tieu_de         = $_POST["tieu_de"];
            $tom_tat         = $_POST["tom_tat"];
            $chi_tiet        = $_POST["chi_tiet"];
            $trang_thai      = $_POST["trang_thai"];
            $hinh            = $_FILES["hinh"]["error"] == 0 ? $_FILES["hinh"]["name"] : $tin_tuc->hinh_dai_dien;
            $id_loai_tin_tuc = $_POST["id_loai_tin_tuc"];
            $ngay_dang       = $_POST["ngay_dang"];

            $m_tin_tuc = new M_tin_tuc();
            $kq        = $m_tin_tuc->Sua_tin_tuc($tieu_de, $tom_tat, $chi_tiet, $trang_thai, $hinh, $id_loai_tin_tuc, $ngay_dang, $id);
            if ($kq)
            {
                // Move
                if ($_FILES["hinh"]["error"] == 0)
                {
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], "../public/layout/hinh_tin_tuc/$hinh");
                }
                $_SESSION["msg"] = "Sửa tin tức thành công";
            }
            else
            {
                $_SESSION["msg"] = "Sửa tin tức bị lỗi";
            }
            header(LAYOUT);
        }


        // Kết thúc cập nhật
        // View
        $smarty = new Smarty_quan_tri();
        $smarty->assign("title", "Quản lý Nhà Hàng");
        $smarty->assign("tin_tuc", $tin_tuc);
        $smarty->assign("tieude", "Sửa tin tức");

        $smarty->assign("view", "views/tintuc/v_Suatintuc.tpl");
        $smarty->display(LAYOUT);

    }

    /**
     * <pre>
     * <p>[Summary]</p>
     * </pre>
     * Delete news
     *
     */
    function Xoa_tin_tuc()
    {
        $id        = $_GET["ma_tin_tuc"];
        $m_tin_tuc = new M_tin_tuc();
        $kq        = $m_tin_tuc->Xoa_tin_tuc($id);
        if ($kq)
        {
            $_SESSION["msg"] = "Xóa tin tức thành công";
        }
        else
        {
            $_SESSION["msg"] = "Xóa tin tức bị lỗi";
        }
        header(LAYOUT);
    }
}
