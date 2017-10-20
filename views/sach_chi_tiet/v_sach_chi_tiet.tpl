	<div class="single">
		<div class="container">
			<div class="col-md-3 single-left">
				<div class="flexslider">
                <img src="public/layout/images/{$sach->hinh}" data-imagezoom="true" class="img-responsive">
				</div>
				<!-- flixslider -->
					<script defer src="public/layout/js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="public/layout/css/flexslider.css" type="text/css" media="screen" />
					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>		
				<!-- //zooming-effect -->
			</div>
            
            
			<div class="col-md-9 single-right">
				<h3>{$sach->ten_sach}</h3>
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
						<p>{$sach->gioi_thieu}.</p>
					</div>
					
					<div class="simpleCart_shelfItem">
						<p>Giá khuyến mãi:  <span>{number_format($sach->gia_bia)} đ</span> <i class="item_price">{number_format($sach->don_gia)} đ</i></p>
						<input type="hidden" value="1" id="soluong{$sach->id}" />&nbsp;
						<input type="hidden" id="dongia{$sach->id}" value="{$sach->don_gia}"/>
						<p><a class="item_add" href="javascript:void(0)" id="{$sach->id}" >MUA SÁCH</a></p>
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
						<h5>Ngày xuất bản: {$sach->ngay_xuat_ban}</h5> 
						<p></p>
                        <h5>Số trang: {$sach->so_trang}</h5>
						<p></p>
                        <h5>Kích thước: {$sach->kich_thuoc}</h5>
						<p></p>
                        <h5>Trọng lượng: {$sach->trong_luong}</h5>
						
					</div>	

					<div class="tab-2 resp-tab-content additional_info_grid" aria-labelledby="tab_item-1">
						<h4>Đánh giá sách</h4>
                        {foreach $binh_luans as $binh_luan}
						<div class="additional_info_sub_grids">
							
							<div class="col-xs-12 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="single.html">{$binh_luan->ten_nd}</a>
									<h5>{$binh_luan->ngay_binh_luan}</h5>
									<p>{$binh_luan->noi_dung}</p>
								
							</div>
							<div class="clearfix"> </div>
						</div>
                        {/foreach}
                        
						
						<div class="review_grids">
							<h5>VIẾT BÌNH LUẬN SÁCH</h5>
                            {literal}
							<form action="#" method="post">
                            	<input type="hidden" id="id_sach" name="{$sach->id}" value="{$sach->id}" />
								<input type="text" name="Name" id="Name" value="Tên bạn" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên bạn';}" required>
								<input type="email" name="Email" id="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
								<input type="text" name="Telephone" id="Telephone" value="Số điện thoại" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Số điện thoại';}" required>
								<textarea name="Review" id="Review" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Viết bình luận ...';}" required>Viết bình luận ...</textarea>
								<input class="binh_luan" type="button" value="Gửi bình luận" onclick="XL_Binh_luan()" >
							</form>
                            <div id="kq"> </div>
                            {/literal}
						</div>
					</div> 			        					            	      
				</div>	
			</div>
			<script src="public/layout/js/easyResponsiveTabs.js" type="text/javascript"></script>
            <script src="public/layout/js/thu_vien.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab1').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
		</div>
	</div>
	
    
	
    {*include file='views/sach_chi_tiet/v_sach_chi_tiet.tpl'*}