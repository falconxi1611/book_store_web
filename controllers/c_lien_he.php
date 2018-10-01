<?php
@session_start();

class C_lien_he
{
    public function Hien_thi_lien_he()
    {
        //Model
        include("models/m_loai_sach.php");
        $m_loai_sach = new M_loai_sach();
        $loai_sachs  = $m_loai_sach->Doc_loai_sach();
        //View
        include('controllers/Smarty_Book.php');
        $smarty = new Smarty_Book();
        $title  = 'Nhà sách liên hệ | Liên hệ';
        $smarty->assign('title', $title);
        $view = 'views/v_lien_he.tpl';
        $smarty->assign("act5", 'act');
        $smarty->assign('view', $view);
        $smarty->assign('loai_sachs', $loai_sachs);
        $smarty->Hien_thi_giao_dien('lien_he/layout.tpl');
    }

}

?>