<?php
session_start();
include ("Smarty_quan_tri.php");
include ("models/m_tin_tuc.php");
class C_tin_tuc
{
	function Hien_thi_tin_tuc()
	{
			// Thông báo
			$msg=isset($_SESSION["msg"])?$_SESSION["msg"]:"";
			if(isset($_SESSION["msg"])) unset($_SESSION["msg"]);
			
			// Models
			$m_tin_tuc=new M_tin_tuc();
			$tin_tuc=$m_tin_tuc->Doc_tin_tuc();	
			
		
			//Phan trang
			include('Pager.php');
			$p = new pager();
			$limit = 6;
			$count = count($tin_tuc);
			$vt = $p->findStart($limit);
			$pages = $p->findPages($count,$limit);
			$curpage = $_GET['page'];
			$lst = $p->pageList($curpage,$pages);
			$tin_tuc = $m_tin_tuc->Doc_tin_tuc($vt,$limit);
			
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","Quản lý Nhà Sách FT Store");
			$smarty->assign("tieude","Danh sách tin tức");
			$smarty->assign("tin_tuc",$tin_tuc);
			$smarty->assign("msg",$msg);
			$smarty->assign("view","views/tintuc/v_tintuc.tpl");
			$smarty->assign("lst",$lst);
			$smarty->display("layout.tpl");	
	
	}
	function Them_tin_tuc()
	{
			// Models
			// $ma_tin_tuc, $tieu_de, $tom_tat, $chi_tiet, $hinh, $tac_gia, $ngay_dang, $ngay_gui, $so_luot_xem
			if(isset($_POST["btnCapnhat"]))
			{
				$id=NULL;
				$tieu_de_tin=$_POST["tieu_de"];
				$noi_dung_tom_tat=$_POST["tom_tat"];
				$noi_dung_chi_tiet=$_POST["chi_tiet"];
				$trang_thai=$_POST["trang_thai"];
				$hinh_dai_dien=$_FILES["hinh_dai_dien"]["error"]==0?$_FILES["hinh_dai_dien"]["name"]:"";
				$id_loai_tin_tuc=$_POST["ma_loai"];
				$ngay_dang=$_POST["ngay_dang"];
				$m_tin_tuc=new M_tin_tuc();
				$kq=$m_tin_tuc->Them_tin_tuc($id, $tieu_de_tin, $noi_dung_tom_tat, $noi_dung_chi_tiet, $trang_thai, $hinh_dai_dien, $id_loai_tin_tuc, $ngay_dang);
				if($kq)
				{
					// Move
					if($hinh_dai_dien!="")
					{
						move_uploaded_file($_FILES["hinh_dai_dien"]["tmp_name"],"../public/layout/hinh_tin_tuc/$hinh_dai_dien");	
					}
					$_SESSION["msg"]="Thêm tin tức thành công";
				}
				else
				{
					$_SESSION["msg"]="Thêm tin tức bị lỗi";
				}
				header("location:tintuc.php");		
			}
			
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","Quản lý Nhà Sách FT Store");
			$smarty->assign("tieude","Thêm tin tức");
			
			
			$smarty->assign("view","views/tintuc/v_Themtintuc.tpl");
			$smarty->display("layout.tpl");	
	
	}
	function Sua_tin_tuc()
	{
			// Models
			$id=$_GET["ma_tin_tuc"];
			$m_tin_tuc=new M_tin_tuc();
			$tin_tuc=$m_tin_tuc->Doc_tin_tuc_theo_id($id);
			// Cập nhật
		
			if(isset($_POST["btnCapnhat"]))
			{
				//$tieu_de_tin, $noi_dung_tom_tat, $noi_dung_chi_tiet, $trang_thai, $hinh_dai_dien, $id_loai_tin_tuc, $ngay_dang, $id//
				$tieu_de=$_POST["tieu_de"];
				$tom_tat=$_POST["tom_tat"];
				$chi_tiet=$_POST["chi_tiet"];
				$trang_thai=$_POST["trang_thai"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$tin_tuc->hinh_dai_dien;
				$id_loai_tin_tuc=$_POST["id_loai_tin_tuc"];
				$ngay_dang=$_POST["ngay_dang"];
				
				$m_tin_tuc=new M_tin_tuc();
				$kq=$m_tin_tuc->Sua_tin_tuc($tieu_de, $tom_tat, $chi_tiet, $trang_thai, $hinh, $id_loai_tin_tuc, $ngay_dang, $id);
				if($kq)
				{
					// Move
					if($_FILES["hinh"]["error"]==0)
					{
						move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/layout/hinh_tin_tuc/$hinh");	
					}
					$_SESSION["msg"]="Sửa tin tức thành công";
				}
				else
				{
					$_SESSION["msg"]="Sửa tin tức bị lỗi";
				}
				header("location:tintuc.php");	
			}
			
			
			
			// Kết thúc cập nhật
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","Quản lý Nhà Hàng");
			$smarty->assign("tin_tuc",$tin_tuc);
			$smarty->assign("tieude","Sửa tin tức");
		
			$smarty->assign("view","views/tintuc/v_Suatintuc.tpl");
			$smarty->display("layout.tpl");	
	
	}
	function Xoa_tin_tuc()
	{
		$id=$_GET["ma_tin_tuc"];
		$m_tin_tuc=new M_tin_tuc();
		$kq=$m_tin_tuc->Xoa_tin_tuc($id);
		if($kq)
		{
			$_SESSION["msg"]="Xóa tin tức thành công";
		}
		else
		{
			$_SESSION["msg"]="Xóa tin tức bị lỗi";
		}
		header("location:tintuc.php");		
	}
	
		
}
?>