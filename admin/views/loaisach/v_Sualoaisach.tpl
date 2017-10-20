<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script src="../public/ckeditor/ckeditor.js"></script>
<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--ma_loai, ten_loai, mo_ta, hinh-->
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tên loại</label>
            <input class="text-input small-input" type="text" id="ten_loai" name="ten_loai" value="{$loai_sach->ten_loai_sach}" />
          </p>
          <p>ID loại cha
          <input type="text" name="id_loai_cha" id="id_loai_cha" value="{$loai_sach->id_loai_cha}">          
          <p>
            <label>Trạng thái </label>
            <input type="text" name="trang_thai" id="trang_thai" value="{$loai_sach->trang_thai}">
          </p>
          <p>&nbsp;</p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loaisach.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
