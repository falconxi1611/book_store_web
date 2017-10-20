<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 09:27:06
         compiled from "views\user\v_Suauser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6124597d9d748fd595-79389019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d4b658ffd62c84895f652aac56785b3cb4e72d6' => 
    array (
      0 => 'views\\user\\v_Suauser.tpl',
      1 => 1501406812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6124597d9d748fd595-79389019',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9d749ab7f9_08414650',
  'variables' => 
  array (
    'tieude' => 0,
    'user' => 0,
    'loai_user' => 0,
    'loai_users' => 0,
    'loai' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9d749ab7f9_08414650')) {function content_597d9d749ab7f9_08414650($_smarty_tpl) {?><link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>Họ Tên
            <input class="text-input small-input" type="text" id="ho_ten" name="ho_ten" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->ho_ten;?>
" />
          </p>
          <p>Loại người dùng
            <select name="id_loai_user" id="id_loai_user">
       	    <option value="<?php echo $_smarty_tpl->tpl_vars['loai_user']->value->id;?>
" selected><?php echo $_smarty_tpl->tpl_vars['loai_user']->value->ten_loai_nguoi_dung;?>
</option>
             	<?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loai_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
             	<?php if ($_smarty_tpl->tpl_vars['loai']->value->id!=$_smarty_tpl->tpl_vars['loai_user']->value->id){?>
             	<option value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai_nguoi_dung;?>
</option>
             	<?php }?>
             	<?php } ?>
            </select>
          </p>
          <p>Email
          <input class="text-input small-input" type="text" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
" />          
          <p>Ngày sinh 
            <input class="text-input small-input" type="text" id="ngay_sinh" name="ngay_sinh" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->ngay_sinh;?>
" />
          <p>Địa chỉ  
          <input class="text-input small-input" type="text" id="dia_chi" name="dia_chi" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->dia_chi;?>
" />
          <p><img src="../public/layout/hinh_user/<?php echo $_smarty_tpl->tpl_vars['user']->value->avatar;?>
"  width="100px" />
          <p>
          <p>
            <label>Thay đổi Avatar</label>
            <input type="file" name="avatar" />
          <p>Điện thoại
            <input type="text" name="dien_thoai" id="dien_thoai" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->dien_thoai;?>
">
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
<?php }} ?>