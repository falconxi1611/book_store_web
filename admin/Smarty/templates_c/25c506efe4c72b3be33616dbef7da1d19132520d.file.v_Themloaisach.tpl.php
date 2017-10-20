<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 11:04:37
         compiled from "views\loaisach\v_Themloaisach.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9581597dbd45b62137-00035091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25c506efe4c72b3be33616dbef7da1d19132520d' => 
    array (
      0 => 'views\\loaisach\\v_Themloaisach.tpl',
      1 => 1501345528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9581597dbd45b62137-00035091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tieude' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597dbd45b9d919_16672719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597dbd45b9d919_16672719')) {function content_597dbd45b9d919_16672719($_smarty_tpl) {?><link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  // Kiem tra 
function KiemtraLoai()
{
	
	// Kiểm tra tên, ....
	

	if($("#ten_loai").val() == ""){
    	alert("Nhập vào tên loại");
		$("#ten_loai").focus();
		return false;
	}
	else if($("#id_loai_cha").val() == ""){
    	alert("Nhập vào id loại cha");
		$("#id_loai_cha").focus();
		return false;
	}
	else if($("#trang_thai").val() == ""){
    	alert("Nhập vào trang thái");
		$("#trang_thai").focus();
		return false;
	}
	return true;
}
  </script>
<script src="../public/ckeditor/ckeditor.js"></script>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>'
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--ma_loai, ten_loai, mo_ta, hinh-->
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tên loại</label>
            <input class="text-input small-input" type="text" id="ten_loai" name="ten_loai" />
          </p>
          <p>ID loại cha
            <input type="text" name="id_loai_cha" id="id_loai_cha">
          <p>Trạng thái
            <input type="text" name="trang_thai" id="trang_thai">
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat"  onclick="return KiemtraLoai()" /><!-- onclick="return KiemtraLoai()" -->
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loaisach.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
<?php }} ?>