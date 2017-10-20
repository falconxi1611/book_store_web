	<div class="header">
    	{*Hiển thị phần Header trên *}
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
					<span>{if isset($smarty.session.thanh_tien)}{$smarty.session.thanh_tien|number_format:0:".":","} đ{else}0 đ{/if}</span> (<span>{if isset($smarty.session.so_luong)}{$smarty.session.so_luong}{else}0{/if}</span> sản phẩm)</div>
					<img src="public/layout/images/bag.png" alt="" />
				</a>
				<p><a href="" class="simpleCart_empty">Giỏ hàng</a></p>
				<div class="clearfix"> </div>
			</div>	

	
			<script>
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
			</script>
			
		
		 <script src="public/layout/js/jquery.auto-complete.js"></script>
		<script>
			$(function(){
				$('#gtTim').autoComplete({
					minChars: 1,
					source: function(term, suggest){
						term = term.toLowerCase();
						var choices = [{$str}];
						var suggestions = [];
						for (i=0;i<choices.length;i++)
							if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
						suggest(suggestions);
					}
				});
			})
		</script> 
		

			<div class="clearfix"> </div>
		</div>
		
		
		
	</div>
	
			
    	{* Hiển thị Navigation*}
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
                    
                    {*THAY ĐỔI ĐƯỜNG LINK VỚI HTACCESS*}
						<li class="active"><a href="trang-chu" class="act">TRANG CHỦ</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="sach.php" class="dropdown-toggle" data-toggle="dropdown">DANH MỤC<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									{foreach $loai_sachs as $loai}
									{if $loai->id_loai_cha==0}
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="sach_theo_loai.php?id={$loai->id}" class="my_li">{$loai->ten_loai_sach}</a></li>
										</ul>
									</div>
									{/if}
									{/foreach}			
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
