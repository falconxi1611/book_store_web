<div class="col-md-4 w3ls_dresses_grid_left">
	<div class="w3ls_dresses_grid_left_grid">
		<h3>DANH MỤC SÁCH</h3>
		<div class="w3ls_dresses_grid_left_grid_sub">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Tất cả
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body panel_text">
				  	{foreach $loai_sach_cons as $loai_con}
					<ul>
						<li><a href="sach_theo_loai.php?id={$loai_con->id}">{$loai_con->ten_loai_sach}</a></li>
					</ul>
					{/foreach}
				  </div>
				</div>
			  </div>
			</div>
			
		</div>
	</div>
	
	<div class="w3ls_dresses_grid_left_grid">
		<h3>Sắp xếp theo ngày xuất bản</h3>
		<div class="w3ls_dresses_grid_left_grid_sub">
			<div class="ecommerce_color ecommerce_size">
				<ul>
					<li><a href="#">Medium</a></li>
					<li><a href="#">Large</a></li>
					<li><a href="#">Extra Large</a></li>
					<li><a href="#">Small</a></li>
				</ul>
			</div>
		</div>
	</div>

</div>