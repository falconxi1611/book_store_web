<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 09:27:16
  from "C:\wamp\www\Book_Store_Project_29.07.2017\views\tin_tuc\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8a54549bf7_69984441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e89b53e9c6f55749fabdd7d1389ac9341d98c54d' => 
    array (
      0 => 'C:\\wamp\\www\\Book_Store_Project_29.07.2017\\views\\tin_tuc\\v_tin_tuc.tpl',
      1 => 1500226241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/tin_tuc/v_tin_tuc_left.tpl' => 1,
    'file:views/tin_tuc/v_tin_tuc_right.tpl' => 1,
  ),
),false)) {
function content_597d8a54549bf7_69984441 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> TRANG CHỦ</a> <i>|</i></li>
				<li>TIN TỨC</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- faq -->
	<div class="faq">
		<div class="container">	
			<div class="col-md-8 w3ls_dresses_grid_left" >
            <div id="hien_thi">
				<?php $_smarty_tpl->_subTemplateRender('file:views/tin_tuc/v_tin_tuc_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>
			</div>
            <div class="col-md-4 w3ls_dresses_grid_right">
            
				<?php $_smarty_tpl->_subTemplateRender('file:views/tin_tuc/v_tin_tuc_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
			</div>
             	
            
		</div>
	</div><?php }
}
