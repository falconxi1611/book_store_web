<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 07:55:05
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\views\sach_chi_tiet\v_sach_chi_tiet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d90d90a1644_90878169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cfe3bcca4a6f482392b936ec0a6fbdf9d44495e' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\views\\sach_chi_tiet\\v_sach_chi_tiet.tpl',
      1 => 1501398984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d90d90a1644_90878169 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div class="single">
		<div class="container">
			<div class="col-md-3 single-left">
				<div class="flexslider">
                <img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach']->value->hinh;?>
" data-imagezoom="true" class="img-responsive">
				</div>
				<!-- flixslider -->
					<?php echo '<script'; ?>
 defer src="public/layout/js/jquery.flexslider.js"><?php echo '</script'; ?>
>
					<link rel="stylesheet" href="public/layout/css/flexslider.css" type="text/css" media="screen" />
					<?php echo '<script'; ?>
>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					<?php echo '</script'; ?>
>		
				<!-- //zooming-effect -->
			</div>
            
            
			<div class="col-md-9 single-right">
				<h3><?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_sach;?>
</h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked>
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
					<div class="description">
						<h5><i>Giới thiệu sách</i></h5>
						<p><?php echo $_smarty_tpl->tpl_vars['sach']->value->gioi_thieu;?>
.</p>
					</div>
					
					<div class="simpleCart_shelfItem">
						<p>Giá khuyến mãi:  <span><?php echo number_format($_smarty_tpl->tpl_vars['sach']->value->gia_bia);?>
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
</div>

	<div class="additional_info">
		<div class="container">
			<div class="sap_tabs">	
				<div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Thông tin sách</span></li>
                        
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Đánh giá</span></li>
					</ul>		
					<div class="tab-1 resp-tab-content additional_info_grid" aria-labelledby="tab_item-0">
						<h5>Ngày xuất bản: <?php echo $_smarty_tpl->tpl_vars['sach']->value->ngay_xuat_ban;?>
</h5> 
						<p></p>
                        <h5>Số trang: <?php echo $_smarty_tpl->tpl_vars['sach']->value->so_trang;?>
</h5>
						<p></p>
                        <h5>Kích thước: <?php echo $_smarty_tpl->tpl_vars['sach']->value->kich_thuoc;?>
</h5>
						<p></p>
                        <h5>Trọng lượng: <?php echo $_smarty_tpl->tpl_vars['sach']->value->trong_luong;?>
</h5>
						
					</div>	

					<div class="tab-2 resp-tab-content additional_info_grid" aria-labelledby="tab_item-1">
						<h4>Đánh giá sách</h4>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['binh_luans']->value, 'binh_luan');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['binh_luan']->value) {
?>
						<div class="additional_info_sub_grids">
							
							<div class="col-xs-12 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="single.html"><?php echo $_smarty_tpl->tpl_vars['binh_luan']->value->ten_nd;?>
</a>
									<h5><?php echo $_smarty_tpl->tpl_vars['binh_luan']->value->ngay_binh_luan;?>
</h5>
									<p><?php echo $_smarty_tpl->tpl_vars['binh_luan']->value->noi_dung;?>
</p>
								
							</div>
							<div class="clearfix"> </div>
						</div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        
						
						<div class="review_grids">
							<h5>VIẾT BÌNH LUẬN SÁCH</h5>
                            
							<form action="#" method="post">
                            	<input type="hidden" id="id_sach" name="{$sach->id}" value="{$sach->id}" />
								<input type="text" name="Name" id="Name" value="Tên bạn" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên bạn';}" required>
								<input type="email" name="Email" id="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
								<input type="text" name="Telephone" id="Telephone" value="Số điện thoại" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Số điện thoại';}" required>
								<textarea name="Review" id="Review" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Viết bình luận ...';}" required>Viết bình luận ...</textarea>
								<input class="binh_luan" type="button" value="Gửi bình luận" onclick="XL_Binh_luan()" >
							</form>
                            <div id="kq"> </div>
                            
						</div>
					</div> 			        					            	      
				</div>	
			</div>
			<?php echo '<script'; ?>
 src="public/layout/js/easyResponsiveTabs.js" type="text/javascript"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="public/layout/js/thu_vien.js" type="text/javascript"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab1').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			<?php echo '</script'; ?>
>
		</div>
	</div>
	
    
	
    <?php }
}
