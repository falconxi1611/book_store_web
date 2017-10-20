<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 11:14:42
         compiled from "views\sach\v_sach.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15007597d9d660107a2-08511171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9867f5562dd3094f655ba8abf1bcbc9b975e9357' => 
    array (
      0 => 'views\\sach\\v_sach.tpl',
      1 => 1501413207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15007597d9d660107a2-08511171',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9d661b5f84_63832564',
  'variables' => 
  array (
    'tieude' => 0,
    'msg' => 0,
    'lst' => 0,
    'sachs' => 0,
    'sach' => 0,
    'loai_sachs' => 0,
    'loai' => 0,
    'tac_gia' => 0,
    'tg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9d661b5f84_63832564')) {function content_597d9d661b5f84_63832564($_smarty_tpl) {?><script>
function Hoi_xoa(id)
{
	if(confirm("Bạn có muốn xóa sách hiện hành?"))
	{
		window.location='xoasach.php?id=' + id;	
	}	
}
</script>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <h3 style="text-align:center; color:red"><?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?> </h3>
    <table>
      <thead>
        <tr>
          <th width="63">Mã sách</th>
          <th width="150">Tên sách</th>
          <th width="161">Loại sách</th>
          <th width="118">Tác giả</th>
          <th width="128">Đơn Giá</th>
          <th width="72">&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="8">
            <div class="div_phan_trang"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        
        <?php  $_smarty_tpl->tpl_vars['sach'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sach']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sachs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sach']->key => $_smarty_tpl->tpl_vars['sach']->value){
$_smarty_tpl->tpl_vars['sach']->_loop = true;
?>
        
        <tr>
          
          <td><?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
</td>
          <td><a href="suatintuc.php?ma_sach=" title="Edit"><?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_sach;?>
</a></td>
          <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loai_sachs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
          	<?php if ($_smarty_tpl->tpl_vars['sach']->value->id_loai_sach==$_smarty_tpl->tpl_vars['loai']->value->id){?>
		  <td><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai_sach;?>
</td>
         	<?php }?>
          <?php } ?>
          <?php  $_smarty_tpl->tpl_vars['tg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tac_gia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tg']->key => $_smarty_tpl->tpl_vars['tg']->value){
$_smarty_tpl->tpl_vars['tg']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['sach']->value->id_tac_gia==$_smarty_tpl->tpl_vars['tg']->value->id){?>
          <td width="129"><?php echo $_smarty_tpl->tpl_vars['tg']->value->ten_tac_gia;?>
</td>
            <?php }?>
          <?php } ?>
          <td><?php echo number_format($_smarty_tpl->tpl_vars['sach']->value->don_gia);?>
 đ</td>
          
          <td><!-- Icons --> 
            <a href="suasach.php?id=<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:Hoi_xoa(<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
)" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
		</td>
        </tr>
  
        <?php } ?>
      </tbody>
    </table>
   
  </div>
  
</div>
<?php }} ?>