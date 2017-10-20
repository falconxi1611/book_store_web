<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 07:44:15
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\views\sach\v_sach_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8e4f043ee1_21032263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30a220524261402615d0e337dd4ec8023807802c' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\views\\sach\\v_sach_right.tpl',
      1 => 1501322552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d8e4f043ee1_21032263 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['sachs']->value) > 0) {?>
<div class="col-md-8 w3ls_dresses_grid_right">
<div class="w3ls_dresses_grid_right_grid2" >
	<div class="w3ls_dresses_grid_right_grid2_left">
		<h3>Kết quả tìm kiếm: <?php echo $_smarty_tpl->tpl_vars['dem']->value;?>
</h3>
	</div>
	<div class="w3ls_dresses_grid_right_grid2_right">
		<select name="select_item" class="select_item" id="loc_sach" onChange="Loc_sach($('#loc_sach').val(), <?php echo $_GET['id'];?>
)">
			<option selected="selected" value="mac_dinh">Mặc định</option>
			<option value="ten_sach">Lọc theo tên từ A->Z</option>
			<option value="ten_sach DESC">Lọc theo tên từ Z->A</option>
			<option value="don_gia">Sắp xếp theo giá thấp nhất</option>
			<option value="don_gia DESC">Sắp xếp theo giá cao nhất</option>
		</select>
	</div>
	<div class="clearfix"> </div>
</div>


<div id="ket_qua">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sachs']->value, 'sach');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sach']->value) {
?>
	<div class="w3ls_dresses_grid_right_grid3">
		<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
			<div class="agile_ecommerce_tab_left dresses_grid">
				<div class="hs-wrapper hs-wrapper2" >
					<img src="PUBLIC/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach']->value->hinh;?>
" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach']->value->hinh;?>
" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach']->value->hinh;?>
" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach']->value->hinh;?>
" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach']->value->hinh;?>
" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach']->value->hinh;?>
" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach']->value->hinh;?>
" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach']->value->hinh;?>
" alt=" " class="img-responsive" />
					<div class="w3_hs_bottom w3_hs_bottom_sub1">
						<ul>
							<li>
                            
                            
								<a href="sach-chi-tiet-<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
" data-toggle="modal" data-target="#sach<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
							</li>
						</ul>
					</div>
				</div>
               				
				<h5 class="my_ten_sach"><a href="sach-chi-tiet-<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_sach;?>
</a></h5>
				<div class="simpleCart_shelfItem">
					<p><span><?php echo number_format($_smarty_tpl->tpl_vars['sach']->value->gia_bia);?>
 đ</span> <i class="item_price"><?php echo number_format($_smarty_tpl->tpl_vars['sach']->value->don_gia);?>
 đ</i></p>
                        <input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
" />&nbsp;
						<input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->don_gia;?>
"/>
						<p><a class="item_add" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
" >MUA SÁCH</a></p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
        
		<div class="modal video-modal fade" id="sach<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="PUBLIC/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach']->value->hinh;?>
" alt=" " class="img-responsive" id="my_hinh"/>
						</div>
						<div class="col-md-7 modal_body_right">
							<h4 class="my_h4"><?php echo $_smarty_tpl->tpl_vars['sach']->value->doc_thu;?>
</h4>
							<p><?php echo $_smarty_tpl->tpl_vars['sach']->value->gioi_thieu;?>
</p>
							<div class="rating">
								<div class="rating-left">
									<img src="PUBLIC/layout/images/star-.png" alt=" " class="img-responsive" />
								</div>

								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span><?php echo number_format($_smarty_tpl->tpl_vars['sach']->value->gia_bia);?>
 đ</span> <i class="item_price"><?php echo number_format($_smarty_tpl->tpl_vars['sach']->value->don_gia);?>
 đ</i></p>
								<input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
" />&nbsp;
								<input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sach']->value->don_gia;?>
"/>
								<p><a class="item_add" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
" >MUA SÁCH</a></p>
							</div>

						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	<div class="div_phan_trang_2"><?php if ($_smarty_tpl->tpl_vars['dem']->value > 9) {
echo $_smarty_tpl->tpl_vars['lst']->value;
}?></div>
	</div>
</div>
  
<?php } else { ?>
<h3>Sách đang cập nhật</h3>
<?php }
}
}
