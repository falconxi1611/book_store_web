<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 07:44:14
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\views\sach\v_sach_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8e4ed8f025_55673311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd54fa42c15cf80ba62f3f0280bbcabfb86f92b0' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\views\\sach\\v_sach_left.tpl',
      1 => 1500449734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d8e4ed8f025_55673311 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-4 w3ls_dresses_grid_left">
	<div class="w3ls_dresses_grid_left_grid">
		<h3>DANH MỤC SÁCH</h3>
		<div class="w3ls_dresses_grid_left_grid_sub">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Tất cả
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body panel_text">
				  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['loai_sach_cons']->value, 'loai_con');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai_con']->value) {
?>
					<ul>
						<li><a href="sach_theo_loai.php?id=<?php echo $_smarty_tpl->tpl_vars['loai_con']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['loai_con']->value->ten_loai_sach;?>
</a></li>
					</ul>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				  </div>
				</div>
			  </div>
			</div>
			
		</div>
	</div>
	
	<div class="w3ls_dresses_grid_left_grid">
		<h3>Sắp xếp theo ngày xuất bản</h3>
		<div class="w3ls_dresses_grid_left_grid_sub">
			<div class="ecommerce_color ecommerce_size">
				<ul>
					<li><a href="#">Medium</a></li>
					<li><a href="#">Large</a></li>
					<li><a href="#">Extra Large</a></li>
					<li><a href="#">Small</a></li>
				</ul>
			</div>
		</div>
	</div>

</div><?php }
}
