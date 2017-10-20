<?php /* Smarty version Smarty-3.1.14, created on 2017-10-19 14:43:20
         compiled from "views\sach\v_Suasach.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21753597d9d5dd3a728-68167607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f299915db04fffa503179fdd57d23336be1f8299' => 
    array (
      0 => 'views\\sach\\v_Suasach.tpl',
      1 => 1501422596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21753597d9d5dd3a728-68167607',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9d5dd6c507_26747989',
  'variables' => 
  array (
    'tieude' => 0,
    'sach' => 0,
    'tac_gia' => 0,
    'tac_gias' => 0,
    'tg' => 0,
    'loai_sach' => 0,
    'loai_sachs' => 0,
    'loai' => 0,
    'nxb' => 0,
    'nha_xuat_ban' => 0,
    'xb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9d5dd6c507_26747989')) {function content_597d9d5dd6c507_26747989($_smarty_tpl) {?><link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script src="../public/ckeditor/ckeditor.js"></script>
<script>
  $(function() {
    $( "#ngay_xuat_ban" ).datepicker({
		changeMonth: true,
      	changeYear: true
		});
	$( "#ngay_xuat_ban" ).datepicker( "option", "dateFormat","yy-mm-dd");	
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
    <!--ma_loai, ten_loai, mo_ta, hinh-->
    <form action="#" method="post" enctype="multipart/form-data">
      <fieldset>
        <p>
          <label>Tên sách</label>
          <input class="text-input small-input" type="text" id="ten_sach" name="ten_sach" value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_sach;?>
"/>
        </p>
        <p>
          <label>Tác giả:</label>
          <select name="id_tac_gia" id="id_tac_gia">
            <option value="<?php echo $_smarty_tpl->tpl_vars['tac_gia']->value->id;?>
" selected ><?php echo $_smarty_tpl->tpl_vars['tac_gia']->value->ten_tac_gia;?>
</option>
            	
			<?php  $_smarty_tpl->tpl_vars['tg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tac_gias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tg']->key => $_smarty_tpl->tpl_vars['tg']->value){
$_smarty_tpl->tpl_vars['tg']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['tg']->value->id!=$_smarty_tpl->tpl_vars['tac_gia']->value->id){?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['tg']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['tg']->value->ten_tac_gia;?>
</option>
            <?php }?>
			<?php } ?>
            
          </select>
        <p>
          <label>Giới thiệu:</label>
          <textarea name="gioi_thieu" id="gioi_thieu" class="text-input medium-input ckeditor" value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->gioi_thieu;?>
"></textarea>
        <p>Đọc thử
          <textarea name="doc_thu" id="doc_thu" class="text-input medium-input ckeditor" value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->doc_thu;?>
"></textarea>
        <p>Loại sách
          <select name="id_loai_sach" id="id_loai_sach">
            <option value="<?php echo $_smarty_tpl->tpl_vars['loai_sach']->value->id;?>
" selected><?php echo $_smarty_tpl->tpl_vars['loai_sach']->value->ten_loai_sach;?>
</option>
			<?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loai_sachs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
         	<?php if ($_smarty_tpl->tpl_vars['loai']->value->id!=$_smarty_tpl->tpl_vars['loai_sach']->value->id){?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai_sach;?>
</option>
            <?php }?>
			<?php } ?>
          
          </select>
        <p>Nhà xuất bản
          <select name="id_nha_xuat_ban" id="id_nha_xuat_ban">
            <option value="<?php echo $_smarty_tpl->tpl_vars['nxb']->value->id;?>
" selected><?php echo $_smarty_tpl->tpl_vars['nxb']->value->ten_nha_xuat_ban;?>
</option>         
			<?php  $_smarty_tpl->tpl_vars['xb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nha_xuat_ban']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xb']->key => $_smarty_tpl->tpl_vars['xb']->value){
$_smarty_tpl->tpl_vars['xb']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['xb']->value->id!=$_smarty_tpl->tpl_vars['sach']->value->id_nha_xuat_ban){?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['xb']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['xb']->value->ten_nha_xuat_ban;?>
</option>
            <?php }?>
			<?php } ?>
            
          </select>
        <p>Số trang
          <input type="text" name="so_trang" id="so_trang" value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->so_trang;?>
">
        <p>Ngày xuất bản
          <input type="text" class="text-input small-input" name="ngay_xuat_ban" id="ngay_xuat_ban" value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->ngay_xuat_ban;?>
">
        <p>Kích thước
          <input type="text" name="kich_thuoc" id="kich_thuoc" value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->kich_thuoc;?>
">
        <p>SKU
          <input type="text" name="sku" id="sku" value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->sku;?>
">
        <p>Trọng lượng
          <input type="text" name="trong_luong" id="trong_luong" value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->trong_luong;?>
">
        <p>Trạng thái
          <select name="trang_thai" id="trang_thai">
            <option value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->trang_thai;?>
" selected><?php echo $_smarty_tpl->tpl_vars['sach']->value->trang_thai;?>
</option>7
            <?php if ($_smarty_tpl->tpl_vars['sach']->value->trang_thai==0){?>
            <option value="1">1</option>
            <?php }else{ ?>
            <option value="0">0</option>
            <?php }?>
          </select>
        <p><img src="../public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach']->value->hinh;?>
"  width="100px" />                
        <p>
          <label>Hình </label>
          <input type="file" name="hinh" />
        <p>Đơn giá
          <input type="text" name="don_gia" id="don_gia" value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->don_gia;?>
">
        </p>
        <p>Giá bìa
          <input type="text" name="gia_bia" id="gia_bia" value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->gia_bia;?>
">
        </p>
        <p>Nổi bật
          <select name="noi_bat" id="noi_bat">
            <option value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->noi_bat;?>
" selected><?php echo $_smarty_tpl->tpl_vars['sach']->value->noi_bat;?>
</option>
            <?php if ($_smarty_tpl->tpl_vars['sach']->value->noi_bat==0){?>
            <option value="1">1</option>
            <?php }else{ ?>
            <option value="0">0</option>
            <?php }?>
          </select>
        </p>
        <p>
          <input class="button" type="submit" value="Cập nhật" name="btnCapnhat"/>
          <!-- onclick="return KiemtraLoai()" -->
          <input class="button" type="button" value="Bỏ qua" onclick="window.location='sach.php'" />
        </p>
      </fieldset>
      <div class="clear"></div>
      <!-- End .clear -->
    </form>
  </div>
  
</div>
<?php }} ?>