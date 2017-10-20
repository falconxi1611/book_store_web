<?php
/* Smarty version 3.1.32-dev-11, created on 2017-08-31 09:16:00
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59a7d3d0689080_21287804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5eb90dfb4d0a425acf52e018b3cea2f5f103daab' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\smarty\\templates\\header.tpl',
      1 => 1504170954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a7d3d0689080_21287804 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div class="header">
    	
		<div class="container">
			<div class="w3l_login">
				<a href="admin/index.html" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="trang-chu">Nhà sách FTStore<span>Phụng sự tri thức</span></a></h1>
			</div>

			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
				 <form onsubmit="$('#gtTim').blur();return false;" class="pure-form">
						<input type="text" id="gtTim" name="Search" placeholder="Nhập vào tìm kiếm..." >	
						<input type="submit" value="Tìm" id="btn_tim" >		
			     </form>
			    
				</div>
			</div>
		
			<div class="cart box_1">
				<a href="gio-hang">
					<div class="total">
					<span><?php if (isset($_SESSION['thanh_tien'])) {
echo number_format($_SESSION['thanh_tien'],0,".",",");?>
 đ<?php } else { ?>0 đ<?php }?></span> (<span><?php if (isset($_SESSION['so_luong'])) {
echo $_SESSION['so_luong'];
} else { ?>0<?php }?></span> sản phẩm)</div>
					<img src="public/layout/images/bag.png" alt="" />
				</a>
				<p><a href="" class="simpleCart_empty">Giỏ hàng</a></p>
				<div class="clearfix"> </div>
			</div>	

	
			<?php echo '<script'; ?>
>
				$(document).ready(function(){
					$("#gtTim").keyup(function(){
						var $gtTim=$("#gtTim").val();
						if($gtTim == "")
						{
							alert("Vui lòng nhập vào nội dung tìm kiếm !");
						}
						else
						{
//							alert($gtTim);
							var form_data={
								gtTim: $gtTim
							};
							$.ajax({
							url: "xl_tim_sach.php",
							type: 'POST',
							data: form_data,
							success: function(data) {
									$( "#hienthi" ).html(data);
				  					}
							});
							
						}
					})
				})
			<?php echo '</script'; ?>
>
			
		
		 <?php echo '<script'; ?>
 src="public/layout/js/jquery.auto-complete.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			$(function(){
				$('#gtTim').autoComplete({
					minChars: 1,
					source: function(term, suggest){
						term = term.toLowerCase();
						var choices = [<?php echo $_smarty_tpl->tpl_vars['str']->value;?>
];
						var suggestions = [];
						for (i=0;i<choices.length;i++)
							if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
						suggest(suggestions);
					}
				});
			})
		<?php echo '</script'; ?>
> 
		

			<div class="clearfix"> </div>
		</div>
		
		
		
	</div>
	
			
    	
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
                
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
                    
                    
						<li class="active"><a href="trang-chu" class="act">TRANG CHỦ</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="sach.php" class="dropdown-toggle" data-toggle="dropdown">DANH MỤC<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['loai_sachs']->value, 'loai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->value) {
?>
									<?php if ($_smarty_tpl->tpl_vars['loai']->value->id_loai_cha == 0) {?>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="sach_theo_loai.php?id=<?php echo $_smarty_tpl->tpl_vars['loai']->value->id;?>
" class="my_li"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai_sach;?>
</a></li>
										</ul>
									</div>
									<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
			
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
                     	<li><a href="tin-tuc">TIN TỨC</a></li>
						<li><a href="huong-dan-mua-hang">HƯỚNG DẪN MUA HÀNG</a></li>
                        
						<li><a href="thong-tin-lien-he">LIÊN HỆ</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
<?php }
}
