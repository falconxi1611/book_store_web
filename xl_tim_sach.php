<?php
	$gtTim=$_POST["gtTim"];
//	echo($gtTim);
	if($gtTim=="")
	{
		die();	
	}
	include("models/m_sach.php");
	$m_sach = new M_sach();
	$sachs = $m_sach->Tim_sach_theo_ten($gtTim);
?>

<div class="container">
			<div class="col-md-12 wthree_banner_bottom_right" >
            
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Kết quả tìm kiếm (<?php echo count($sachs)?>)</a></li>
					
					</ul>
					<div id="myTabContent" class="tab-content">
         
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs" style="padding: 30px">
                           
                            	
								<?php foreach($sachs as $sach)
								{
								?>
							
                        
                            	
								<div class="col-md-3 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="public/layout/images/<?php echo $sach->hinh ?>" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $sach->hinh ?>" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $sach->hinh ?>" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $sach->hinh ?>" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $sach->hinh ?>" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $sach->hinh ?>" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $sach->hinh ?>" alt=" " class="img-responsive" />
										<img src="public/layout/images/<?php echo $sach->hinh ?>" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
                             
													<a href="#" data-toggle="modal" data-target="#sach<?php echo $sach->id ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5 class="my_ten_sach" ><a href="sach_chi_tiet.php?id=<?php echo $sach->id ?>"><?php echo $sach->ten_sach ?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><span><?php echo number_format($sach->gia_bia)?> đ</span> <i class="item_price"><?php echo number_format($sach->don_gia)?> đ</i></p>
                                        <input type="hidden" value="1" id="soluong<?php echo $sach->id ?>" />&nbsp;
                                        <input type="hidden" id="dongia<?php echo $sach->id?>" value="<?php echo $sach->don_gia ?>"/>
										<p><a class="item_add" href="javascript:mua_hang(<?php echo $sach->id ?>, 1, <?php echo $sach->don_gia?>)" onClick="" id="<?php echo $sach->id?>" >MUA SÁCH</a></p>
                                       
									</div>
								</div>
								
		
								<div class="modal video-modal fade" id="sach<?php echo $sach->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalM">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="public/layout/images/<?php echo $sach->hinh ?> " alt=" " class="img-responsive" id="my_hinh"/>
									</div>
									<div class="col-md-7 modal_body_right">
										<h4><?php echo $sach->gioi_thieu ?></h4>
										<p><?php echo $sach->doc_thu ?></p>
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
											<p><span><?php echo number_format($sach->gia_bia) ?> đ</span> <i class="item_price"><?php echo number_format($sach->don_gia)?> đ</i></p>
                                            <input type="hidden" value="1" id="soluong<?php echo $sach->id?>" />&nbsp;
                                            <input type="hidden" id="dongia<?php echo $sach->id ?>" value="<?php echo $sach->don_gia?>"/>
											<p><a class="item_add" href="javascript: mua_hang(<?php echo $sach->id ?>, 1, <?php echo $sach->don_gia?>)" id='<?php echo $sach->id?>' >MUA SÁCH</a></p>
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
							?>

                              
							</div>
						</div>                        
                   
					</div>
				</div>
					<!--modal-video-->

			</div>
			<div class="clearfix"> </div>
		</div>	