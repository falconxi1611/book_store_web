<script>
function Hoi_xoa(ma_loai)
{
	if(confirm("Bạn xóa loại sách hiện hành?"))
	{
		window.location='xoaloaisach.php?ma_loai=' + ma_loai;	
	}	
}
</script>
<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <h3 style="text-align:center; color:red">{if isset($msg)}{$msg}{/if} </h3>
    <table>
      <thead>
        <tr>
          <th>Mã loại</th>
          <th>Tên loại</th>
          <th>ID Loại Cha</th>
          <th>Trạng thái</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      	<tfoot>
          <tr>
            <td colspan="6">
           	<div class="div_phan_trang">{$lst}</div>
            <div class="clear"></div></td>
          </tr>
		</tfoot>
      <tbody>
        
        {foreach $loai_sachs as $loai}
      <tr>
          
          <td>{$loai->id}</td>
          <td><a href="sualoaisach.php?ma_loai={$loai->id}" title="Edit">{$loai->ten_loai_sach}</a></td>
          <td>{$loai->id_loai_cha}</td>
          <td>{$loai->trang_thai}</td>
          <td><!-- Icons --> 
            <a href="sualoaisach.php?ma_loai={$loai->id}" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:Hoi_xoa({$loai->id})" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
		</td>
        </tr>
        {/foreach}
      </tbody>
    </table>
   
  </div>
  
</div>
