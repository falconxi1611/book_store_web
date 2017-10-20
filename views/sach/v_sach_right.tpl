{if $sachs|@count >0}
<div class="col-md-8 w3ls_dresses_grid_right">
<div class="w3ls_dresses_grid_right_grid2" >
	<div class="w3ls_dresses_grid_right_grid2_left">
		<h3>Kết quả tìm kiếm: {$dem}</h3>
	</div>
	<div class="w3ls_dresses_grid_right_grid2_right">
		<select name="select_item" class="select_item" id="loc_sach" onChange="Loc_sach($('#loc_sach').val(), {$smarty.get.id})">
			<option selected="selected" value="mac_dinh">Mặc định</option>
			<option value="ten_sach">Lọc theo tên từ A->Z</option>
			<option value="ten_sach DESC">Lọc theo tên từ Z->A</option>
			<option value="don_gia">Sắp xếp theo giá thấp nhất</option>
			<option value="don_gia DESC">Sắp xếp theo giá cao nhất</option>
		</select>
	</div>
	<div class="clearfix"> </div>
</div>

{*AJAX jQuery*}
<div id="ket_qua">
	{foreach $sachs as $sach}
	<div class="w3ls_dresses_grid_right_grid3">
		<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
			<div class="agile_ecommerce_tab_left dresses_grid">
				<div class="hs-wrapper hs-wrapper2" >
					<img src="PUBLIC/layout/images/{$sach->hinh}" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/{$sach->hinh}" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/{$sach->hinh}" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/{$sach->hinh}" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/{$sach->hinh}" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/{$sach->hinh}" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/{$sach->hinh}" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/{$sach->hinh}" alt=" " class="img-responsive" />
					<div class="w3_hs_bottom w3_hs_bottom_sub1">
						<ul>
							<li>
                            {*THAY ĐỔI ĐƯỜNG LINK VỚI HTACCESS*}
                            
								<a href="sach-chi-tiet-{$sach->id}" data-toggle="modal" data-target="#sach{$sach->id}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
							</li>
						</ul>
					</div>
				</div>
               				{*THAY ĐỔI ĐƯỜNG LINK VỚI HTACCESS*}
				<h5 class="my_ten_sach"><a href="sach-chi-tiet-{$sach->id}">{$sach->ten_sach}</a></h5>
				<div class="simpleCart_shelfItem">
					<p><span>{number_format($sach->gia_bia)} đ</span> <i class="item_price">{number_format($sach->don_gia)} đ</i></p>
                        <input type="hidden" value="1" id="soluong{$sach->id}" />&nbsp;
						<input type="hidden" id="dongia{$sach->id}" value="{$sach->don_gia}"/>
						<p><a class="item_add" href="javascript:void(0)" id="{$sach->id}" >MUA SÁCH</a></p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
        {*Hien Thi Chi Tiet Khi Nha Vao San Pham*}
		<div class="modal video-modal fade" id="sach{$sach->id}" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="PUBLIC/layout/images/{$sach->hinh}" alt=" " class="img-responsive" id="my_hinh"/>
						</div>
						<div class="col-md-7 modal_body_right">
							<h4 class="my_h4">{$sach->doc_thu}</h4>
							<p>{$sach->gioi_thieu}</p>
							<div class="rating">
								<div class="rating-left">
									<img src="PUBLIC/layout/images/star-.png" alt=" " class="img-responsive" />
								</div>

								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>{number_format($sach->gia_bia)} đ</span> <i class="item_price">{number_format($sach->don_gia)} đ</i></p>
								<input type="hidden" value="1" id="soluong{$sach->id}" />&nbsp;
								<input type="hidden" id="dongia{$sach->id}" value="{$sach->don_gia}"/>
								<p><a class="item_add" href="javascript:void(0)" id="{$sach->id}" >MUA SÁCH</a></p>
							</div>

						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	</div>
	{/foreach}
	<div class="div_phan_trang_2">{if $dem>9}{$lst}{/if}</div>
	</div>
</div>
  
{else}
<h3>Sách đang cập nhật</h3>
{/if}