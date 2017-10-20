<?php
@session_start();
class C_home
{
	public function Hien_thi()
	{
		//model
		include("models/m_loai_sach.php");
		$m_loai_sach=new M_loai_sach();
		$loai_sachs=$m_loai_sach->Doc_loai_sach();
		
		include("models/m_slide_banner.php");
		$m_slide_banner=new M_slide_banner();
		$slides=$m_slide_banner->Doc_slide_banner();
		
		include("models/m_nha_xuat_ban.php");
		$m_nha_xuat_ban=new M_nha_xuat_ban();
		$nxbs=$m_nha_xuat_ban->Doc_nha_xuat_ban();
		
		include('models/m_sach.php');
		$m_sach = new M_sach();
		$sach_mois = $m_sach->Doc_sach_moi();
		$sach_noi_bats = $m_sach->Doc_sach_noi_bat();
		$sach_yeu_thichs = $m_sach->Doc_sach_yeu_thich();
		
		//Phân trang
		include('Pager.php');
		$p = new pager();
		$limit = 8;
		$count = count($sach_mois);
		$vt = $p->findStart($limit);
		$pages = $p->findPages($count,$limit);
		$curpage = $_GET['page'];
		$lst = $p->pageList($curpage,$pages);
		$sach_mois = $m_sach->Doc_sach_moi();
		
		
		//AJAX

		$sachs=$m_sach->Doc_sach();
		$str="'";
		foreach($sachs as $sach)
		{
			$str.=$sach->ten_sach. "','";	
		}
		$str=substr($str,0,strlen($str)-2);

//		print_r($str); 
		
		//View
		include("Smarty_Book.php");
		$smarty=new Smarty_book();
		$title="FT Book Store";
		//$smarty->assign('lst',$lst); //Hiển thị phân trang
		
		$smarty->assign('sach_yeu_thichs',$sach_yeu_thichs);//Hiển thị sách yêu thích
		$smarty->assign('sach_noi_bats',$sach_noi_bats);//Hiển thị sách trên bottom banner
		$smarty->assign('sach_mois',$sach_mois);//Hiển thị sách trên bottom banner
		$smarty->assign('slides', $slides); //Hiển thị Sliders
		$smarty->assign('title', $title); //Hiển thị Title
		$smarty->assign('loai_sachs', $loai_sachs);  //HIển thị tại header
		$smarty->assign('lst', $lst);
		$smarty->assign('nxbs', $nxbs);
		$smarty->assign("str",$str);
		$smarty->display("layout.tpl");
	}
}
?>