<div class="top-brands">
		<div class="container">
			<h3>Nhà Xuất Bản</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">	
					{foreach $nxbs as $nxb}		
					<li>
						<a href="sach_theo_nxb.php?id={$nxb->id}"><img src="public/layout/hinh_nxb/{$nxb->hinh}" alt=" " class="img-responsive" /></a>
					</li>
					{/foreach}
				</ul>
			</div>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="public/layout/js/jquery.flexisel.js"></script>
		</div>
	</div>
</div>