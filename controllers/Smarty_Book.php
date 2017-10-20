<?php
include('smarty/libs/Smarty.class.php');
class Smarty_book extends Smarty
{
	function Smarty_book()
	{
		parent::__construct();
		$this->setCacheDir('smarty/cache/');
		$this->setCompileDir('smarty/templates_c/');
		$this->setTemplateDir('smarty/templates/');
		include_once("models/m_loai_sach.php");
		$m_loai_sach=new M_loai_sach();


		if(isset($_GET['id']))
		{
		$id=$_GET['id'];
		$loai_sach=$m_loai_sach->Doc_loai_sach_theo_id($id);
		
		if($loai_sach->id_loai_cha==0)
		{
			$id_loai_sach =$_GET['id'];
		}
		else
		{
			$id_loai_sach =$loai_sach->id_loai_cha;
		}
	
		$loai_sach_cons=$m_loai_sach->Doc_loai_sach_con($id_loai_sach);//Doc loai sach con
		$this->assign("loai_sach_cons",$loai_sach_cons);
		}
		
	}
	function Hien_thi_giao_dien($layout)
	{
		$this->display($layout);
	}
}
?>