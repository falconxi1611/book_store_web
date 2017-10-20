<?php
		require_once("models/m_loai_sach.php");
		$m_loai_sach=new M_loai_sach();
		$loai_sachs=$m_loai_sach->Doc_loai_sach();
		include("models/m_nha_xuat_ban.php");
		$m_nha_xuat_ban=new M_nha_xuat_ban();
		$nxbs=$m_nha_xuat_ban->Doc_nha_xuat_ban();
		
		
		include("controllers/Smarty_Book.php");
		$smarty=new Smarty_book();
		$title="FT Book Store";
		$smarty->assign('title', $title);
		$smarty->assign('loai_sachs', $loai_sachs);  
		$smarty->assign('nxbs', $nxbs);
		
//		$view = 'views/sach/v_sach.tpl';
//		$smarty->assign('view',$view);
		$smarty->Hien_thi_giao_dien('tim_kiem/layout.tpl');