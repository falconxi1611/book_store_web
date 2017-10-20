<?php
@session_start();
class C_gioi_thieu
{
	public function Hien_thi_gioi_thieu()
	{
		//Model
		//Đoạn này để giữ mặc định slide banner và menu loại sách khi chuyển trang
		include("models/m_loai_sach.php");
		$m_loai_sach=new M_loai_sach();
		$loai_sachs=$m_loai_sach->Doc_loai_sach();
		include("models/m_slide_banner.php");
		$m_slide_banner=new M_slide_banner();
		$slides=$m_slide_banner->Doc_slide_banner();
		//View
		include('Smarty_Book.php');
		$smarty = new Smarty_book();
		$title= 'Nhà sách FTStore | Giới thiệu nhà sách';
		$smarty->assign('title',$title);
		$view = 'views/v_gioi_thieu.tpl';
		$smarty->assign('view',$view);
		$smarty->assign('loai_sachs', $loai_sachs);  
		$smarty->assign('slides', $slides);
		$smarty->Hien_thi_giao_dien('ho_tro/layout.tpl');
		
	}
}
?>