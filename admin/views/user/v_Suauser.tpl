<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#ngay_sinh" ).datepicker({
		changeMonth: true,
      	changeYear: true
		});
	$( "#ngay_sinh" ).datepicker( "option", "dateFormat","yy-mm-dd");	
  });
</script>
<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>Họ Tên
            <input class="text-input small-input" type="text" id="ho_ten" name="ho_ten" value="{$user->ho_ten}" />
          </p>
          <p>Loại người dùng
            <select name="id_loai_user" id="id_loai_user">
       	    <option value="{$loai_user->id}" selected>{$loai_user->ten_loai_nguoi_dung}</option>
             	{foreach $loai_users as $loai}
             	{if $loai->id != $loai_user->id}
             	<option value="{$loai->id}">{$loai->ten_loai_nguoi_dung}</option>
             	{/if}
             	{/foreach}
            </select>
          </p>
          <p>Email
          <input class="text-input small-input" type="text" id="email" name="email" value="{$user->email}" />          
          <p>Ngày sinh 
            <input class="text-input small-input" type="text" id="ngay_sinh" name="ngay_sinh" value="{$user->ngay_sinh}" />
          <p>Địa chỉ  
          <input class="text-input small-input" type="text" id="dia_chi" name="dia_chi" value="{$user->dia_chi}" />
          <p><img src="../public/layout/hinh_user/{$user->avatar}"  width="100px" />
          <p>
          <p>
            <label>Thay đổi Avatar</label>
            <input type="file" name="avatar" />
          <p>Điện thoại
            <input type="text" name="dien_thoai" id="dien_thoai" value="{$user->dien_thoai}">
          </p>
          <p>&nbsp;</p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='user.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
