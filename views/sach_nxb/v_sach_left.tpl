<div class="col-md-4 w3ls_dresses_grid_left">
	<div class="w3ls_dresses_grid_left_grid">
		<h3>NHÀ XUẤT BẢN KHÁC</h3>
		<div class="w3ls_dresses_grid_left_grid_sub">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Danh Mục
					</a>
					</h4>
<!--				</div>-->
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body panel_text">
					<ul>
						{foreach $nxb_khacs as $khac} 
						<li><a href="sach_theo_nxb.php?id={$khac->id}">{$khac->ten_nha_xuat_ban}</a></li>
						{/foreach}
					</ul>
					</div>
				</div>
				</div>
				
			</div>
		</div>
	</div>

	</div>
	
</div>