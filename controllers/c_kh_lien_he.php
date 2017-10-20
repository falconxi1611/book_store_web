<?php

class C_kh_lien_he
{
	public function __construct()
	{
		include_once('controllers/Smarty_Book.php');
		include_once('models/m_khach_hang.php');
	}
	
    public function kh_lien_he()
    {
		include("models/m_slide_banner.php");
		$m_slide_banner=new M_slide_banner();
		$slides=$m_slide_banner->Doc_slide_banner();
		$smarty=new Smarty_book();
		$smarty->assign('slides', $slides); //Hiển thị Sliders
        
        $smarty->assign('title','FT Book Store');
        if(isset($_POST['kh_lien_he']))
        {
            $ten_khach_hang=$_POST['Name'];
            $email=$_POST['Email'];
            $dien_thoai=$_POST['Telephone'];
            $ghi_chu=$_POST['message'];
          	$dia_chi= '';
            $m_khach_hang=new M_khach_hang();
            $id_khach_hang=$m_khach_hang->themKhachHang($ten_khach_hang, $email, $dia_chi, $dien_thoai, $ghi_chu);
            if($id_khach_hang>0)
            $view="views/khach_hang/v_kh_lien_he.tpl";
            $smarty->assign('view',$view);
            $smarty->display('tin_tuc/layout.tpl'); 
        }
        else
        {
    		$view='views/khach_hang/v_them_khach_hang.tpl';
        	$smarty->assign('view',$view);
        	$smarty->display('tin_tuc/layout.tpl');   
        }       
    }
	
	public function Newsletter()
    {
		include("models/m_slide_banner.php");
		$m_slide_banner=new M_slide_banner();
		$slides=$m_slide_banner->Doc_slide_banner();
		$smarty=new Smarty_book();
		$smarty->assign('slides', $slides); //Hiển thị Sliders
        
        $smarty->assign('title','FT Book Store');
        if(isset($_POST['Newsletter']))
        {
            $ten_khach_hang='Newsletter';
            $email=$_POST['Email'];
            $dien_thoai='';
            $ghi_chu='';
          	$dia_chi= '';
            $m_khach_hang=new M_khach_hang();
            $id_khach_hang=$m_khach_hang->themKhachHang($ten_khach_hang, $email, $dia_chi, $dien_thoai, $ghi_chu);
            if($id_khach_hang>0)
            $view="views/khach_hang/v_Newsletter.tpl";
            $smarty->assign('view',$view);
            $smarty->display('lien_he/layout.tpl'); 
        }
        else
        {
    		$view='views/khach_hang/v_them_khach_hang.tpl';
        	$smarty->assign('view',$view);
        	$smarty->display('tin_tuc/layout.tpl');   
        }       
    }
	
	
}