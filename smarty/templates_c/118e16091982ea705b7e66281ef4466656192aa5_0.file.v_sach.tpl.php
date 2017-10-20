<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 07:44:14
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\views\sach\v_sach.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8e4ed66479_74166929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '118e16091982ea705b7e66281ef4466656192aa5' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\views\\sach\\v_sach.tpl',
      1 => 1500485555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/sach/v_sach_left.tpl' => 1,
    'file:views/sach/v_sach_right.tpl' => 1,
  ),
),false)) {
function content_597d8e4ed66479_74166929 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="breadcrumb_dress">
	<div class="container">
		<ul>
			<li><a href="index.PHP"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>TRANG CHỦ</a> | </li>
			<li style="font-size: 17px"><?php echo $_smarty_tpl->tpl_vars['loai_sach_dang_xem']->value->ten_loai_sach;?>
</li>
		</ul>
	</div>
</div>

<div class="dresses">
	<div class="container">
		<div class="w3ls_dresses_grids">
			<?php $_smarty_tpl->_subTemplateRender('file:views/sach/v_sach_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


			<?php $_smarty_tpl->_subTemplateRender('file:views/sach/v_sach_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<?php }
}
