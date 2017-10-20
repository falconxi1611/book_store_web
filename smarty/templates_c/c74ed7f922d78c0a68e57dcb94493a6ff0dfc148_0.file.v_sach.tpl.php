<?php
/* Smarty version 3.1.32-dev-11, created on 2017-08-30 06:53:54
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\views\sach_nxb\v_sach.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59a66102724398_28023133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c74ed7f922d78c0a68e57dcb94493a6ff0dfc148' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\views\\sach_nxb\\v_sach.tpl',
      1 => 1500705472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/sach_nxb/v_sach_left.tpl' => 1,
    'file:views/sach_nxb/v_sach_right.tpl' => 1,
  ),
),false)) {
function content_59a66102724398_28023133 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.PHP"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> TRANG CHỦ</a> | </li>
				<li style="font-size: 17px"><?php echo $_smarty_tpl->tpl_vars['nxb']->value->ten_nha_xuat_ban;?>
</li>
			</ul>
		</div>
	</div>
    
<div class="dresses">
		<div class="container">
			<div class="w3ls_dresses_grids">
				<?php $_smarty_tpl->_subTemplateRender('file:views/sach_nxb/v_sach_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                
				<?php $_smarty_tpl->_subTemplateRender('file:views/sach_nxb/v_sach_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
    <?php }
}
