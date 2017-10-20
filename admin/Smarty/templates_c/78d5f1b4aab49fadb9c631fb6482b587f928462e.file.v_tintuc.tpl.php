<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 09:06:09
         compiled from "views\tintuc\v_tintuc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24138597d9dba225654-63841366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78d5f1b4aab49fadb9c631fb6482b587f928462e' => 
    array (
      0 => 'views\\tintuc\\v_tintuc.tpl',
      1 => 1501405567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24138597d9dba225654-63841366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9dba2efae7_28605829',
  'variables' => 
  array (
    'tieude' => 0,
    'msg' => 0,
    'lst' => 0,
    'tin_tuc' => 0,
    'tin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9dba2efae7_28605829')) {function content_597d9dba2efae7_28605829($_smarty_tpl) {?><script>
function Hoi_xoa(ma_tin_tuc)
{
	if(confirm("Bạn xóa tin hiện hành?"))
	{
		window.location='xoatintuc.php?ma_tin_tuc=' + ma_tin_tuc;	
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
          <th width="63">Mã tin</th>
          <th width="118">Tiêu đề</th>
          <th width="207">Nội dung tóm tắt</th>
          <th>Ngày đăng</th>
          <th width="88">&nbsp;</th>
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
        
        <?php  $_smarty_tpl->tpl_vars['tin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tin_tuc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tin']->key => $_smarty_tpl->tpl_vars['tin']->value){
$_smarty_tpl->tpl_vars['tin']->_loop = true;
?>
        <tr>
          
          <td><?php echo $_smarty_tpl->tpl_vars['tin']->value->id;?>
</td>
          <td><a href="suatintuc.php?ma_tin_tuc=<?php echo $_smarty_tpl->tpl_vars['tin']->value->id;?>
" title="Edit"><?php echo $_smarty_tpl->tpl_vars['tin']->value->tieu_de_tin;?>
</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['tin']->value->noi_dung_tom_tat;?>
</td>
          <td width="138"><?php echo $_smarty_tpl->tpl_vars['tin']->value->ngay_dang;?>
</td>
          <td><!-- Icons --> 
            <a href="suatintuc.php?ma_tin_tuc=<?php echo $_smarty_tpl->tpl_vars['tin']->value->id;?>
" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:Hoi_xoa(<?php echo $_smarty_tpl->tpl_vars['tin']->value->id;?>
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