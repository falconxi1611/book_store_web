<?php
@session_start();
include("Smarty_Book.php");
include('Pager.php');
include_once("models/m_loai_sach.php");
include("models/m_slide_banner.php");
include('models/m_sach.php');
include('models/m_khach_hang.php');
include('models/m_nha_xuat_ban.php');

/** Define Constant */
const LAYOUT           = 'sach/layout.tpl';
const LAYOUT_DETAIL    = 'sach_chi_tiet/layout.tpl';
const LAYOUT_NXB       = 'sach/layout.tpl';
const VIEW_BOOK        = 'views/sach/v_sach.tpl';
const VIEW_BOOK_DETAIL = 'views/sach_chi_tiet/v_sach_chi_tiet.tpl';
const VIEW_BOOK_NXB    = 'views/sach_nxb/v_sach.tpl';
const TITLE            = 'FT Book Store';


/**
 * <pre>
 * <p>[Summary]</p>
 * View book data processing controller
 * </pre>
 *
 */
class C_sach
{
    /**
     * <pre>
     * <p>[Summary]</p>
     * Get data book
     * </pre>
     *
     * Redirect to view book
     *
     */
    public function Hien_thi_sach()
    {
        //Model
        $m_loai_sach = new M_loai_sach();
        $loai_sachs  = $m_loai_sach->Doc_loai_sach();

        $m_slide_banner = new M_slide_banner();
        $slides         = $m_slide_banner->Doc_slide_banner();

        $id_loai_sach = $_GET['id'];

        $loai_sach = $m_loai_sach->Doc_loai_sach_theo_id($id_loai_sach);

        $m_sach = new M_sach();
        if ($loai_sach->id_loai_cha == 0)
        {
            $sachs = $m_sach->Doc_sach_theo_id_loai_cha($id_loai_sach);
        }
        else
        {
            $sachs = $m_sach->Doc_sach_theo_id_loai_sach($id_loai_sach);
        }
        $dem = count($sachs);

        $loai_sach_dang_xem = $m_loai_sach->Doc_loai_sach_theo_id($id_loai_sach);
        $sach_yeu_thichs    = $m_sach->Doc_sach_yeu_thich();

        $p       = new pager();
        $limit   = 9;
        $count   = count($sachs);
        $vt      = $p->findStart($limit);
        $pages   = $p->findPages($count, $limit);
        $curpage = $_GET['page'];
        $lst     = $p->pageList($curpage, $pages);
        if ($loai_sach->id_loai_cha == 0)
        {
            $sachs = $m_sach->Doc_sach_theo_id_loai_cha($id_loai_sach, $vt, $limit);
        }
        else
        {
            $sachs = $m_sach->Doc_sach_theo_id_loai_sach($id_loai_sach, $vt, $limit);
        }


        $smarty = new Smarty_book();

        if (isset($_SESSION["username"]) > 0)
        {
            $flg_login = 1;
            $smarty->assign('flg_login', $flg_login);
            $smarty->assign('username', $_SESSION["username"]);
            $smarty->assign('avatar', $_SESSION["avatar"]);
        }
        $smarty->assign('title', TITLE);
        $smarty->assign('loai_sachs', $loai_sachs);
        $smarty->assign('slides', $slides);
        $smarty->assign('sachs', $sachs);
        $smarty->assign('sach_yeu_thichs', $sach_yeu_thichs);
        $smarty->assign('loai_sach_dang_xem', $loai_sach_dang_xem);
        $smarty->assign("lst", $lst);
        $smarty->assign("dem", $dem);
        $smarty->assign("act2", 'act');
        $smarty->assign('view', VIEW_BOOK);
        $smarty->Hien_thi_giao_dien(LAYOUT);
    }

    /**
     * <pre>
     * <p>[Summary]</p>
     * Get data detail book
     * </pre>
     *
     * Redirect to view detail book
     *
     */
    public function Hien_thi_sach_chi_tiet()
    {

        //model
        $id             = $_GET['id'];
        $m_sach         = new M_sach();
        $sach           = $m_sach->Doc_sach_theo_id($id);
        $m_slide_banner = new M_slide_banner();
        $slides         = $m_slide_banner->Doc_slide_banner();

        $m_loai_sach = new M_loai_sach();
        $loai_sachs  = $m_loai_sach->Doc_loai_sach();


        $m_khach_hang = new M_khach_hang();
        $binh_luans   = $m_khach_hang->Doc_binh_luan();

        $smarty = new Smarty_book();
        if (isset($_SESSION["username"]) > 0)
        {
            $flg_login = 1;
            $smarty->assign('flg_login', $flg_login);
            $smarty->assign('username', $_SESSION["username"]);
            $smarty->assign('avatar', $_SESSION["avatar"]);
        }

        $smarty->assign('loai_sachs', $loai_sachs);
        $smarty->assign('slides', $slides);
        $smarty->assign('title', TITLE);
        $smarty->assign('sach', $sach);
        $smarty->assign('binh_luans', $binh_luans);
        $smarty->assign('view', VIEW_BOOK_DETAIL);
        $smarty->display(LAYOUT_DETAIL);
    }

    /**
     * <pre>
     * <p>[Summary]</p>
     * Get data detail book pulishers
     * </pre>
     *
     * Redirect to view book pulishers
     *
     */
    public function Hien_thi_sach_theo_nxb()
    {
        //Model
        $id              = $_GET['id'];
        $m_sach          = new M_sach();
        $sachs           = $m_sach->Doc_sach_theo_id_nxb($id);
        $dem             = count($sachs);
        $sach_mois       = $m_sach->Doc_sach_moi();
        $sach_yeu_thichs = $m_sach->Doc_sach_yeu_thich();

        $m_loai_sach = new M_loai_sach();
        $loai_sachs  = $m_loai_sach->Doc_loai_sach();

        $m_slide_banner = new M_slide_banner();
        $slides         = $m_slide_banner->Doc_slide_banner();

        $m_nha_xuat_ban = new M_nha_xuat_ban();
        $nxb            = $m_nha_xuat_ban->Doc_nxb_theo_id_nxb($id);
        $nxbs           = $m_nha_xuat_ban->Doc_nha_xuat_ban();
        $nxb_khacs      = $m_nha_xuat_ban->Doc_nha_xuat_ban_khac($id);

        $p       = new pager();
        $limit   = 9;
        $count   = count($sachs);
        $vt      = $p->findStart($limit);
        $pages   = $p->findPages($count, $limit);
        $curpage = $_GET['page'];
        $lst     = $p->pageList($curpage, $pages);
        $sachs   = $m_sach->Doc_sach_theo_id_nxb($id, $vt, $limit);

        $smarty = new Smarty_Book();
        if (isset($_SESSION["username"]))
        {
            $flg_login = 1;
            $smarty->assign('flg_login', $flg_login);
            $smarty->assign('username', $_SESSION["username"]);
            $smarty->assign('avatar', $_SESSION["avatar"]);
        }
        $smarty->assign('sach_yeu_thichs', $sach_yeu_thichs);
        $smarty->assign('sach_mois', $sach_mois);
        $smarty->assign('nxb', $nxb);
        $smarty->assign('nxbs', $nxbs);
        $smarty->assign('nxb_khacs', $nxb_khacs);
        $smarty->assign('slides', $slides);
        $smarty->assign('sachs', $sachs);
        $smarty->assign('dem', $dem);
        $smarty->assign('lst', $lst);
        $smarty->assign('loai_sachs', $loai_sachs);
        $smarty->assign('title', TITLE);
        $smarty->assign('view', LAYOUT_NXB);
        $smarty->Hien_thi_giao_dien('');
    }
}
