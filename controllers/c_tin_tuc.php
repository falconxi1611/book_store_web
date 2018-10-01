<?php
@session_start();

class C_tin_tuc
{
    public function Hien_thi_tin_tuc()
    {
        //Model
        include("models/m_loai_sach.php");
        $m_loai_sach = new M_loai_sach();
        $loai_sachs  = $m_loai_sach->Doc_loai_sach();
        include("models/m_slide_banner.php");
        $m_slide_banner = new M_slide_banner();
        $slides         = $m_slide_banner->Doc_slide_banner();
        include('models/m_tin_tuc.php');
        $m_tin_tuc = new M_tin_tuc();
        $tin_tucs  = $m_tin_tuc->Doc_tin_tuc();
        $id        = $tin_tucs[0]->id;
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
        }
        $tin = $m_tin_tuc->Doc_tin_tuc_theo_id($id);

        //Phan trang
        include('Pager.php');
        $p        = new pager();
        $limit    = 6;
        $count    = count($tin_tucs);
        $vt       = $p->findStart($limit);
        $pages    = $p->findPages($count, $limit);
        $curpage  = $_GET['page'];
        $lst      = $p->pageList($curpage, $pages);
        $tin_tucs = $m_tin_tuc->Doc_tin_tuc($vt, $limit);

        //View
        include('Smarty_Book.php');
        $smarty = new Smarty_book();
        $title  = 'Nhà sách FTStore | Tin Tức';
        $smarty->assign('slides', $slides); //Hiển thị banner
        $smarty->assign('title', $title);
        $smarty->assign('tin_tucs', $tin_tucs);
        $smarty->assign('tin', $tin);
        $smarty->assign('loai_sachs', $loai_sachs);
        $smarty->assign("lst", $lst);
        $smarty->assign("act3", 'act');
        $view = 'views/tin_tuc/v_tin_tuc.tpl';
        $smarty->assign('view', $view);
        $smarty->Hien_thi_giao_dien('tin_tuc/layout.tpl');

    }
}

?>