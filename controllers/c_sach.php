<?php
@session_start();
class C_sach 
{
	
	public function Hien_thi_sach()
	{
		//Model
		include_once("models/m_loai_sach.php");
		$m_loai_sach=new M_loai_sach();
		$loai_sachs=$m_loai_sach->Doc_loai_sach();
		
		include("models/m_slide_banner.php");
		$m_slide_banner=new M_slide_banner();
		$slides=$m_slide_banner->Doc_slide_banner();
		
		$id_loai_sach =$_GET['id'];
		
		$loai_sach=$m_loai_sach->Doc_loai_sach_theo_id($id_loai_sach);
		
		
//		echo $id_loai_sach;
//		$dk_loc = $_POST['loc_sach'];
//		echo $dk_loc;
		include('models/m_sach.php');
		$m_sach = new M_sach();
		if($loai_sach->id_loai_cha==0)
		{
			$sachs=$m_sach->Doc_sach_theo_id_loai_cha($id_loai_sach);
		}
		else
		{
			$sachs= $m_sach->Doc_sach_theo_id_loai_sach($id_loai_sach);
		}
		$dem=count($sachs);
		
		$loai_sach_dang_xem=$m_loai_sach->Doc_loai_sach_theo_id($id_loai_sach);
		$sach_yeu_thichs = $m_sach->Doc_sach_yeu_thich();
//		echo count($sach_yeu_thichs);
		
		//Phan trang
		include('Pager.php');
		$p = new pager();
		$limit = 9;
		$count = count($sachs);
		$vt = $p->findStart($limit);
		$pages = $p->findPages($count,$limit);
		$curpage = $_GET['page'];
		$lst = $p->pageList($curpage,$pages);
		if($loai_sach->id_loai_cha==0)
		{
			$sachs=$m_sach->Doc_sach_theo_id_loai_cha($id_loai_sach,$vt,$limit);
		}
		else
		{
			$sachs= $m_sach->Doc_sach_theo_id_loai_sach($id_loai_sach,$vt,$limit);
		}
		//View
		
		include("Smarty_Book.php");
		$smarty=new Smarty_book();
		$title="FT Book Store";
		$smarty->assign('title', $title);
		$smarty->assign('loai_sachs', $loai_sachs);  
		$smarty->assign('slides', $slides);
		$smarty->assign('sachs',$sachs);
		$smarty->assign('sach_yeu_thichs',$sach_yeu_thichs);
		$smarty->assign('loai_sach_dang_xem', $loai_sach_dang_xem);
		$smarty->assign("lst",$lst);
		$smarty->assign("dem", $dem);
		//$smarty->assign('loai_sach_cons', $loai_sach_cons);
		$view = 'views/sach/v_sach.tpl';
		$smarty->assign('view',$view);
		$smarty->Hien_thi_giao_dien('sach/layout.tpl');
	}
	
	public function Hien_thi_sach_chi_tiet()
	{
		
		//model
		$id=$_GET['id'];
//		echo $id;
		include('models/m_sach.php');
		$m_sach = new M_sach();
		$sach = $m_sach->Doc_sach_theo_id($id); 
//		echo $sach->ten_sach;
		include("models/m_slide_banner.php");
		$m_slide_banner=new M_slide_banner();
		$slides=$m_slide_banner->Doc_slide_banner();
		
		include("models/m_loai_sach.php");
		$m_loai_sach=new M_loai_sach();
		$loai_sachs=$m_loai_sach->Doc_loai_sach();
		//Hiển thị bình luận
		include('models/m_khach_hang.php');
		$m_khach_hang = new M_khach_hang();
		$binh_luans = $m_khach_hang->Doc_binh_luan();
		
		//view
		include("Smarty_Book.php");
		$smarty=new Smarty_book();
		$title="FT Book Store";
		$smarty->assign('loai_sachs', $loai_sachs);  //HIển thị tại header
		$smarty->assign('slides', $slides); 
		$smarty->assign('title', $title); 
		$smarty->assign('sach', $sach); 
		$smarty->assign('binh_luans', $binh_luans);
		$view = 'views/sach_chi_tiet/v_sach_chi_tiet.tpl';
		$smarty->assign('view',$view);
		$smarty->display("sach_chi_tiet/layout.tpl");
	}
	
	public function Hien_thi_sach_theo_nxb()
	{
		//Model
		$id = $_GET['id'];
		include('models/m_sach.php');
		$m_sach = new M_sach();
		$sachs= $m_sach->Doc_sach_theo_id_nxb($id);
		$dem=count($sachs);
		$sach_mois = $m_sach->Doc_sach_moi();
		$sach_yeu_thichs = $m_sach->Doc_sach_yeu_thich();
		
		include("models/m_loai_sach.php");
		$m_loai_sach=new M_loai_sach();
		$loai_sachs=$m_loai_sach->Doc_loai_sach();
		
		include('models/m_slide_banner.php');
		$m_slide_banner = new M_slide_banner();
		$slides = $m_slide_banner->Doc_slide_banner();
		
		include('models/m_nha_xuat_ban.php');
		$m_nha_xuat_ban = new M_nha_xuat_ban();
		$nxb= $m_nha_xuat_ban->Doc_nxb_theo_id_nxb($id);
		$nxbs = $m_nha_xuat_ban->Doc_nha_xuat_ban();
		$nxb_khacs=$m_nha_xuat_ban->Doc_nha_xuat_ban_khac($id);
		
		//Phan trang
		include('Pager.php');
		$p = new pager();
		$limit = 9;
		$count = count($sachs);
		$vt = $p->findStart($limit);
		$pages = $p->findPages($count,$limit);
		$curpage = $_GET['page'];
		$lst = $p->pageList($curpage,$pages);
		$sachs= $m_sach->Doc_sach_theo_id_nxb($id, $vt, $limit);
		//View
	
		include('controllers/Smarty_Book.php');
		$smarty = new Smarty_Book();
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
		$title = 'Nhà sách FTStore';
		$smarty->assign('title',$title);
		$view = 'views/sach_nxb/v_sach.tpl';
		$smarty->assign('view',$view);
		$smarty->Hien_thi_giao_dien('sach/layout.tpl');		
	}
}

?>
