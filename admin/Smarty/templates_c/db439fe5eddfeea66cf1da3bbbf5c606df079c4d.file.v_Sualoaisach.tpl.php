<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 08:49:47
         compiled from "views\loaisach\v_Sualoaisach.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12205597d9dabec5c22-07911281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db439fe5eddfeea66cf1da3bbbf5c606df079c4d' => 
    array (
      0 => 'views\\loaisach\\v_Sualoaisach.tpl',
      1 => 1501269655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12205597d9dabec5c22-07911281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tieude' => 0,
    'loai_sach' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9dabf1c4e0_01752588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9dabf1c4e0_01752588')) {function content_597d9dabf1c4e0_01752588($_smarty_tpl) {?><link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script src="../public/ckeditor/ckeditor.js"></script>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--ma_loai, ten_loai, mo_ta, hinh-->
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tên loại</label>
            <input class="text-input small-input" type="text" id="ten_loai" name="ten_loai" value="<?php echo $_smarty_tpl->tpl_vars['loai_sach']->value->ten_loai_sach;?>
" />
          </p>
          <p>ID loại cha
          <input type="text" name="id_loai_cha" id="id_loai_cha" value="<?php echo $_smarty_tpl->tpl_vars['loai_sach']->value->id_loai_cha;?>
">          
          <p>
            <label>Trạng thái </label>
            <input type="text" name="trang_thai" id="trang_thai" value="<?php echo $_smarty_tpl->tpl_vars['loai_sach']->value->trang_thai;?>
">
          </p>
          <p>&nbsp;</p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loaisach.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
<?php }} ?>