<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 11:15:28
         compiled from "views\sach\v_Themsach.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13271597d9d6992ac27-90139650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81addf293e2f0d50b59b4a1f9e1aa3c21f069169' => 
    array (
      0 => 'views\\sach\\v_Themsach.tpl',
      1 => 1501408846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13271597d9d6992ac27-90139650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9d699d4cf0_90643360',
  'variables' => 
  array (
    'tieude' => 0,
    'tac_gia' => 0,
    'tg' => 0,
    'loai_sachs' => 0,
    'loai' => 0,
    'nha_xuat_ban' => 0,
    'nxb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9d699d4cf0_90643360')) {function content_597d9d699d4cf0_90643360($_smarty_tpl) {?><link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#ngay_xuat_ban" ).datepicker({
		changeMonth: true,
      	changeYear: true
		});
	$( "#ngay_xuat_ban" ).datepicker( "option", "dateFormat","yy-mm-dd");	
  });
  
  // Kiem tra 
function KiemtraLoai()
{
	
	// Kiểm tra tên, ....

	// Kiểm tra CKEditor 
	var gioi_thieu = CKEDITOR.instances.gioi_thieu.document.getBody().getChild(0).getText();
	var c =new String(gioi_thieu);
	var doc_thu = CKEDITOR.instances.doc_thu.document.getBody().getChild(0).getText();
	var c1 =new String(doc_thu);
		
	if($("#ten_sach").val() == "")
	{
		alert("Nhập vào Tên Sách");
		$("#ten_sach").focus();
		return false;
	}
	else if(c.length==1)
	{
    	alert("Nhập nội dung giới thiệu");
    	return false;
	}
	else if(c1.length==1)
	{
    	alert("Nhập nội dung đọc thử");
    	return false;
	}
	else if($("#id_tac_gia").val() == "")
	{
		alert("Vui lòng chọn tác giả");
		return false;
	}
	else if($("#id_loai_sach").val() == "")
	{
		alert("Vui lòng chọn loại sách");
		return false;
	}
	else if($("#id_nha_xuat_ban").val() == "")
	{
		alert("Vui lòng chọn nhà xuất bản");
		return false;
	}
	else if($("#so_trang").val() == "")
	{
		alert("Nhập số trang");
		$("#so_trang").focus();
		return false;
	}
	else if($("#kich_thuoc").val() == "")
	{
		alert("Nhập kích thước");
		$("#kich_thuoc").focus();
		return false;
	}
	else if($("#sku").val() == "")
	{
		alert("Nhập sku");
		$("#sku").focus();
		return false;
	}
	else if($("#trong_luong").val() == "")
	{
		alert("Nhập trọng lượng");
		$("#trong_luong").focus();
		return false;
	}
	else if($("#don_gia").val() == "")
	{
		alert("Nhập đơn giá");
		$("#don_gia").focus();
		return false;
	}
	else if($("#gia_bia").val() == "")
	{
		alert("Nhập giá bìa");
		$("#gia_bia").focus();
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
            <label>Tên sách</label>
            <input class="text-input small-input" type="text" id="ten_sach" name="ten_sach" />
          </p>
          <p>
            <label>Tác giả:</label> 
            <select name="id_tac_gia" id="id_tac_gia">
            	<option value="" selected >------ Chọn tác giả ------</option>
            	<?php  $_smarty_tpl->tpl_vars['tg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tac_gia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tg']->key => $_smarty_tpl->tpl_vars['tg']->value){
$_smarty_tpl->tpl_vars['tg']->_loop = true;
?>
            	<option value="<?php echo $_smarty_tpl->tpl_vars['tg']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['tg']->value->ten_tac_gia;?>
</option>
            	<?php } ?>
            </select>
          <p>
            <label>Giới thiệu:</label>
          <textarea name="gioi_thieu" id="gioi_thieu" class="text-input medium-input ckeditor"></textarea>                    
          <p>Đọc thử 
            <textarea name="doc_thu" id="doc_thu" class="text-input medium-input ckeditor"></textarea>          
          <p>Loại sách
		  <select name="id_loai_sach" id="id_loai_sach">
       			<option value="" selected>----Chọn loại sách----</option>
        		<?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loai_sachs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
         		<option value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai_sach;?>
</option>
         		<?php } ?>
          </select>                    
          <p>Nhà xuất bản
            <select name="id_nha_xuat_ban" id="id_nha_xuat_ban">
            	<option value="" selected>----Chọn nhà xuất bản----</option>
            	<?php  $_smarty_tpl->tpl_vars['nxb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nxb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nha_xuat_ban']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nxb']->key => $_smarty_tpl->tpl_vars['nxb']->value){
$_smarty_tpl->tpl_vars['nxb']->_loop = true;
?>
            	<option value="<?php echo $_smarty_tpl->tpl_vars['nxb']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['nxb']->value->ten_nha_xuat_ban;?>
</option>
            	<?php } ?>
            </select>
          <p>Số trang
            <input type="text" name="so_trang" id="so_trang">
          <p>Ngày xuất bản
            <input type="text" class="text-input small-input" name="ngay_xuat_ban" id="ngay_xuat_ban">
          <p>Kích thước
            <input type="text" name="kich_thuoc" id="kich_thuoc">
          <p>SKU
            <input type="text" name="sku" id="sku">
          <p>Trọng lượng
            <input type="text" name="trong_luong" id="trong_luong">
          <p>Trạng thái
            <select name="trang_thai" id="trang_thai">
            	<option value="0" selected>0</option>
  				<option value="1">1</option>
            </select>
          <p>
            <label>Hình </label>
            <input type="file" name="hinh" />
          
          <p>Đơn giá 
            <input type="text" name="don_gia" id="don_gia">
          </p>
          <p>Giá bìa
            <input type="text" name="gia_bia" id="gia_bia">
          </p>
          <p>Nổi bật
            <select name="noi_bat" id="noi_bat">
				<option value="0" selected>0</option>
  				<option value="1">1</option>
            </select>
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat"  onclick="return KiemtraLoai()" /><!-- onclick="return KiemtraLoai()" -->
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='sach.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
<?php }} ?>