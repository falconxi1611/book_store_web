<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 10:26:07
         compiled from "views\tintuc\v_Suatintuc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13026597d9dbbe38ce1-06986330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4429e982f2faa723388ed44359e4da1d76d8be30' => 
    array (
      0 => 'views\\tintuc\\v_Suatintuc.tpl',
      1 => 1501410365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13026597d9dbbe38ce1-06986330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9dbbee8fe1_36298461',
  'variables' => 
  array (
    'tin_tuc' => 0,
    'tieude' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9dbbee8fe1_36298461')) {function content_597d9dbbee8fe1_36298461($_smarty_tpl) {?><link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#ngay_dang" ).datepicker({
		changeMonth: true,
      	changeYear: true
		});
	$( "#ngay_dang").datepicker( "option", "dateFormat","yy-mm-dd");
	$( "#ngay_dang").val("<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->ngay_dang;?>
")	
  });
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
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tiêu đề tin</label>
            <input class="text-input small-input" type="text" id="tieu_de" name="tieu_de" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tieu_de_tin;?>
" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <textarea name="tom_tat" class="text-input medium-input ckeditor" id="medium-input">
            <?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->noi_dung_tom_tat;?>

            </textarea>
          <p>
            <label>Nội dung chi tiết</label>
            <textarea name="chi_tiet" class="ckeditor" id="chi_tiet">
            <?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->noi_dung_chi_tiet;?>

            </textarea>
            <script>
            ckeditor.replace("chi_tiet");
            </script>
          </p>
          <p>Trạng thái
            <input type="text" name="trang_thai" id="trang_thai" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->trang_thai;?>
">
          </p>
          <p><img src="../public/layout/hinh_tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->hinh_dai_dien;?>
"  width="100px" />
          <p>
          <p>
            <label>Thay đổi hình đại diện</label>
            <input type="file" name="hinh" />
          <p>Id loại tin tức
            <input class="text-input small-input" type="text" id="id_loai_tin_tuc" name="id_loai_tin_tuc" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->id_loai_tin_tuc;?>
" />
		  </p>
          <p>
            <label>Ngày đăng bài</label>
            <input class="text-input small-input" type="text" id="ngay_dang" name="ngay_dang" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->ngay_dang;?>
" />
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='tintuc.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
<?php }} ?>