<?php
@session_start();
include('Smarty_Book.php');
include("models/m_loai_sach.php");
include("models/m_slide_banner.php");
include('models/m_tin_tuc.php');
include('Pager.php');

/** Define Constant */
const TITLE  = 'Nhà sách FTStore | Tin Tức';
const LAYOUT = 'tin_tuc/layout.tpl';
const VIEW   = 'views/tin_tuc/v_tin_tuc.tpl';

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
     * Get data News
     * </pre>
     *
     * Redirect to view news
     *
     */
    public function Hien_thi_tin_tuc()
    {
        $m_loai_sach = new M_loai_sach();
        $loai_sachs  = $m_loai_sach->Doc_loai_sach();

        $m_slide_banner = new M_slide_banner();
        $slides         = $m_slide_banner->Doc_slide_banner();

        $m_tin_tuc = new M_tin_tuc();
        $tin_tucs  = $m_tin_tuc->Doc_tin_tuc();
        $id        = $tin_tucs[0]->id;
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
        }
        $tin = $m_tin_tuc->Doc_tin_tuc_theo_id($id);

        $p        = new pager();
        $limit    = 6;
        $count    = count($tin_tucs);
        $vt       = $p->findStart($limit);
        $pages    = $p->findPages($count, $limit);
        $curpage  = $_GET['page'];
        $lst      = $p->pageList($curpage, $pages);
        $tin_tucs = $m_tin_tuc->Doc_tin_tuc($vt, $limit);

        $smarty = new Smarty_book();
        $title  = TITLE;

        if (isset($_SESSION["username"]))
        {
            $flg_login = 1;
            $smarty->assign('flg_login', $flg_login);
            $smarty->assign('username', $_SESSION["username"]);
            $smarty->assign('avatar', $_SESSION["avatar"]);
        }

        /** Render view */
        $smarty->assign('slides', $slides);
        $smarty->assign('title', $title);
        $smarty->assign('tin_tucs', $tin_tucs);
        $smarty->assign('tin', $tin);
        $smarty->assign('loai_sachs', $loai_sachs);
        $smarty->assign("lst", $lst);
        $smarty->assign("act3", 'act');
        $smarty->assign('view', VIEW);
        $smarty->Hien_thi_giao_dien(LAYOUT);

    }
}
