<?php
	$dk_loc=$_POST['dk_loc']; 
	$id_loai_sach=$_POST['id_loai_sach'];

	if($dk_loc == "mac_dinh")
	{
		header('location: https://mail.google.com/');	
	}
	else
	{
	include_once('models/m_sach.php');
	include_once("models/m_loai_sach.php");
	$m_loai_sach=new M_loai_sach();
	$m_sach = new M_sach();
	$loai_sach=$m_loai_sach->Doc_loai_sach_theo_id($id_loai_sach);

	if($loai_sach->id_loai_cha==0)
	{
			$sachs=$m_sach->Loc_sach_theo_id_loai_cha($id_loai_sach, $dk_loc);
	}
	else
	{
			$sachs= $m_sach->Loc_sach_theo_id_loai_sach($id_loai_sach, $dk_loc);
	}
//	$dem=count($sachs);
//	include_once('controllers/Pager.php');
//	$p = new pager();
//	$limit = 9;
//	$count = count($sachs);
//	$vt = $p->findStart($limit);
//	$pages = $p->findPages($count,$limit);
//	$curpage = $_GET['page'];
//	$lst = $p->pageList($curpage,$pages);
//	if($loai_sach->id_loai_cha==0)
//	{
//		$sachs=$m_sach->Loc_sach_theo_id_loai_cha($id_loai_sach,$dk_loc, $vt,$limit);
//	}
//	else
//	{
//		$sachs= $m_sach->Loc_sach_theo_id_loai_sach($id_loai_sach,$dk_loc,$vt,$limit);
//	}
	}
?>
<?php
foreach($sachs as $sach)
{
?>

<div class="w3ls_dresses_grid_right_grid3">
		<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
			<div class="agile_ecommerce_tab_left dresses_grid">
				<div class="hs-wrapper hs-wrapper2" >
					<img src="PUBLIC/layout/images/<?php echo $sach->hinh?>" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $sach->hinh?>" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $sach->hinh?>" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $sach->hinh?>" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $sach->hinh?>" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $sach->hinh?>" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $sach->hinh?>" alt=" " class="img-responsive" />
					<img src="PUBLIC/layout/images/<?php echo $sach->hinh?>" alt=" " class="img-responsive" />
					<div class="w3_hs_bottom w3_hs_bottom_sub1">
						<ul>
							<li>
								<a href="chi_tiet_sach.php" data-toggle="modal" data-target="#sach<?php echo $sach->id?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
							</li>
						</ul>
					</div>
				</div>
				<h5 class="my_ten_sach"><a href="sach_chi_tiet?id=<?php echo $sach->id?>"><?php echo $sach->ten_sach?></a></h5>
				<div class="simpleCart_shelfItem">
					<p><span><?php echo number_format($sach->gia_bia)?> đ</span> <i class="item_price"><?php echo number_format($sach->don_gia)?> đ</i></p>
                        <input type="hidden" value="1" id="soluong<?php echo $sach->id?>" />&nbsp;
						<input type="hidden" id="dongia<?php echo $sach->id?>" value="<?php echo $sach->don_gia?>"/>
						<p><a class="item_add" href="javascript:mua_hang(<?php echo $sach->id ?>, 1, <?php echo $sach->don_gia?>)" id="<?php echo $sach->id?>" >MUA SÁCH</a></p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="modal video-modal fade" id="sach<?php echo $sach->id?>" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="PUBLIC/layout/images/<?php echo $sach->hinh ?>" alt=" " class="img-responsive" id="my_hinh"/>
						</div>
						<div class="col-md-7 modal_body_right">
							<h4 class="my_h4"><?php echo $sach->doc_thu?></h4>
							<p><?php echo $sach->gioi_thieu?></p>
							<div class="rating">
								<div class="rating-left">
									<img src="PUBLIC/layout/images/star-.png" alt=" " class="img-responsive" />
								</div>

								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span><?php echo number_format($sach->gia_bia)?> đ</span> <i class="item_price"><?php echo number_format($sach->don_gia)?> đ</i></p>
								<input type="hidden" value="1" id="soluong<?php echo $sach->id?>" />&nbsp;
								<input type="hidden" id="dongia<?php echo $sach->id?>" value="<?php echo $sach->don_gia?>"/>
								<p><a class="item_add" href="javascript:mua_hang(<?php echo $sach->id ?>, 1, <?php echo $sach->don_gia?>)" id="<?php echo $sach->id?>" >MUA SÁCH</a></p>
							</div>

						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
									
<?php 
}
?>

<!--<div class="div_phan_trang_2"> if($dem>9) echo $lst ?></div>-->