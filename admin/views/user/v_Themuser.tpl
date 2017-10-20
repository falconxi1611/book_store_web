<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#ngay_dang_ky,#ngay_sinh" ).datepicker({
		changeMonth: true,
      	changeYear: true
		});
	$( "#ngay_dang_ky,#ngay_sinh" ).datepicker( "option", "dateFormat","yy-mm-dd");	
  });
  
  // Kiem tra 
function Kiemtrauser()
{
	
		
	if($("#tai_khoan").val() == "")
	{
		alert("Nhập vào Tài Khoản");
		$("#tai_khoan").focus();
		return false;
	}
	else if($("#mat_khau").val() == "")
	{
		alert("Nhập vào mật khẩu");
		$("#mat_khau").focus();
		return false;
	}
	else if($("#nhap_lai").val() == "")
	{
		alert("Nhập lại mật khẩu");
		$("#nhap_lai").focus();
		return false;
	}
	else if($("#id_loai_nguoi_dung").val() == "")
	{
		alert("Vui lòng chọn loại người dùng");
		return false;
	}
	else if($("#ho_ten").val() == "")
	{
		alert("Nhập họ tên");
		$("#ho_ten").focus();
		return false;
	}
	else if($("#email").val() == "")
	{
		alert("Nhập vào email");
		$("#email").focus();
		return false;
	}
	else if($("#dia_chi").val() == "")
	{
		alert("Nhập vào địa chỉ");
		$("#dia_chi").focus();
		return false;
	}
	else if($("#dien_thoai").val() == "")
	{
		alert("Nhập vào điện thoại");
		$("#dien_thoai").focus();
		return false;
	}
	else
	{
		return true;
	}
}
  </script>
<script src="../public/ckeditor/ckeditor.js"></script>
<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`-->
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>Tài khoản
            <input class="text-input small-input" type="text" id="tai_khoan" name="tai_khoan" />
          </p>
          <p>Mật khẩu 
            <input class="text-input small-input" type="password" id="mat_khau" name="mat_khau" />
          </p>
		  <p>Nhập lại mật khẩu 
            <input class="text-input small-input" type="password" id="nhap_lai" name="nhap_lai" />
          </p>
          <p>Loại người dùng
            <select name="id_loai_user" id="id_loai_user">
            <option value="" selected>---- Chọn loại người dùng ----</option>
            {foreach $loai_users as $loai}
            <option value="{$loai->id}">{$loai->ten_loai_nguoi_dung}</option>
            {/foreach}
            </select>
          <p>Họ Tên 
            <input type="text" name="ho_ten" id="ho_ten">
          </p>
          <p>Email
            <input type="text" name="email" id="email">
          </p>
          <p>
            <label>Ngày sinh</label>
            <input class="text-input small-input" type="text" id="ngay_sinh" name="ngay_sinh" />
          </p>
          <p>Địa chỉ 
            <input type="text" name="dia_chi" id="dia_chi">
          </p>
          <p>
            <label>Ngày đăng ký</label>
            <input class="text-input small-input" type="text" id="ngay_dang_ky" name="ngay_dang_ky" />
          </p>
          <p>
            <label>Avatar</label>
            <input type="file" name="avatar" />
          <p>Điện thoại 
            <input class="text-input small-input" type="text" id="dien_thoai" name="dien_thoai" />
          </p>
          <p>&nbsp;</p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtrauser()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='user.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
