<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 07:42:09
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\smarty\templates\new_product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8dd188e9e2_53751444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f02b5a38852615b31f7f5d96a6882ac92aff90c' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\smarty\\templates\\new_product.tpl',
      1 => 1501397383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d8dd188e9e2_53751444 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="new-products">
		<div class="container">
			<h3>SÁCH YÊU THÍCH</h3>
			<div class="agileinfo_new_products_grids">
            	
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sach_yeu_thichs']->value, 'sach_yeu_thich');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sach_yeu_thich']->value) {
?>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class=" agileinfo_new_products_grid1">
                    	
						<div class=" hs-wrapper1">
							<a href="sach_chi_tiet.php"><img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_yeu_thich']->value->hinh;?>
" alt=" " class="img-responsive" /></a>
							
							
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="sach_chi_tiet.php?id=<?php echo $_smarty_tpl->tpl_vars['sach_yeu_thich']->value->id;?>
" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
                        
						<h5 class="my_ten_sach_yt"><a href="sach_chi_tiet.php?id=<?php echo $_smarty_tpl->tpl_vars['sach_yeu_thich']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['sach_yeu_thich']->value->ten_sach;?>
</a></h5>
                        
						<div class="simpleCart_shelfItem">
							<p><span><?php echo number_format($_smarty_tpl->tpl_vars['sach_yeu_thich']->value->gia_bia);?>
 đ</span> <i class="item_price"><?php echo number_format($_smarty_tpl->tpl_vars['sach_yeu_thich']->value->don_gia);?>
 đ</i></p>
                            <input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sach_yeu_thich']->value->id;?>
" />&nbsp;
                            <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sach_yeu_thich']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sach_yeu_thich']->value->don_gia;?>
"/>
							<p><a class="item_add" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['sach_yeu_thich']->value->id;?>
">MUA SÁCH</a></p>
						</div>
                        
					</div>
				</div>
                
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


				<div class="clearfix"> </div>
			</div>
		</div>
	</div><?php }
}
