<?php
session_start();
require_once("Smarty_quan_tri.php");
include_once("models/m_loai_sach.php");

class C_loai_sach
{
    public function Hien_thi_loai_sach()
    {
        // Model

        $m_loai_sach = new M_loai_sach();
        $loai_sachs  = $m_loai_sach->Doc_loai_sach();

        //Phan trang
        include('Pager.php');
        $p          = new pager();
        $limit      = 10;
        $count      = count($loai_sachs);
        $vt         = $p->findStart($limit);
        $pages      = $p->findPages($count, $limit);
        $curpage    = $_GET['page'];
        $lst        = $p->pageList($curpage, $pages);
        $loai_sachs = $m_loai_sach->Doc_loai_sach($vt, $limit);

        // Views
        $smarty = new Smarty_quan_tri();
        $smarty->assign("title", "Quản lý Nhà Sách FT Store");
        $smarty->assign("tieude", "Danh sách loại sách");

        $smarty->assign("loai_sachs", $loai_sachs);
        $smarty->assign("lst", $lst);
        $smarty->assign("view", "views/loaisach/v_loaisach.tpl");
        $smarty->display("layout.tpl");
    }

    public function Them_loai_sach()
    {
        // Model
        if (isset($_POST["btnCapnhat"]))
        {
            $ten_loai_sach = $_POST["ten_loai"];
            $id_loai_cha   = $_POST["id_loai_cha"];
            $trang_thai    = $_POST["trang_thai"];
            // Thêm
            $m_loai_sach = new M_loai_sach();
            $kq          = $m_loai_sach->Them_loai_sach($ten_loai_sach, $id_loai_cha, $trang_thai);
            if ($kq)
            {
                echo "<script>alert('Thêm thành công');window.location='loaisach.php'</script>";
            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }

        }
        // Views
        $smarty = new Smarty_quan_tri();
        $smarty->assign("title", "Quản lý Nhà Sách FT Store");
        $smarty->assign("tieude", "Thêm loại sách");
        $smarty->assign("view", "views/loaisach/v_Themloaisach.tpl");
        $smarty->display("layout.tpl");
    }

    public function Sua_loai_sach()
    {
        // Model
        $id          = $_GET["ma_loai"];
        $m_loai_sach = new M_loai_sach();
        $loai_sach   = $m_loai_sach->Doc_loai_sach_theo_id($id);
        if (isset($_POST["btnCapnhat"]))
        {
            $ten_loai_sach = $_POST["ten_loai"];
            $id_loai_cha   = $_POST["id_loai_cha"];
            $trang_thai    = $_POST["trang_thai"];
            //  echo $ten_loai_sach.",".$id_loai_cha.", ".$trang_thai;exit;
            // Sửa
            $m_loai_sach = new M_loai_sach();
            $kq          = $m_loai_sach->Sua_loai_sach($ten_loai_sach, $id_loai_cha, $trang_thai, $id);
            if ($kq)
            {
                // Thành công
                // Di chuyển hình về server
                echo "<script>alert('Cập nhật thành công');window.location='loaisach.php'</script>";
            }
            else
            {
                echo "<script>alert('Cập nhật không thành công')</script>";
            }

        }

        // Views
        $smarty = new Smarty_quan_tri();
        $smarty->assign("title", "Quản lý Nhà Sách FT Store");
        $smarty->assign("tieude", "Sửa loại sách");

        $smarty->assign("loai_sach", $loai_sach);
        $smarty->assign("view", "views/loaisach/v_Sualoaisach.tpl");
        $smarty->display("layout.tpl");
    }

    public function Xoa_loai_sach()
    {
        // Model
        $id          = $_GET["ma_loai"];
        $m_loai_sach = new M_loai_sach();
        $kq          = $m_loai_sach->Xoa_loai_sach($id);
        if ($kq)
        {
            // Thành công
            echo "<script>alert('Xóa loại sách thành công');window.location='loaisach.php'</script>";
        }
        else
        {
            echo "<script>alert('Xóa loại sách không thành công');window.location='loaisach.php'</script>";
        }

    }
}

?>