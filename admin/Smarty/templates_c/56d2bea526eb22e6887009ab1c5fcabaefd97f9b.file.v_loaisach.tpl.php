<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 08:49:46
         compiled from "views\loaisach\v_loaisach.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18357597d9daa3b7b24-71166699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d2bea526eb22e6887009ab1c5fcabaefd97f9b' => 
    array (
      0 => 'views\\loaisach\\v_loaisach.tpl',
      1 => 1501296173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18357597d9daa3b7b24-71166699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tieude' => 0,
    'msg' => 0,
    'lst' => 0,
    'loai_sachs' => 0,
    'loai' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9daa46a872_93947906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9daa46a872_93947906')) {function content_597d9daa46a872_93947906($_smarty_tpl) {?><script>
function Hoi_xoa(ma_loai)
{
	if(confirm("Bạn xóa loại sách hiện hành?"))
	{
		window.location='xoaloaisach.php?ma_loai=' + ma_loai;	
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
          <th>Mã loại</th>
          <th>Tên loại</th>
          <th>ID Loại Cha</th>
          <th>Trạng thái</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      	<tfoot>
          <tr>
            <td colspan="6">
           	<div class="div_phan_trang"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div>
            <div class="clear"></div></td>
          </tr>
		</tfoot>
      <tbody>
        
        <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loai_sachs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
      <tr>
          
          <td><?php echo $_smarty_tpl->tpl_vars['loai']->value->id;?>
</td>
          <td><a href="sualoaisach.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['loai']->value->id;?>
" title="Edit"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai_sach;?>
</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['loai']->value->id_loai_cha;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['loai']->value->trang_thai;?>
</td>
          <td><!-- Icons --> 
            <a href="sualoaisach.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['loai']->value->id;?>
" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:Hoi_xoa(<?php echo $_smarty_tpl->tpl_vars['loai']->value->id;?>
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