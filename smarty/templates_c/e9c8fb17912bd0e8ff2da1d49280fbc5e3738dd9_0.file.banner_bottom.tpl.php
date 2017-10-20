<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 08:48:08
  from "C:\wamp\www\Book_Store_Project_29.07.2017\smarty\templates\banner_bottom.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8128930687_75043481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9c8fb17912bd0e8ff2da1d49280fbc5e3738dd9' => 
    array (
      0 => 'C:\\wamp\\www\\Book_Store_Project_29.07.2017\\smarty\\templates\\banner_bottom.tpl',
      1 => 1501322035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d8128930687_75043481 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="banner-bottom">	
		<div class="container">
			<div class="col-md-12 wthree_banner_bottom_right" >
            
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Sách mới</a></li>
						<li role="presentation"><a href="#skirts" role="tab" id="skirts-tab" data-toggle="tab" aria-controls="skirts">Sách nổi bật</a></li>
						<li role="presentation"><a href="#watches" role="tab" id="watches-tab" data-toggle="tab" aria-controls="watches">Khác</a></li>
					
					</ul>
					<div id="myTabContent" class="tab-content">
                    	
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs" style="padding: 30px">
                           
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sach_mois']->value, 'sach_moi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sach_moi']->value) {
?>
                             
                            	
								<div class="col-md-3 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->hinh;?>
" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
                                                
													<a href="#" data-toggle="modal" data-target="#sach_moi<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->id;?>
"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
                                    
                                    
                                    
									<h5 class="my_ten_sach" ><a href="sach-chi-tiet-<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->ten_sach;?>
</a></h5>
                                    
									<div class="simpleCart_shelfItem">
										<p><span><?php echo number_format($_smarty_tpl->tpl_vars['sach_moi']->value->gia_bia);?>
 đ</span> <i class="item_price"><?php echo number_format($_smarty_tpl->tpl_vars['sach_moi']->value->don_gia);?>
 đ</i></p>
                                        <input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->id;?>
" />&nbsp;
                                        <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->don_gia;?>
"/>
										<p><a class="item_add" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->id;?>
" >MUA SÁCH</a></p>
                                       
									</div>
								</div>
								
							 
							 
								<div class="modal video-modal fade" id="sach_moi<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->id;?>
" tabindex="-1" role="dialog" aria-labelledby="myModalM">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->hinh;?>
" alt=" " class="img-responsive" id="my_hinh"/>
									</div>
									<div class="col-md-7 modal_body_right">
										<h4><?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->gioi_thieu;?>
</h4>
										<p><?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->doc_thu;?>
</p>
										<div class="rating">
											<div class="rating-left">
												<img src="public/layout/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="public/layout/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="public/layout/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="public/layout/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="public/layout/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span><?php echo number_format($_smarty_tpl->tpl_vars['sach_moi']->value->gia_bia);?>
 đ</span> <i class="item_price"><?php echo number_format($_smarty_tpl->tpl_vars['sach_moi']->value->don_gia);?>
 đ</i></p>
                                            <input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->id;?>
" />&nbsp;
                                            <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->don_gia;?>
"/>
											<p><a class="item_add" href="javascript:void(0)" id='<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->id;?>
'>MUA SÁCH</a></p>
										</div>
										
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
               				 
                			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                              
							</div>
						</div>
                        
                        
						<div role="tabpanel" class="tab-pane fade active in" id="skirts" aria-labelledby="skirts-tab">
							<div class="agile_ecommerce_tabs">
                           
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sach_noi_bats']->value, 'sach_noi_bat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sach_noi_bat']->value) {
?>
                             
                            	
								<div class="col-md-3 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->hinh;?>
" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->hinh;?>
" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#sach_noi_bat<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->id;?>
"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5 class="my_ten_sach" ><a href="sach_chi_tiet.php?id=<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->ten_sach;?>
</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span><?php echo number_format($_smarty_tpl->tpl_vars['sach_noi_bat']->value->gia_bia);?>
 đ</span> <i class="item_price"><?php echo number_format($_smarty_tpl->tpl_vars['sach_noi_bat']->value->don_gia);?>
 đ</i></p>
                                        <div>
                                        <input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->id;?>
" />&nbsp;
                                        <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->don_gia;?>
"/>
										<p><a class="item_add" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->id;?>
">MUA SÁCH</a></p>
                                        </div>
									</div>
								</div>
                                
								<div class="modal video-modal fade" id="sach_noi_bat<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->id;?>
" tabindex="-1" role="dialog" aria-labelledby="myModalM">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['sach_moi']->value->hinh;?>
" alt=" " class="img-responsive" id="my_hinh"/>
									</div>
									<div class="col-md-7 modal_body_right">
										<h4><?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->gioi_thieu;?>
</h4>
										<p><?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->doc_thu;?>
</p>
										<div class="rating">
											<div class="rating-left">
												<img src="public/layout/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="public/layout/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="public/layout/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="public/layout/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="public/layout/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span><?php echo number_format($_smarty_tpl->tpl_vars['sach_noi_bat']->value->gia_bia);?>
 đ</span> <i class="item_price"><?php echo number_format($_smarty_tpl->tpl_vars['sach_moi']->value->don_gia);?>
 đ</i></p>
                                            <input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->id;?>
" />&nbsp;
                                            <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->don_gia;?>
"/>
											<p><a class="item_add" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['sach_noi_bat']->value->id;?>
">MUA SÁCH</a></p>
										</div>
										
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
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
                        
                        
						<div role="tabpanel" class="tab-pane fade" id="watches" aria-labelledby="watches-tab">
							<div class="agile_ecommerce_tabs">
								<h3 align="center">Đang Cập Nhật ...</h3>
								<div class="clearfix"> </div>
							</div>
						</div>
                        
                        
						
                        
                   
                       
					</div>
				</div>
					<!--modal-video-->

			</div>
			<div class="clearfix"> </div>
		</div>
</div><?php }
}
