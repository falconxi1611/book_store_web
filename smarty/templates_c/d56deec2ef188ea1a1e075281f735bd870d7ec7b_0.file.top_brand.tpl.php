<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 08:48:08
  from "C:\wamp\www\Book_Store_Project_29.07.2017\smarty\templates\top_brand.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8128e974e0_42625810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56deec2ef188ea1a1e075281f735bd870d7ec7b' => 
    array (
      0 => 'C:\\wamp\\www\\Book_Store_Project_29.07.2017\\smarty\\templates\\top_brand.tpl',
      1 => 1500909885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d8128e974e0_42625810 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="top-brands">
		<div class="container">
			<h3>Nhà Xuất Bản</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">	
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nxbs']->value, 'nxb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nxb']->value) {
?>		
					<li>
						<a href="sach_theo_nxb.php?id=<?php echo $_smarty_tpl->tpl_vars['nxb']->value->id;?>
"><img src="public/layout/hinh_nxb/<?php echo $_smarty_tpl->tpl_vars['nxb']->value->hinh;?>
" alt=" " class="img-responsive" /></a>
					</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				</ul>
			</div>
					<?php echo '<script'; ?>
 type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					<?php echo '</script'; ?>
>
					<?php echo '<script'; ?>
 type="text/javascript" src="public/layout/js/jquery.flexisel.js"><?php echo '</script'; ?>
>
		</div>
	</div>
</div><?php }
}
