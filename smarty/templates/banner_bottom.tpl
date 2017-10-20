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
                    	{*Sách mới*}
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs" style="padding: 30px">
                           
                            {foreach $sach_mois $sach_moi}
                             {*Hiển thị sách bên ngoài theo id*}
                            	
								<div class="col-md-3 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="public/layout/images/{$sach_moi->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_moi->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_moi->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_moi->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_moi->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_moi->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_moi->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_moi->hinh}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
                                                {*Thay đổi id="sach_moi{$sach_moi->id}" để tránh trùng id lấy giỏ hàng *}
													<a href="#" data-toggle="modal" data-target="#sach_moi{$sach_moi->id}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
                                    
                                    {*THAY ĐỔI ĐƯỜNG LINK VỚI HTACCESS*}
                                    
									<h5 class="my_ten_sach" ><a href="sach-chi-tiet-{$sach_moi->id}">{$sach_moi->ten_sach}</a></h5>
                                    
									<div class="simpleCart_shelfItem">
										<p><span>{number_format($sach_moi->gia_bia)} đ</span> <i class="item_price">{number_format($sach_moi->don_gia)} đ</i></p>
                                        <input type="hidden" value="1" id="soluong{$sach_moi->id}" />&nbsp;
                                        <input type="hidden" id="dongia{$sach_moi->id}" value="{$sach_moi->don_gia}"/>
										<p><a class="item_add" href="javascript:void(0)" id="{$sach_moi->id}" >MUA SÁCH</a></p>
                                       
									</div>
								</div>
								
							 
							 {*Thay đổi id="sach_moi{$sach_moi->id}" để tránh trùng id lấy giỏ hàng *}
								<div class="modal video-modal fade" id="sach_moi{$sach_moi->id}" tabindex="-1" role="dialog" aria-labelledby="myModalM">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="public/layout/images/{$sach_moi->hinh}" alt=" " class="img-responsive" id="my_hinh"/>
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>{$sach_moi->gioi_thieu}</h4>
										<p>{$sach_moi->doc_thu}</p>
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
											<p><span>{number_format($sach_moi->gia_bia)} đ</span> <i class="item_price">{number_format($sach_moi->don_gia)} đ</i></p>
                                            <input type="hidden" value="1" id="soluong{$sach_moi->id}" />&nbsp;
                                            <input type="hidden" id="dongia{$sach_moi->id}" value="{$sach_moi->don_gia}"/>
											<p><a class="item_add" href="javascript:void(0)" id='{$sach_moi->id}'>MUA SÁCH</a></p>
										</div>
										
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
               				 {*Hiển thị chi chi tiết sách theo mymodal*}
                			{/foreach}

                              
							</div>
						</div>
                        
                        {*Sách nổi bật*}
						<div role="tabpanel" class="tab-pane fade active in" id="skirts" aria-labelledby="skirts-tab">
							<div class="agile_ecommerce_tabs">
                           
                            {foreach $sach_noi_bats $sach_noi_bat}
                             {*Hiển thị sách bên ngoài theo id*}
                            	
								<div class="col-md-3 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="public/layout/images/{$sach_noi_bat->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_noi_bat->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_noi_bat->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_noi_bat->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_noi_bat->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_noi_bat->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_noi_bat->hinh}" alt=" " class="img-responsive" />
										<img src="public/layout/images/{$sach_noi_bat->hinh}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#sach_noi_bat{$sach_noi_bat->id}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5 class="my_ten_sach" ><a href="sach_chi_tiet.php?id={$sach_noi_bat->id}">{$sach_noi_bat->ten_sach}</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>{number_format($sach_noi_bat->gia_bia)} đ</span> <i class="item_price">{number_format($sach_noi_bat->don_gia)} đ</i></p>
                                        <div>
                                        <input type="hidden" value="1" id="soluong{$sach_noi_bat->id}" />&nbsp;
                                        <input type="hidden" id="dongia{$sach_noi_bat->id}" value="{$sach_noi_bat->don_gia}"/>
										<p><a class="item_add" href="javascript:void(0)" id="{$sach_noi_bat->id}">MUA SÁCH</a></p>
                                        </div>
									</div>
								</div>
                                
								<div class="modal video-modal fade" id="sach_noi_bat{$sach_noi_bat->id}" tabindex="-1" role="dialog" aria-labelledby="myModalM">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="public/layout/images/{$sach_moi->hinh}" alt=" " class="img-responsive" id="my_hinh"/>
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>{$sach_noi_bat->gioi_thieu}</h4>
										<p>{$sach_noi_bat->doc_thu}</p>
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
											<p><span>{number_format($sach_noi_bat->gia_bia)} đ</span> <i class="item_price">{number_format($sach_moi->don_gia)} đ</i></p>
                                            <input type="hidden" value="1" id="soluong{$sach_noi_bat->id}" />&nbsp;
                                            <input type="hidden" id="dongia{$sach_noi_bat->id}" value="{$sach_noi_bat->don_gia}"/>
											<p><a class="item_add" href="javascript:void(0)" id="{$sach_noi_bat->id}">MUA SÁCH</a></p>
										</div>
										
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
               				 {*Hiển thị chi chi tiết sách theo mymodal*}
                			{/foreach}
                               
								<div class="clearfix"> </div>
                              
							</div>
						</div>
                        
                        {**}
						<div role="tabpanel" class="tab-pane fade" id="watches" aria-labelledby="watches-tab">
							<div class="agile_ecommerce_tabs">
								<h3 align="center">Đang Cập Nhật ...</h3>
								<div class="clearfix"> </div>
							</div>
						</div>
                        
                        {**}
						
                        
                   
                       
					</div>
				</div>
					<!--modal-video-->

			</div>
			<div class="clearfix"> </div>
		</div>
</div>