<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 07:44:08
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\views\tin_tuc\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8e48c09ca0_26420151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20c7b4b5e4f597ffbaa16585137839786dca4ff8' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\views\\tin_tuc\\v_tin_tuc.tpl',
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
function content_597d8e48c09ca0_26420151 (Smarty_Internal_Template $_smarty_tpl) {
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
