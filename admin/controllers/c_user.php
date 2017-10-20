<?php
session_start();
require_once("Smarty_quan_tri.php");
require_once("models/m_user.php");
require_once("models/m_loai_user.php");
class C_user
{
		public function Xoa_nguoi_dung()
		{
			// Model
			$id=$_GET["id"];
			$m_user=new M_user();
			$kq=$m_user->Xoa_nguoi_dung($id);
			if($kq)
			{
				// Thành công
				echo "<script>alert('Xóa người dùng thành công');window.location='user.php'</script>";
			}
			else
			{
				echo "<script>alert('Xóa người dùng không thành công');window.location='user.php'</script>";	
			}

		}	
	
	
		public function Sua_nguoi_dung()
		{
		// Model
			$id=$_GET["id"];
			$m_user = new M_user();
			$user = $m_user->Doc_nguoi_dung_theo_id($id);
			
			$m_loai_user = new M_loai_user();
			$loai_users = $m_loai_user->Doc_loai_user();
			$loai_user = $m_loai_user->Doc_loai_user_theo_id($user->id_loai_user);
			if(isset($_POST["btnCapnhat"]))
			{
				 $ho_ten=$_POST["ho_ten"];
				 $id_loai_user=$_POST["id_loai_user"];
				 $email=$_POST["email"];
				 $ngay_sinh=$_POST["ngay_sinh"];
				 $dia_chi=$_POST["dia_chi"];
				 $avatar=$_FILES["avatar"]["error"]==0?$_FILES["avatar"]["name"]:$user->avatar;
				 $dien_thoai=$_POST["dien_thoai"];
				 // Sửa

				 $kq=$m_user->Sua_nguoi_dung($id_loai_user, $ho_ten, $email, $ngay_sinh, $dia_chi, $avatar, $dien_thoai, $id);
	
				if($kq)
				{
					if($_FILES["avatar"]["error"]==0)
					{
						move_uploaded_file($_FILES["avatar"]["tmp_name"],"../public/layout/hinh_user/{$avatar}");	 
					}
					echo "<script>alert('Cập nhật thành công');window.location='user.php'</script>";
				}
				else
				{
					echo "<script>alert('Cập nhật không thành công')</script>";	
				}
		}
			 	$smarty=new Smarty_quan_tri();
				$smarty->assign("title","Quản lý Nhà Sách FT Store");
				$smarty->assign("tieude","Sửa sách");
				$smarty->assign("user", $user);
				$smarty->assign("loai_users", $loai_users);
				$smarty->assign("loai_user", $loai_user);
				$smarty->assign("view","views/user/v_Suauser.tpl");
				$smarty->display("layout.tpl");	
		}
		public function Them_nguoi_dung()
		{
			$m_loai_user = new M_loai_user();
			$loai_users = $m_loai_user->Doc_loai_user();
			
//		 Model
		//	`id`, `ten_sach`, `id_tac_gia`, `gioi_thieu`, `doc_thu`, `id_loai_sach`, `id_nha_xuat_ban`, `so_trang`, `ngay_xuat_ban`, `kich_thuoc`, `sku`, `trong_luong`, `trang_thai`, `hinh`, `don_gia`, `gia_bia`, `noi_bat`
		if(isset($_POST["btnCapnhat"]))
		{
			 $tai_khoan = $_POST["tai_khoan"];	
			 $mat_khau = $_POST["mat_khau"];
			 $id_loai_user = $_POST["id_loai_user"];
			 $ho_ten = $_POST["ho_ten"];
			 $email = $_POST["email"];
		 	 $ngay_sinh = $_POST["ngay_sinh"];
			 $dia_chi = $_POST["dia_chi"];
			 $ngay_dang_ky = $_POST["ngay_dang_ky"];
			 $avatar = $_FILES["avatar"]["error"]==0?$_FILES["avatar"]["name"]:"";
			 $dien_thoai = $_POST["dien_thoai"];
			 $nhap_lai = $_POST["nhap_lai"];
			 if($nhap_lai == $mat_khau)
			 {
			 // Thêm
				 $m_user = new M_user();
				 $kq=$m_user->Them_nguoi_dung($tai_khoan, md5($mat_khau), $id_loai_user, $ho_ten, $email, $ngay_sinh, $dia_chi, $ngay_dang_ky, $avatar, $dien_thoai);
				 if($kq)
				 {
					// Thành công
					// Di chuyển hình về server
					if($_FILES["avatar"]["error"]==0)
					{
						move_uploaded_file($_FILES["avatar"]["tmp_name"],"../public/layout/hinh_user/$avatar");	 
					}
					echo "<script>alert('Thêm thành công');window.location='user.php'</script>";
				 }
				else
				{
					echo "<script>alert('Thêm không thành công')</script>";	
				}
			 }
			else
			{
				echo "<script>alert('Mật khẩu nhập lại không trùng khớp')</script>";	
			}
		}
		// Views
		$smarty=new Smarty_quan_tri();
		$smarty->assign("title","Quản lý Nhà Sách FT Store");
		$smarty->assign("tieude","Thêm user");
		$smarty->assign("loai_users",$loai_users);
		$smarty->assign("view","views/user/v_Themuser.tpl");
		$smarty->display("layout.tpl");	
	}
	function Hien_thi_nguoi_dung()
	{
			// Thông báo
		$msg=isset($_SESSION["msg"])?$_SESSION["msg"]:"";
		if(isset($_SESSION["msg"])) unset($_SESSION["msg"]);
		
		$m_loai_user = new M_loai_user();
		$loai_users = $m_loai_user->Doc_loai_user();
		
		$m_user = new M_user();
		$users = $m_user->Doc_nguoi_dung();
		
		// View
		$smarty=new Smarty_quan_tri();
		$smarty->assign("title","Quản lý Nhà Sách FT Store");
		$smarty->assign("tieude","Danh sách người dùng");
		$smarty->assign("loai_users",$loai_users);
		$smarty->assign("users",$users);
		$smarty->assign("msg",$msg);
		$smarty->assign("view","views/user/v_user.tpl");
		$smarty->display("layout.tpl");	
	}
	
	function Hien_thi_dang_nhap()
	{
		
		if(isset($_POST["login"]))
		{
			$ten=$_POST["ten_dang_nhap"];
			$mk=$_POST["mat_khau"];
			$m_user=new M_user();
			$user=$m_user->Doc_nguoi_dung_theo_tenDn_pass($ten,$mk);

			if($user->id_loai_user==7){  // them cái này để chỉ có admin mới vô đc . 
			$this->luu_dang_nhap($ten,$mk);
			}
			
			
//			$this->luu_dang_nhap($ten,$mk);
		}
		if(isset($_SESSION["fullname"]) )
		{
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","Quản lý Nhà Sách FT-Store");
			$smarty->display("layout.tpl");	
		}
		else
		{
			$_SESSION['error']="Thông tin đăng nhập không hợp lệ";
			header("location:login.php");	
		}
	}
	function thoat_dang_nhap()
	{
		session_destroy();
		header("location:login.php");	
	}
	function luu_dang_nhap($ten,$mk)
	{
		$m_user=new M_user();
		$user=$m_user->Doc_nguoi_dung_theo_tenDn_pass($ten,$mk);
		$_SESSION['fullname']=$user->ho_ten;  //  tạo 1 cái session để kiểm tra đăng nhập . trong bảng người dùng làm j có cột nào là fullname . fullname là tên biến session . lấy cái họ tên để hiện trong cái trên chỗ singout trong quản trị á . 
	}
		
}
?>