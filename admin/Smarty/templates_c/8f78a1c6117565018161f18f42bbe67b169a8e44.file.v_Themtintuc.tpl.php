<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 09:45:24
         compiled from "views\tintuc\v_Themtintuc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5398597daab49b47b9-70131921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f78a1c6117565018161f18f42bbe67b169a8e44' => 
    array (
      0 => 'views\\tintuc\\v_Themtintuc.tpl',
      1 => 1501251729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5398597daab49b47b9-70131921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tieude' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597daab49f3e92_79755593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597daab49f3e92_79755593')) {function content_597daab49f3e92_79755593($_smarty_tpl) {?><link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#ngay_dang,#ngay_gui" ).datepicker({
		changeMonth: true,
      	changeYear: true
		});
	$( "#ngay_dang,#ngay_gui" ).datepicker( "option", "dateFormat","yy-mm-dd");	
  });
  
  // Kiem tra 
function Kiemtratin()
{
	
	// Kiểm tra tên, ....
	// Kiểm tra CKEditor 
	var tom_tat = CKEDITOR.instances.tom_tat.document.getBody().getChild(0).getText();
	var c =new String(tom_tat);
	if(c.length==1){
    	alert("Nhập nội dung tóm tắt");
    	return false;
	}
	
	return true;
}
  </script>
<script src="../public/ckeditor/ckeditor.js"></script>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`-->
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tiêu đề tin</label>
            <input class="text-input small-input" type="text" id="tieu_de" name="tieu_de" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <textarea name="tom_tat" class="text-input medium-input ckeditor"  id="tom_tat"></textarea>
          <p>
            <label>Nội dung chi tiết</label>
            <textarea name="chi_tiet" class="ckeditor" id="chi_tiet"></textarea>
            <script>
            ckeditor.replace("chi_tiet");
            </script>
          </p>
          <p>Trạng thái
            <input type="text" name="trang_thai" id="trang_thai">
          </p>
          <p>
            <label>Hình đại diện</label>
            <input type="file" name="hinh_dai_dien" />
          <p>Mã loại 
            <input class="text-input small-input" type="text" id="ma_loai" name="ma_loai" />
		  </p>
          <p>
            <label>Ngày đăng bài</label>
            <input class="text-input small-input" type="text" id="ngay_dang" name="ngay_dang" />
          </p>
          <p>&nbsp;</p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtratin()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='tintuc.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
<?php }} ?>