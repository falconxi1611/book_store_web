<div class="new-products">
		<div class="container">
			<h3>SÁCH YÊU THÍCH</h3>
			<div class="agileinfo_new_products_grids">
                {*{$i = 1}*}
                {foreach $sach_yeu_thichs as $sach_yeu_thich}
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agileinfo_new_products_grid">
						<div class="hs-wrapper1">
							<a href="sach_chi_tiet.php?id={$sach_yeu_thich->id}"><img src="public/layout/images/{$sach_yeu_thich->hinh}" /></a>
						</div>
						<h5 class="my_ten_sach_yt"><a href="sach_chi_tiet.php?id={$sach_yeu_thich->id}" >{$sach_yeu_thich->ten_sach}</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>{number_format($sach_yeu_thich->gia_bia)} đ</span> <i class="item_price">{number_format($sach_yeu_thich->don_gia)} đ</i></p>
                            <input type="hidden" value="1" id="soluong{$sach_yeu_thich->id}" />&nbsp;
                            <input type="hidden" id="dongia{$sach_yeu_thich->id}" value="{$sach_yeu_thich->don_gia}"/>
							<p><a class="item_add" href="javascript:void(0)" id="{$sach_yeu_thich->id}">MUA SÁCH</a></p>
						</div>
					</div>
				</div>
                {/foreach}
			</div>
		</div>
</div>