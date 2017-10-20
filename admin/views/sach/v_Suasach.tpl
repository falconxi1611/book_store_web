<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script src="../public/ckeditor/ckeditor.js"></script>
<script>
  $(function() {
    $( "#ngay_xuat_ban" ).datepicker({
		changeMonth: true,
      	changeYear: true
		});
	$( "#ngay_xuat_ban" ).datepicker( "option", "dateFormat","yy-mm-dd");	
  });
</script>
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
          <label>Tên sách</label>
          <input class="text-input small-input" type="text" id="ten_sach" name="ten_sach" value="{$sach->ten_sach}"/>
        </p>
        <p>
          <label>Tác giả:</label>
          <select name="id_tac_gia" id="id_tac_gia">
            <option value="{$tac_gia->id}" selected >{$tac_gia->ten_tac_gia}</option>
            	
			{foreach $tac_gias as $tg}
            {if $tg->id != $tac_gia->id}
            <option value="{$tg->id}" >{$tg->ten_tac_gia}</option>
            {/if}
			{/foreach}
            
          </select>
        <p>
          <label>Giới thiệu:</label>
          <textarea name="gioi_thieu" id="gioi_thieu" class="text-input medium-input ckeditor" value="{$sach->gioi_thieu}"></textarea>
        <p>Đọc thử
          <textarea name="doc_thu" id="doc_thu" class="text-input medium-input ckeditor" value="{$sach->doc_thu}"></textarea>
        <p>Loại sách
          <select name="id_loai_sach" id="id_loai_sach">
            <option value="{$loai_sach->id}" selected>{$loai_sach->ten_loai_sach}</option>
			{foreach $loai_sachs as $loai}
         	{if $loai->id != $loai_sach->id}
            <option value="{$loai->id}" >{$loai->ten_loai_sach}</option>
            {/if}
			{/foreach}
          
          </select>
        <p>Nhà xuất bản
          <select name="id_nha_xuat_ban" id="id_nha_xuat_ban">
            <option value="{$nxb->id}" selected>{$nxb->ten_nha_xuat_ban}</option>         
			{foreach $nha_xuat_ban as $xb}
            {if $xb->id != $sach->id_nha_xuat_ban}
            <option value="{$xb->id}" >{$xb->ten_nha_xuat_ban}</option>
            {/if}
			{/foreach}
            
          </select>
        <p>Số trang
          <input type="text" name="so_trang" id="so_trang" value="{$sach->so_trang}">
        <p>Ngày xuất bản
          <input type="text" class="text-input small-input" name="ngay_xuat_ban" id="ngay_xuat_ban" value="{$sach->ngay_xuat_ban}">
        <p>Kích thước
          <input type="text" name="kich_thuoc" id="kich_thuoc" value="{$sach->kich_thuoc}">
        <p>SKU
          <input type="text" name="sku" id="sku" value="{$sach->sku}">
        <p>Trọng lượng
          <input type="text" name="trong_luong" id="trong_luong" value="{$sach->trong_luong}">
        <p>Trạng thái
          <select name="trang_thai" id="trang_thai">
            <option value="{$sach->trang_thai}" selected>{$sach->trang_thai}</option>7
            {if $sach->trang_thai == 0}
            <option value="1">1</option>
            {else}
            <option value="0">0</option>
            {/if}
          </select>
        <p><img src="../public/layout/images/{$sach->hinh}"  width="100px" />                
        <p>
          <label>Hình </label>
          <input type="file" name="hinh" />
        <p>Đơn giá
          <input type="text" name="don_gia" id="don_gia" value="{$sach->don_gia}">
        </p>
        <p>Giá bìa
          <input type="text" name="gia_bia" id="gia_bia" value="{$sach->gia_bia}">
        </p>
        <p>Nổi bật
          <select name="noi_bat" id="noi_bat">
            <option value="{$sach->noi_bat}" selected>{$sach->noi_bat}</option>
            {if $sach->noi_bat == 0}
            <option value="1">1</option>
            {else}
            <option value="0">0</option>
            {/if}
          </select>
        </p>
        <p>
          <input class="button" type="submit" value="Cập nhật" name="btnCapnhat"/>
          <!-- onclick="return KiemtraLoai()" -->
          <input class="button" type="button" value="Bỏ qua" onclick="window.location='sach.php'" />
        </p>
      </fieldset>
      <div class="clear"></div>
      <!-- End .clear -->
    </form>
  </div>
  
</div>
