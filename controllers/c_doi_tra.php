<?php
@session_start();
class C_doi_tra
{
	public function Hien_thi_doi_tra()
	{
		//Model
		include("models/m_slide_banner.php");
		$m_slide_banner=new M_slide_banner();
		$slides=$m_slide_banner->Doc_slide_banner();
		//View
		include('controllers/Smarty_Book.php');
		$smarty = new Smarty_Book();
		$title = 'Nhà sách liên hệ | Liên hệ';
		$smarty->assign('title',$title);
		$smarty->assign('slides',$slides);
		$view = 'views/v_doi_tra.tpl';
		$smarty->assign('view',$view);
 
		$smarty->Hien_thi_giao_dien('ho_tro/layout.tpl');
	}
	
}
?>